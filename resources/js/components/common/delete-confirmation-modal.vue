<script>
export default {
    name: "delete-confirmation-modal",
    props: ['message'],
    methods: {
        cancel() {
            this.$emit('cancel');
        },
        confirm() {
            this.$emit('confirm');
        }
    }
}
</script>

<template>
    <!-- Delete confirmation modal -->
    <div class="modal fade" id="deleteConfirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {{ message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" @click="cancel">No</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" @click="confirm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete confirmation modal -->
</template>

<style scoped>

</style>
