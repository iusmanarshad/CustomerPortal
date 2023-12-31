<script>
export default {
    name: "group-list",
    props: ["groups", "selectedGroup"],
    methods: {
        openChat(group) {
            this.$emit("openChat", group);
        }
    }
}
</script>

<template>
    <div class="main-chat-list overflow-auto" id="ChatList">
        <div class="panel-body p-0 border-0 overflow-scroll" id="chats">
            <div class="tab-content">
                <div class="tab-pane active" id="style2tab1">
                    <template v-for="group in groups">
                        <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed"
                             :class="{'selected': selectedGroup && selectedGroup.id === group.id }"
                             @click="openChat(group)"
                        >
                            <div class="mg-e-10">
                                <span class="avatar avatar-status" style="background: #D3D3D3; height: 48px; width: 48px;"></span>
                            </div>
                            <div class="flex-1">
                                <div class="flex-between mb-1">
                                    <h6 class="mb-0">
                                        {{ group.name }}
                                        <span class="badge badge-top rounded-pill bg-danger mx-3" :class="{'invisible': group.unread_messages == 0}" style="position: inherit !important;" :id="group.slug + '_unread-message-count'">
                                            {{ group.unread_messages }}
                                        </span>
                                    </h6>
                                    <span class="tx-muted tx-11 align-self-start min-w-fit-content">{{ group.last_activity }}</span>
                                </div>
                                <p class="mb-0 tx-12">{{ group.last_message.length > 40 ? group.last_message.substring(0, 40) + '...' : group.last_message }}</p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
