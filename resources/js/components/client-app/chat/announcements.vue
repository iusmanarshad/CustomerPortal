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
                                        <h4>Groups</h4>
                                    </div>
                                </div>

                                <!-- chats list -->
                                <group-list :groups="groups"
                                            :selected-channel="selectedGroup"
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
<!--                                                <span class="tx-muted tx-12">2 online</span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- chat messages -->
                                <group-messages :messages="messages"></group-messages>

                                <div class="main-chat-footer br-bs-10 br-be-10">
                                    <p class="text-center w-100 m-0">You can't reply to this conversation</p>
                                </div>
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
    </div>
    <!-- End Row -->
</template>

<script>
import GroupList from "../../chat/group-list.vue";
import GroupMessages from "../../chat/group-messages.vue";

export default {
    components: {GroupList, GroupMessages},
    props: [],
    data() {
        return {
            loading: true,
            errors: null,
            groups: [],
            selectedGroup: null,
            messages: [],
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
                self.readMessages();
            }, 100)
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
                this.updateUnreadMessageBadges(response.data.announcements)
                this.fetchGroups(false)
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },
        updateUnreadMessageBadges(announcements) {
            if (announcements > 0) {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "" + announcements;
                element.classList.remove('invisible')
            } else {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "";
                element.classList.add('invisible')
            }
        },

        fetchGroups(loader) {
            if (loader) {
                document.querySelector('.loader-container').style.display = 'flex';
            }

            axios({
                method: 'get',
                url: 'api/client-app/announcements/groups',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.groups = response.data.groups;
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
                url: 'api/client-app/announcements/messages',
                baseURL: window.location.origin,
                params: {
                    //user_id: this.userId,
                    group_id: this.selectedGroup.id
                }
            }).then(response => {
                console.log(response);
                this.messages = response.data.messages;
                this.scrollToBottom();
                this.fetchGroups(false)
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
    },
    mounted() {
        this.fetchGroups(true);
    },
    watch: {

    },
}
</script>
<style scoped>

</style>
