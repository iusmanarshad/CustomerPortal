<template>
    <!-- Row -->
    <div class="row row-sm">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="d-flex flex-row w-full justify-content-between align-items-center">
                            <div>
                                All Clients
                            </div>
                            <a type="button" class="btn btn-outline-primary mx-2 button-icon" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addClientModal">
                                <i class="fe fe-plus me-2"></i> Add Client
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Owner Name</th>
                                    <th class="border-bottom-0">Email</th>
                                    <th class="border-bottom-0">Phone No.</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Notes</th>
                                    <th class="border-bottom-0">Questionnaire</th>
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(client, index) in clients" :key="index">
                                    <td>{{ client.owner_name }}</td>
                                    <td>{{ client.email }}</td>
                                    <td>{{ client.phone != '' ? client.phone : '-' }}</td>
                                    <td>
                                        <template v-if="client.is_active">
                                            <span v-if="client.status == 'invited'" class="tag rounded-pill tag-outline-info me-1">Invited</span>
                                            <span v-else-if="client.status == 'active'" class="tag rounded-pill tag-outline-success me-1">Active</span>
                                        </template>
                                        <template v-else>
                                            <span class="tag rounded-pill tag-outline-danger me-1">Blocked</span>
                                        </template>


                                    </td>
                                    <td>
                                        <div data-bs-placement="top" data-bs-toggle="tooltip" title="View all notes"
                                            class="btn">
                                            <i class="ti-receipt"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <a type="button" :href="'/portal/clients/questionnaire/' + client.id" class="btn btn-primary btn-w-xs m-1">Open</a>
                                    </td>
                                    <td>

                                        <div aria-label="Basic example" class="btn-group mb-1" role="group">
                                            <button v-if="client.status == 'invited'" class="btn btn-primary btn-icon" type="button" data-bs-placement="top" @click="clientId=client.id"
                                                data-bs-toggle="tooltip" title="Invite client by email">
                                                <i class="ti-email text-white" data-bs-toggle="modal" data-bs-target="#inviteClientModal"></i>
                                            </button>
                                            <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top" @click="openViewClientModal(client)"
                                                data-bs-toggle="tooltip" title="View">
                                                <i class="ti-eye text-white" data-bs-toggle="modal" data-bs-target="#viewClientModal"></i>
                                            </button>
                                            <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title="Edit">
                                                <i class="ti-pencil-alt text-white" data-bs-toggle="modal" data-bs-target="#editClientModal" @click="openEditClientModal(client)"></i>
                                            </button>
                                            <button class="btn btn-primary btn-icon" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title="Delete" type="button">
                                                <i class="ti-trash text-white" data-bs-toggle="modal" @click="clientId=client.id"
                                                    data-bs-target="#deleteConfirmationModal"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <Bootstrap5Pagination
                            v-if="clients"
                            :data="clientsPaginatedData"
                            @pagination-change-page="fetchClients"
                        />
                    </div>
                </div>
            </div>
        </div>


        <!-- Invite confirmation modal -->
        <div class="modal fade" id="inviteClientModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to send an invitation email to this user?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" @click="clientId = null">No</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" @click="inviteClient(clientId)">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invite confirmation modal -->

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
                        Are you sure you want to delete this user?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal" @click="clientId = null">No</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal" @click="deleteClient(clientId)">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete confirmation modal -->

        <!-- Add client modal -->
        <div class="modal fade" id="addClientModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Add Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeEditClientModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                            <div class="form-group">
                                <label for="inpFirstName">First Name</label>
                                <input type="text" class="form-control" id="inpFirstName" name="first_name" v-model="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="inpLastName">Last Name</label>
                                <input type="text" class="form-control" id="inpLastName" name="last_name" v-model="last_name" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="inpOwnerName">Owner Name</label>
                                <input type="text" class="form-control" id="inpOwnerName" name="owner_name" v-model="owner_name" placeholder="Enter owner name">
                            </div>
                            <div class="form-group">
                                <label for="inpEmail">Email address</label>
                                <input type="email" class="form-control" id="inpEmail" name="email" v-model="email" placeholder="Enter email">
                            </div>

                            <div v-if="errors && errors.length > 0" class="alert alert-danger mb-0 mt-2">
                                <ul>
                                    <li v-for="error in errors" :key="error">
                                    {{ error }}
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" id="addClientModalCloseBtn" data-bs-dismiss="modal" type="button" @click="closeAddClientModal()">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" id="createClientButton" @click="addClient()">Save Changes</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- Add client modal -->

        <!-- Edit client modal -->
        <div class="modal fade" id="editClientModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeEditClientModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                            <div class="form-group">
                                <label for="inpFirstName">First Name</label>
                                <input type="text" class="form-control" id="inpFirstName" name="first_name" v-model="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="inpLastName">Last Name</label>
                                <input type="text" class="form-control" id="inpLastName" name="last_name" v-model="last_name" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="inpOwnerName">Owner Name</label>
                                <input type="text" class="form-control" id="inpOwnerName" name="owner_name" v-model="owner_name" placeholder="Enter owner name">
                            </div>
                            <div class="form-group">
                                <label for="inpEmail">Email address</label>
                                <input type="email" class="form-control" id="inpEmail" name="email" v-model="email" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-0 justify-content-end">
                                <div class="checkbox">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" v-model="is_active" id="chekOut">
                                        <label for="chekOut" class="custom-control-label mt-1">Active client</label>
                                    </div>
                                </div>
                            </div>
                            <div v-if="errors && errors.length > 0" class="alert alert-danger mb-0 mt-2">
                                <ul>
                                    <li v-for="error in errors" :key="error">
                                    {{ error }}
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button" @click="closeEditClientModal()">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" id="editClientButton" @click="editClient(clientId)">Save Changes</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- Edit client modal -->

        <!-- View client modal -->
        <div class="modal fade" id="viewClientModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">View Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeViewClientModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                            <div class="form-group">
                                <label for="inpFirstName">First Name</label>
                                <input type="text" class="form-control" id="inpFirstName" name="first_name" v-model="first_name" placeholder="Enter first name" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inpLastName">Last Name</label>
                                <input type="text" class="form-control" id="inpLastName" name="last_name" v-model="last_name" placeholder="Enter last name" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inpOwnerName">Owner Name</label>
                                <input type="text" class="form-control" id="inpOwnerName" name="owner_name" v-model="owner_name" placeholder="Enter owner name" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inpEmail">Email address</label>
                                <input type="email" class="form-control" id="inpEmail" name="email" v-model="email" placeholder="Enter email" readonly>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" @click="closeViewClientModal()">Close</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- View client modal -->

        <div class="position-fixed end-0 top-0 p-3 z-9999">
            <div aria-atomic="true" aria-live="assertive" id="liveToast" class="toast fade border-success" role="alert">
                <div class="toast-header bg-success text-white p-2">
                    <h6 class="tx-14 mg-b-0 mg-e-auto">Success</h6>
                    <button aria-label="Close" class="close tx-normal" data-bs-dismiss="toast" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body p-3">
                    {{ successMessage }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
</template>

<script>
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
export default {
    components: {
        Bootstrap5Pagination
    },
    props: [],
    data() {
        return {
            loading: true,
            clients: null,
            clientsPaginatedData: null,
            errors: null,
            successMessage: '',
            first_name: '',
            last_name: '',
            owner_name: '',
            email: '',
            password: '',
            is_active: true,
            clientId: null,
        }
    },
    methods: {
        openEditClientModal(client) {
            this.first_name = client.first_name;
            this.last_name = client.last_name;
            this.owner_name = client.owner_name;
            this.email = client.email;
            this.password = client.password;
            this.clientId = client.id;
            this.is_active = client.is_active;
        },
        openViewClientModal(client) {
            this.first_name = client.first_name;
            this.last_name = client.last_name;
            this.owner_name = client.owner_name;
            this.email = client.email;
            this.password = client.password;
            this.clientId = client.id;
            this.is_active = client.is_active;
        },
        closeAddClientModal() {
            this.resetFormData();
        },
        closeEditClientModal() {
            this.resetFormData();
        },
        closeViewClientModal() {
            this.resetFormData();
        },
        resetFormData() {
            this.first_name = '';
            this.last_name = '';
            this.owner_name = '';
            this.email = '';
            this.password = '';
            this.clientId = null;
            this.is_active = true;
        },
        inviteClient(id) {
            this.errors = null;
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'put',
                url: 'api/customer-portal/clients/invite/' + id,
                baseURL: window.location.origin,
            })
                .then(response => {
                    this.clientId = null;
                    this.successMessage = response.data.message;
                    var toastLiveExample = document.getElementById('liveToast');
                    var toast = new bootstrap.Toast(toastLiveExample);
                    toast.show();
                    this.fetchClients();
                }).catch((error) => {
                    this.clientId = null;
                    document.querySelector('.loader-container').style.display = 'none';
                });
        },
        deleteClient(id) {
            this.errors = null;
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'delete',
                url: 'api/customer-portal/clients/' + id,
                baseURL: window.location.origin,
            })
                .then(response => {
                    this.clientId = null;
                    this.successMessage = response.data.message;
                    var toastLiveExample = document.getElementById('liveToast');
                    var toast = new bootstrap.Toast(toastLiveExample);
                    toast.show();
                    this.fetchClients();
                }).catch((error) => {
                    this.clientId = null;
                    document.querySelector('.loader-container').style.display = 'none';
                });
        },
        editClient(id) {
            this.errors = null;
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'put',
                url: 'api/customer-portal/clients/' + id,
                baseURL: window.location.origin,
                data: {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    owner_name: this.owner_name,
                    email: this.email,
                    password: this.password,
                    is_active: this.is_active,
                }
            })
                .then(response => {
                    document.querySelector('.loader-container').style.display = 'none';
                    this.successMessage = response.data.message;
                    var toastLiveExample = document.getElementById('liveToast');
                    var toast = new bootstrap.Toast(toastLiveExample);
                    toast.show();
                    this.fetchClients();
                }).catch((error) => {
                    // Handle error response
                    if (error.response && error.response.status === 422) {
                        // Validation failed, update errors array
                        this.errors = Object.values(error.response.data.errors).flat();
                    } else {
                        // Handle other types of errors
                        console.error('API Error:', error);
                    }
                    document.querySelector('.loader-container').style.display = 'none';
                });
        },
        addClient() {
            this.errors = null;
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'post',
                url: 'api/customer-portal/clients',
                baseURL: window.location.origin,
                data: {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    owner_name: this.owner_name,
                    email: this.email,
                    password: this.password,
                }
            })
                .then(response => {
                    document.querySelector('.loader-container').style.display = 'none';
                    const button = document.querySelector('#addClientModalCloseBtn');
                    if (button) {
                        console.log('Button clicked')
                        button.click();
                    }
                    this.successMessage = response.data.message;
                    var toastLiveExample = document.getElementById('liveToast');
                    var toast = new bootstrap.Toast(toastLiveExample);
                    toast.show();
                    this.fetchClients();
                }).catch((error) => {
                    // Handle error response
                    if (error.response && error.response.status === 422) {
                        // Validation failed, update errors array
                        this.errors = Object.values(error.response.data.errors).flat();
                    } else {
                        // Handle other types of errors
                        console.error('API Error:', error);
                    }
                    document.querySelector('.loader-container').style.display = 'none';
                });
        },
        fetchClients(page = 1) {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/clients',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                    page: page,
                }
            })
                .then(response => {
                    console.log(response);
                    this.clients = response.data.data;
                    this.clientsPaginatedData = response.data;
                    document.querySelector('.loader-container').style.display = 'none';
                }).catch((error) => {
                    console.log(error);
                    this.loading = false;
                });
        },
    },
    mounted() {
        this.fetchClients();
    },
    watch: {

    },
}
</script>
<style scoped>

</style>
