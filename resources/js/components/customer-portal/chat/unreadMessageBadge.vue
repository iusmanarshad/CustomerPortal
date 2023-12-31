<script>
export default {
    name: "unread-message-badge",
    props: ["userId"],
    methods: {
        fetchUnreadMessages() {
            axios({
                method: 'get',
                url: 'api/customer-portal/messages/unread-count',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.manageUnreadBadges(response.data.announcements, response.data.messages);
            }).catch((error) => {
                console.log(error);
                this.loading = false;
            });
        },
        manageUnreadBadges(announcements, messages) {
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
        this.fetchUnreadMessages();
    },
    mounted() {
        console.log('url data')
        console.log(window.location.pathname)
        var presenceChannel = window.Echo.join('message')
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

                if (window.location.pathname !== '/messages') {
                    this.fetchUnreadMessages();
                }

                //self.appendMessage(e.message)

                /*console.log('show notification')
                    console.log(e.message);
                    self.newMessage = e.message;
                    self.showNotification = true;

                    setTimeout(function () {
                        self.hideNotification();
                    }, 5000)*/
            });
    }
}
</script>

<template>

</template>

<style scoped>

</style>
