<script>
export default {
    name: "group-messages",
    props: ["userId", "messages"]
}
</script>

<template>
    <div class="main-chat-body overflow-auto" id="ChatBody">
        <div class="content-inner chat" id="messages">
            <template v-for="message in messages">
                <div class="d-flex justify-content-end chat_block" v-if="message.is_sent_by_me">
                    <div class="msg_block_send">
                        <div class="msg_container_send">
                            <div class="msg_cotainer_send-main">
                                <span>{{ message.message }}</span>
                            </div>
                            <span class="msg_time_send" style="width: 100px; text-align: right">{{ message.timestamp }}</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start chat_block" v-else>
                    <div class="me-1 d-flex align-items-end">
                        <span class="avatar avatar-status" style="background: #D3D3D3; height: 48px; width: 48px;"></span>
                    </div>
                    <div class="msg_block">
                        <div class="msg_container d-flex flex-column align-items-start">
                            <div class="msg_cotainer-main">
                                <span>{{ message.message }}</span>
                            </div>
                            <span class="msg_time_send position-static" style="width: 100px">{{ message.timestamp }}</span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<style scoped>

</style>
