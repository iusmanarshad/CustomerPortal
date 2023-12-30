<script>
export default {
    name: "unread-message-badge",
    props: ["userId"],
    methods: {
        fetchUnreadMessages() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/client-app/messages/unread-count',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.manageUnreadBadges(response.data.announcements, response.data.messages);
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        manageUnreadBadges(announcements, messages) {
            if (announcements > 0) {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "" + announcements;
                element.classList.remove('invisible')
            } else {
                let element = document.getElementById('unread-announcement-count');
                element.innerHTML = "";
                element.classList.add('invisible')
            }

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
    }
}
</script>

<template>

</template>

<style scoped>

</style>
