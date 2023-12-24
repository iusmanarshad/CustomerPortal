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
                                    <h6 class="mb-0">{{ group.name }}</h6>
                                    <span class="tx-muted tx-11 align-self-start min-w-fit-content">{{ group.last_activity }}</span>
                                </div>
                                <p class="mb-0 tx-12">Consetetur sanctus consetetur amet amet stet,.</p>
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
