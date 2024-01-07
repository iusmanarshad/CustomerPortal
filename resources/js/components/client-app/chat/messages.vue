<template>
    <!-- Row -->
    <div class="row row-sm">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="card" v-if="messageView || messages.length > 0">
                        <div class="main-content-app">
                            <div class="main-content-body main-content-body-chat">
                                <!-- main-chat-header -->
                                <div class="main-chat-header">
                                    <div class="main-header-arrow me-3">
                                        <a href="javascript:void(0);" class="tx-inverse" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                                    </div>
                                    <div class="mg-e-10">
                                        <span class="avatar avatar-status" style="background: #D3D3D3; height: 48px; width: 48px;"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex-between d-block d-sm-flex">
                                            <div>
                                                <h5 class="mb-0">
                                                    {{ ownerName && ownerName !== '' ? ownerName : 'Drummlaw'  }}
                                                </h5>
<!--                                                <span class="tx-muted tx-12">2 online</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- chat messages -->
                                <group-messages :user-id="userId" :associate-id="associateId" :messages="messages"></group-messages>

                                <div class="main-chat-footer br-bs-10 br-be-10">
                                    <input class="form-control radius-7" v-on:keyup.enter="sendMessage" v-model="newMessage" placeholder="Type your message here..." type="text">
                                    <a class="btn btn-outline-primary btn-icon me-2" data-bs-toggle="tooltip" href="javascript:void(0);" title="Attach Files"><i class="fe fe-paperclip"></i></a>
                                    <a class="btn btn-primary btn-icon text-white" @click="sendMessage"><i class="fe fe-send"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card" v-else>
                        <div class="main-content-app flex flex-column justify-content-center align-items-center">
                            <h6>Do you have any questions or queries? Feel free to contact our support team</h6>
                            <button class="btn btn-primary font-weight-bold mt-2"
                                    @click="showMessages"
                            >Message Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->
</template>

<script>
import GroupList from "../../chat/group-list.vue";
import GroupMembers from "../../chat/group-members.vue";
import GroupMessages from "../../chat/group-messages.vue";
import DeleteConfirmationModal from "../../common/delete-confirmation-modal.vue";

export default {
    components: {GroupList, GroupMembers, GroupMessages, DeleteConfirmationModal},
    props: ["userId", "associateId"],
    data() {
        return {
            loading: true,
            errors: null,
            ownerName: '',
            selectedGroup: null,
            messages: [],
            newMessage: '',
            messageView: false
        }
    },
    methods: {
        showMessages() {
            this.messageView = true
        },
        scrollToBottom() {
            const self = this;
            setTimeout(function () {
                let parentContainer = document.getElementById('ChatBody')
                let childContainer = document.getElementById('messages')
                if (parentContainer && childContainer) {
                    parentContainer.scrollTop = childContainer.scrollHeight
                }
                console.log('scrolled to bottom')
                self.readMessages();
            }, 100)
        },
        appendMessage(message) {
            this.messages.push(message);
            this.scrollToBottom();
        },

        fetchMessages() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/client-app/chat/messages',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.ownerName = response.data.owner_name;
                console.log(this.ownerName)
                this.selectedGroup = response.data.channel;
                this.messages = response.data.messages;
                this.scrollToBottom();
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        readMessages() {
            axios({
                method: 'put',
                url: 'api/client-app/chat/read-receipt',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                    channel_id: this.selectedGroup.id,
                }
            }).then(response => {
                console.log(response);
                this.updateUnreadMessageBadges(response.data.messages)
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },
        sendMessage() {
            axios({
                method: 'post',
                url: 'api/client-app/chat/messages',
                baseURL: window.location.origin,
                data: {
                    user_id: this.userId,
                    message: this.newMessage,
                }
            }).then(response => {
                console.log(response);
                this.newMessage = '';
                this.appendMessage(response.data.new_message)
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },

        updateUnreadMessageBadges(messages) {
            if (messages > 0) {
                let element = document.getElementById('unread-message-count');
                element.innerHTML = "" + messages;
                element.classList.remove('invisible')
            } else {
                let element = document.getElementById('unread-message-count');
                element.innerHTML = "";
                element.classList.add('invisible')
            }
        }
    },
    created() {
        this.fetchMessages();
    },
    mounted() {
        const self = this;

        var presenceChannel = window.Echo.join('chat')
            .here((users) => {
                console.log('webhooks connected')
                console.log(users.length)
                //this.usersCount = users.length;
            })
            .joining((user) => {
                //
            })
            .leaving((user) => {
                //
            })
            .listen('ChatMessageSent', (e) => {
                console.log('new message sent')
            });

        var presenceChannel2 = window.Echo.join('presence-chat')
            .here((users) => {
                console.log('webhooks connected')
                console.log(users.length)
                //this.usersCount = users.length;
            })
            .joining((user) => {
                //
            })
            .leaving((user) => {
                //
            })
            .listen('ChatMessageSent', (e) => {
                console.log('new message sent')
            });

        /*var presenceChannel = window.Echo.join('chat')
            .here((users) => {
                console.log('webhooks connected')
                console.log(users.length)
                //this.usersCount = users.length;
            })
            .joining((user) => {
                //console.log(user)
                //this.usersCount = this.usersCount+1;
            })
            .leaving((user) => {
                //console.log(user)
                /!*this.usersCount = this.usersCount-1;
                if (this.usersCount < 0) {
                    this.usersCount = 0;
                }*!/
            })
            .listen('ChatMessageSent', (e) => {
                console.log('new message sent')

                self.appendMessage(e.message)

                /!*console.log('show notification')
                    console.log(e.message);
                    self.newMessage = e.message;
                    self.showNotification = true;

                    setTimeout(function () {
                        self.hideNotification();
                    }, 5000)*!/
            });*/
    },
}
</script>
<style scoped>

</style>
