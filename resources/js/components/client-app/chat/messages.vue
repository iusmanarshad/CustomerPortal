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
                                                <h5 class="mb-0">Customer Support</h5>
<!--                                                <span class="tx-muted tx-12">2 online</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- chat messages -->
                                <group-messages :user-id="userId" :messages="messages"></group-messages>

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
    props: ["userId"],
    data() {
        return {
            loading: true,
            errors: null,
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
        fetchMessages() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/client-app/messages/messages',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.messages = response.data.messages;
                this.scrollToBottom();
                //this.selectedGroup = response.data.group;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        sendMessage() {
            //document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'post',
                url: 'api/client-app/messages/messages',
                baseURL: window.location.origin,
                data: {
                    user_id: this.userId,
                    //group_id: this.selectedGroup.id,
                    message: this.newMessage,
                }
            }).then(response => {
                console.log(response);
                this.newMessage = '';
                this.appendMessage(response.data.new_message)
                //this.selectedGroup = response.data.group;
                //document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                //document.querySelector('.loader-container').style.display = 'none';
            });
        },
        appendMessage(message) {
            this.messages.push(message);
            this.scrollToBottom();
        },

        scrollToBottom() {
            setTimeout(function () {
                let parentContainer = document.getElementById('ChatBody')
                let childContainer = document.getElementById('messages')
                if (parentContainer && childContainer) {
                    console.log(childContainer.scrollHeight)
                    parentContainer.scrollTop = childContainer.scrollHeight
                }
            }, 100)
        },
    },
    created() {
        const self = this;

        var presenceChannel = window.Echo.join('chat')
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
                /*this.usersCount = this.usersCount-1;
                if (this.usersCount < 0) {
                    this.usersCount = 0;
                }*/
            })
            .listen('MessageSent', (e) => {
                console.log('new message sent')

                self.appendMessage(e.message)

                //let showChat = localStorage.getItem("global-chat");
                /*if (showChat == 'false') {
                    console.log('show notification')
                    console.log(e.message);
                    self.newMessage = e.message;
                    self.showNotification = true;

                    setTimeout(function () {
                        self.hideNotification();
                    }, 5000)
                }*/
            });
    },
    mounted() {
        this.fetchMessages();
    },
}
</script>
<style scoped>

</style>
