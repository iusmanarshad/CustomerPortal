<script>
import Announcements from "@/components/customer-portal/chat/announcements.vue";

export default {
    name: "dashboard",
    components: {Announcements},
    data () {
        return {
            clients: 0,
            announcements: 0,
            chats: 0,
            unreadMessages: 0
        }
    },
    methods: {
        getStats() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/dashboard/stats',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.clients = response.data.clients;
                this.announcements = response.data.announcements;
                this.chats = response.data.chats;
                this.unreadMessages = response.data.unread_messages;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        }
    },
    created() {
        this.getStats();
    }
}
</script>

<template>
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
<!--                            <a href="javascript:void(0)" class="tx-inverse float-end" data-bs-toggle="dropdown"
                               aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Another Action</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Something Else Here</a></li>
                            </ul>-->
                            <a href="/portal/clients" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-primary-transparent">
                                <i class="fa fa-users tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">{{ clients }}</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Total Clients</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="/portal/announcements" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-secondary-transparent">
                                <i class="fa fa-bullhorn tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">{{ announcements }}</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Announcement Groups</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="/portal/messages" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-warning-transparent">
                                <i class="fa fa-comments tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">{{ chats }}</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Active chats</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column mb-0">
                        <div class="mb-3">
                            <a href="/portal/messages" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-success-transparent">
                                <i class="fa fa-comment tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">{{ unreadMessages }}</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">New Messages</p>
                                <span class="badge badge-success-transparent badge-sm rounded-pill">+100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
