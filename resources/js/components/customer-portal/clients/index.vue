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
                            <a type="button" class="btn btn-outline-primary mx-2 button-icon" href="/portal/clients/create">
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
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(client, index) in clients" :key="index">
                                    <td>{{ client.owner_name }}</td>
                                    <td>{{ client.email }}</td>
                                    <td></td>
                                    <td>
                                        <span class="tag rounded-pill tag-outline-success me-1">Active</span>
                                    </td>
                                    <td>
                                        <div data-bs-placement="top" data-bs-toggle="tooltip" title="View all notes"
                                            class="btn">
                                            <i class="ti-receipt"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-bs-placement="top" data-bs-toggle="tooltip" title="Invite by email"
                                            class="btn">
                                            <i class="ti-email text-primary"></i>
                                        </div>

                                        <div aria-label="Basic example" class="btn-group mb-1" role="group">
                                            <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top" @click="openViewClientModal(client)"
                                                data-bs-toggle="tooltip" title="View">
                                                <i class="ti-eye text-white" data-bs-toggle="modal" data-bs-target="#viewClientModal"></i>
                                            </button>
                                            <button class="btn btn-primary btn-icon" type="button" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title="Edit">
                                                <i class="ti-pencil-alt text-white" data-bs-toggle="modal" data-bs-target="#addClientModal" @click="openEditClientModal(client)"></i>
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
                    </div>
                </div>
            </div>
        </div>


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

        <!-- Edit client modal -->
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
                            <div class="form-group">
                                <label for="inpPassword">Password</label>
                                <input type="password" class="form-control" id="inpPassword" name="password" placeholder="Password">
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
                        <button class="btn btn-sm btn-primary" type="button" id="createClientButton" @click="editClient(clientId)">Save Changes</button>
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
        <!-- Edit client modal -->
    </div>
    <!-- End Row -->
</template>

<script>
export default {
    props: [],
    data() {
        return {
            loading: true,
            clients: null,
            errors: null,
            first_name: '',
            last_name: '',
            owner_name: '',
            email: '',
            password: '',
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
        },
        openViewClientModal(client) {
            this.first_name = client.first_name;
            this.last_name = client.last_name;
            this.owner_name = client.owner_name;
            this.email = client.email;
            this.password = client.password;
            this.clientId = client.id;
        },
        closeEditClientModal() {
            this.first_name = '';
            this.last_name = '';
            this.owner_name = '';
            this.email = '';
            this.password = '';
            this.clientId = null;
        },
        closeViewClientModal() {
            this.first_name = '';
            this.last_name = '';
            this.owner_name = '';
            this.email = '';
            this.password = '';
            this.clientId = null;
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
                }
            })
                .then(response => {
                    document.querySelector('.loader-container').style.display = 'none';
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
        fetchClients() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/clients',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            })
                .then(response => {
                    console.log(response);
                    this.clients = response.data.data;
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
