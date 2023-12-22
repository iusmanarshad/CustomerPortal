<script>
export default {
    name: "group-members",
    props: ["users", "selectable", "selectedUsers"],
    methods: {
        select(userId) {
            this.$emit("select", userId);
        }
    }
}
</script>

<template>
    <div :class="{'main-chat-list': selectable}">
        <template v-for="user in users">
            <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed"
                 :class="{'rounded-3 mb-2': selectable, 'selected': selectedUsers.includes(user.id)}"
                 @click="select(user.id)"
            >
                <div class="mg-e-10">
                    <span class="avatar avatar-status" style="background: #D3D3D3; height: 48px; width: 48px;"></span>
                </div>
                <div class="flex-1">
                    <div class="flex-between mb-1">
                        <h6 class="mb-0">{{ user.first_name }} {{ user.last_name }}</h6>
                    </div>
                    <p class="mb-0 tx-12">{{ user.owner_name }}</p>
                </div>
            </div>
        </template>
    </div>
</template>

<style scoped>

</style>
