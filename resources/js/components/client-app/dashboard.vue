<script>

export default {
    name: "dashboard",
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
                            <a href="/questionnaire" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-primary-transparent">
                                <i class="fa fa-file-text tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">Questionnaire</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Questionnaire collects the required details from you that we need to communicate with you and process your case.</p>
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
                            <a href="/announcements" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-primary-transparent">
                                <i class="fa fa-bullhorn tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">Announcements</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">Announcements groups are used to keep you updated with our latest news, promotions, policies and any kind of updates from us.</p>
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
                            <a href="/messages" class="btn btn-primary tx-inverse float-end">View</a>
                            <div class="avatar radius-4 bg-primary-transparent">
                                <i class="fa fa-comments tx-primary"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="mb-1">
                                <h4 class="tx-20 mb-0 numberfont">Messages</h4>
                            </div>
                            <div class="flex-between">
                                <p class="mb-0">You can contact us through messages, if you have any kind of questions or queries, and we will respond you back as soon as possible.</p>
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
