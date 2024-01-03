<template>
    <!-- Row -->
    <div class="row row-sm">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 col-xxl-4 col-xl-6">
                    <div class="card">
                        <div class="main-content-app">
                            <div class="main-content-left main-content-left-chat overflow-hidden">
                                <div class="panel tabs-style2">
                                    <div class="panel-head p-3 border-bottom">
                                        <ul class="nav nav-tabs p-0">
                                            <li class="nav-item flex-1">
                                                <button class="nav-link active w-100" data-bs-toggle="modal" data-bs-target="#addGroupMembers">
                                                    <i class="fe fe-plus me-2"></i> New Conversation
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- chats list -->
                                <group-list :groups="groups"
                                            :selected-group="selectedGroup"
                                            v-on:open-chat="openGroupChat"
                                ></group-list>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xxl-8 col-xl-6" >
                    <div class="card" v-if="selectedGroup">
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
                                                <h5 class="mb-0">{{ selectedGroup.name }}</h5>
<!--                                                <span class="tx-muted tx-12">{{ usersCount }} online</span>-->
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
                        <div class="main-content-app flex justify-content-center align-items-center">
                            <h3>Click on a chat to see messages</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Add new conversation modal -->
        <div class="modal fade" id="addGroupMembers" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Select user</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input class="form-control radius-4 mb-2" v-model="search" placeholder="Search..." type="text">
                        <!-- clients -->
                        <group-members :users="filteredClients"
                                       :selectable="true"
                                       :selected-users="selectedMembers"
                                       v-on:select="selectMember"
                        ></group-members>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button" @click="search = ''">Close</button>
                        <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" id="createClientButton" @click="createGroup">Save Changes</button>
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
            clients: [],
            filteredClients: [],
            groups: [],
            selectedGroup: null,
            messages: [],
            newMessage: '',
            selectedMembers: [],
            search: '',
            usersCount: 0
        }
    },
    methods: {
        openGroupChat(group) {
            this.selectedGroup = group;
            this.fetchMessages();
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
        selectMember(id) {
            this.selectedMembers = [id];
        },
        appendMessage(message) {
            this.messages.push(message);
            this.scrollToBottom();
        },

        fetchClients() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/chat/clients',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.clients = response.data.clients;
                this.filteredClients = this.clients;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        fetchGroups(loader) {
            if (loader) {
                document.querySelector('.loader-container').style.display = 'flex';
            }

            axios({
                method: 'get',
                url: 'api/customer-portal/chat/channels',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.groups = response.data.channels;
                if (loader) {
                    document.querySelector('.loader-container').style.display = 'none';
                }
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                if (loader) {
                    document.querySelector('.loader-container').style.display = 'none';
                }
            });
        },
        createGroup() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'post',
                url: 'api/customer-portal/chat/channels',
                baseURL: window.location.origin,
                data: {
                    user_id: this.userId,
                    client_id: this.selectedMembers[0]
                }
            }).then(response => {
                console.log(response);
                let newGroup = response.data.channel;
                let index = this.groups.findIndex(group => group.id === newGroup.id);
                if (index >= 0) {
                    this.groups.splice(index, 1);
                }
                this.groups.unshift(newGroup);
                //this.selectedGroup = newGroup;
                this.selectedMembers = [];
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        fetchMessages() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/chat/messages',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                    channel_id: this.selectedGroup.id
                }
            }).then(response => {
                console.log(response);
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
                url: 'api/customer-portal/chat/read-receipt',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                    channel_id: this.selectedGroup.id,
                }
            }).then(response => {
                console.log(response);
                this.updateUnreadMessageBadges(response.data.announcements, response.data.messages)
                this.fetchGroups(false)
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },
        sendMessage() {
            axios({
                method: 'post',
                url: 'api/customer-portal/chat/messages',
                baseURL: window.location.origin,
                data: {
                    user_id: this.userId,
                    channel_id: this.selectedGroup.id,
                    message: this.newMessage,
                }
            }).then(response => {
                console.log(response);
                this.newMessage = '';
                this.appendMessage(response.data.new_message)
                let index = this.groups.findIndex(group => group.id === this.selectedGroup.id);
                this.groups.splice(index, 1);
                this.selectedGroup = response.data.channel;
                this.groups.unshift(this.selectedGroup)
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },

        updateUnreadMessageBadges(announcements, messages) {
            /*if (announcements > 0) {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "" + announcements;
                element.classList.remove('invisible')
            } else {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "";
                element.classList.add('invisible')
            }*/

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
        this.fetchClients();
        this.fetchGroups(true);
    },
    mounted() {
        const self = this;

        var presenceChannel = window.Echo.join('chat')
            .here((users) => {
                console.log('webhooks connected')
                console.log(users.length)
                this.usersCount = users.length;
            })
            .joining((user) => {
                //console.log(user)
                this.usersCount = this.usersCount+1;
            })
            .leaving((user) => {
                //console.log(user)
                this.usersCount = this.usersCount-1;
                if (this.usersCount < 0) {
                    this.usersCount = 0;
                }
            })
            .listen('ChatMessageSent', (e) => {
                console.log('new message sent')

                self.appendMessage(e.message)
                self.fetchGroups(false);
                /*console.log('show notification')
                    console.log(e.message);
                    self.newMessage = e.message;
                    self.showNotification = true;

                    setTimeout(function () {
                        self.hideNotification();
                    }, 5000)*/
            });
    },
    watch: {
        search: function (value) {
            this.filteredClients = this.clients.filter(function (client) {
                return (client.first_name + ' ' + client.last_name).includes(value)
            })
        }
    },
}
</script>
<style scoped>

</style>
