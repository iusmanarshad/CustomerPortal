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
                                                <button class="nav-link active w-100" data-bs-toggle="modal" data-bs-target="#addGroup">
                                                    <i class="fe fe-plus me-2"></i> Add New Group
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
                                            <div class="btn-list d-flex align-items-center ms-auto">
                                                <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="Delete Group"><i class="fe fe-trash" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal"></i></a>
                                                <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="View Group Info and Manage Members" @click="showGroupInfo"><i class="fe fe-alert-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <template v-if="activeView === 'chat' && selectedGroup.members.length > 0">

                                    <!-- chat messages -->
                                    <group-messages :user-id="userId" :messages="messages"></group-messages>

                                    <div class="main-chat-footer br-bs-10 br-be-10">
                                        <input class="form-control radius-7" v-on:keyup.enter="sendMessage" v-model="newMessage" placeholder="Type your message here..." type="text">
                                        <a class="btn btn-outline-primary btn-icon me-2" data-bs-toggle="tooltip" href="javascript:void(0);" title="Attach Files"><i class="fe fe-paperclip"></i></a>
                                        <a class="btn btn-primary btn-icon text-white" @click="sendMessage"><i class="fe fe-send"></i></a>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="group-info p-4 overflow-auto">
                                        <div v-if="selectedGroup.members.length > 0">
                                            <a class="btn d-flex flex-row p-0" href="javascript:void(0);" @click="showGroupChat">
                                                <i class="fe fe-arrow-left"></i>
                                                <p>&nbsp; Go to chat</p>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-row justify-content-between">
                                            <div>
                                                <h5>Group Members</h5>
                                            </div>
                                            <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" @click="editGroupMembers" data-bs-toggle="tooltip" title="Edit Group Members"><i class="fe fe-user-plus fe-bold tx-30 tx-bold" data-bs-toggle="modal" data-bs-target="#addGroupMembers"></i></a>
                                        </div>
                                        <template v-if="selectedGroup.members.length > 0">
                                            <!-- chat members -->
                                            <group-members :users="selectedGroup.members" :selectable="false" :selected-users="[]"></group-members>
                                        </template>
                                        <template v-else>
                                            <div>
                                                <p>No members! add members to group.</p>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="card" v-else>
                        <div class="main-content-app flex justify-content-center align-items-center">
                            <h3>Click on a group to see messages</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Add group modal -->
        <div class="modal fade" id="addGroup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Add Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inpGroupName">Name</label>
                            <input type="text" class="form-control" id="inpGroupName" name="group_name" v-model="groupForm.name" placeholder="Enter group name">
                        </div>
<!--                        <div class="form-group">
                            <label for="inpGroupSlug">Slug</label>
                            <input type="text" class="form-control" id="inpGroupSlug" name="group_slug" v-model="groupForm.slug" placeholder="Enter group slug">
                        </div>-->
                        <div class="form-group">
                            <label for="inpGroupDescription">Description</label>
                            <textarea class="form-control" id="inpGroupDescription" name="group_description" v-model="groupForm.description" placeholder="Enter group description"></textarea>
                        </div>
<!--                        <div class="form-group">
                            <label for="inpGroupCover">Cover image</label>
                            <input type="file" class="form-control" id="inpGroupCover" name="group_Cover">
                        </div>-->

                        <div v-if="errors && errors.length > 0" class="alert alert-danger mb-0 mt-2">
                            <ul>
                                <li v-for="error in errors" :key="error">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" id="createClientButton" @click="createGroup">Save Changes</button>
                    </div>

                </div>

            </div>
        </div>

        <!-- Add group members modal -->
        <div class="modal fade" id="addGroupMembers" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Select members</h5>
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
                        <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" id="createClientButton" @click="updateGroupMembers">Save Changes</button>
                    </div>
                </div>

            </div>
        </div>

        <delete-confirmation-modal :message="'Are you sure you want to delete this group?'" v-on:confirm="deleteGroup"></delete-confirmation-modal>

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
            clients: [],
            filteredClients: [],
            groupForm: {
                name: '',
                slug: '',
                description: ''
            },
            groups: [],
            selectedGroup: null,
            messages: [],
            newMessage: '',
            activeView: 'chat',
            selectedMembers: [],
            search: '',
            usersCount: 0
        }
    },
    methods: {
        scrollToBottom() {
            const self = this;
            setTimeout(function () {
                let parentContainer = document.getElementById('ChatBody')
                let childContainer = document.getElementById('messages')
                if (parentContainer && childContainer) {
                    parentContainer.scrollTop = childContainer.scrollHeight
                }
                console.log('scrolled to bottom')
            }, 100)
        },

        fetchClients() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/clients',
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
        fetchGroups() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/groups',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.groups = response.data.groups;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        createGroup() {
            document.querySelector('.loader-container').style.display = 'flex';

            let formData = {
                name: this.groupForm.name,
                slug: this.groupForm.slug,
                description: this.groupForm.description
            };

            axios({
                method: 'post',
                url: 'api/customer-portal/announcements/groups',
                baseURL: window.location.origin,
                data: formData
            }).then(response => {
                console.log(response);
                this.groups.unshift(response.data.group);
                console.log(this.groups)
                this.groupForm = {
                    name: '',
                    slug: '',
                    description: ''
                };
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        openGroupChat(group) {
            console.log(this.selectedGroup)
            this.selectedGroup = group;
            this.fetchMessages();
        },
        fetchMessages() {
            document.querySelector('.loader-container').style.display = 'flex';
            console.log(this.userId)

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/messages',
                baseURL: window.location.origin,
                params: {
                    //user_id: this.userId,
                    group_id: this.selectedGroup.id
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
        sendMessage() {
            //document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'post',
                url: 'api/customer-portal/announcements/messages',
                baseURL: window.location.origin,
                data: {
                    //user_id: this.userId,
                    group_id: this.selectedGroup.id,
                    message: this.newMessage,
                }
            }).then(response => {
                console.log(this.groups)
                console.log(response);
                this.newMessage = '';
                this.messages.push(response.data.new_message);
                let index = this.groups.findIndex(group => group.id === this.selectedGroup.id);
                this.groups.splice(index, 1);
                this.selectedGroup = response.data.group;
                this.groups.unshift(this.selectedGroup)
                this.scrollToBottom();
                //document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                //document.querySelector('.loader-container').style.display = 'none';
            });
        },
        deleteGroup() {
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'delete',
                url: 'api/customer-portal/announcements/groups',
                baseURL: window.location.origin,
                data: {
                    group_id: this.selectedGroup.id,
                    members: this.selectedMembers.join(',')
                }
            }).then(response => {
                console.log(response);
                this.newMessage = '';
                let index = this.groups.findIndex(group => group.id === this.selectedGroup.id);
                this.groups.splice(index, 1);
                this.selectedGroup = null;
                console.log(this.groups)
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        showGroupChat() {
            this.activeView = 'chat';
            console.log(this.activeView)
        },
        showGroupInfo() {
            this.activeView = 'info';
        },
        editGroupMembers() {
            const pluck = (arr, key) => arr.map(i => i[key]);
            this.selectedMembers = pluck(this.selectedGroup.members, 'id');
        },
        selectMember(id) {
            this.selectedMembers.includes(id) ? this.removeMember(id) : this.addMember(id);
        },
        addMember(id) {
            this.selectedMembers.push(id);
        },
        removeMember(id) {
            let index = this.selectedMembers.indexOf(id);
            if (index !== -1) {
                this.selectedMembers.splice(index, 1);
            }
        },
        updateGroupMembers() {
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'post',
                url: 'api/customer-portal/announcements/members',
                baseURL: window.location.origin,
                data: {
                    group_id: this.selectedGroup.id,
                    members: this.selectedMembers.join(',')
                }
            }).then(response => {
                console.log(response);
                this.search = '';
                let index = this.groups.findIndex(group => group.id === this.selectedGroup.id);
                this.groups.splice(index, 1);
                this.selectedGroup = response.data.group;
                this.groups.unshift(this.selectedGroup)
                console.log(this.groups)
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        }
    },
    mounted() {
        this.fetchClients();
        this.fetchGroups();
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
