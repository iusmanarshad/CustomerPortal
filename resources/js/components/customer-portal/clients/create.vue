<template>
    <div class="container mx-auto mt-3">
        <FormWizard @on-complete="onComplete" color="#094899">
            <TabContent title="Personal details" icon="fa fa-user" :before-change="beforePersonalTabSwitch">
                <div class="row row-sm mb-3">
                    <div class="col-md-5 col-lg-4">
                        <label for="firstname" class="form-label">Firstname: <span class="tx-danger">*</span></label>
                        <input type="text" id="firstname" class="form-control" :class="{'is-invalid' : firstnameError || first_name == '' }" name="first_name" v-model="first_name"
                            placeholder="Enter first name">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <label for="lastname" class="form-label">Lastname: <span class="tx-danger">*</span></label>
                        <input type="text" id="lastname" class="form-control" :class="{ 'is-invalid': lastnameError || last_name == '' }" name="last_name" v-model="last_name"
                            placeholder="Enter last name">
                    </div>
                </div>
            </TabContent>
            <TabContent title="Additional Info" icon="fa fa-gear" :before-change="beforeAdditionalTabSwitch">
                <div class="row row-sm mb-3">
                    <div class="col-md-5 col-lg-4">
                        <label for="email" class="form-label">Email: <span class="tx-danger">*</span></label>
                        <input type="email" id="email" class="form-control" name="email" v-model="email" :class="{ 'is-invalid': emailError || email == '' }"
                            placeholder="Enter email address" required>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <label for="password" class="form-label">Password: <span class="tx-danger">*</span></label>
                        <input type="text" id="password" class="form-control" name="password" v-model="password" :class="{ 'is-invalid': passwordError || password == ''}"
                            placeholder="Enter password" required>
                    </div>
                </div>
            </TabContent>
            <TabContent title="Last step" icon="fa fa-city">
                <div class="form-group">
                    <label for="owner_name" class="form-label">Owner Name</label>
                    <input type="text" id="owner_name" name="owner_name" v-model="owner_name" class="form-control"
                        placeholder="Owner Name">
                </div>
            </TabContent>
        </FormWizard>

        <div v-if="errors && errors.length > 0" class="alert alert-danger mb-0 mt-2">
            <ul class="mb-0">
                <li v-for="error in errors" :key="error">
                {{ error }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
//local registration
import { FormWizard, TabContent } from 'vue3-form-wizard'
import 'vue3-form-wizard/dist/style.css'

export default {
    //component code
    components: {
        FormWizard,
        TabContent
    },
    data() {
        return {
            loading: true,
            errors: null,
            first_name: '',
            last_name: '',
            owner_name: '',
            email: '',
            password: '',
            firstnameError: false,
            lastnameError: false,
            ownernameError: false,
            emailError: false,
            passwordError: false,
        }
    },
    methods: {
        onComplete() {
            this.createClient();
        },
        beforePersonalTabSwitch() {
            this.firstnameError = this.first_name == '';
            this.lastnameError = this.last_name == '';
            if(this.first_name == '' || this.last_name == '') {
                return false;
            } else {
                return true;
            }
        },
        beforeAdditionalTabSwitch() {
            this.emailError = this.email == '';
            this.passwordError = this.password == '';
            if(this.email == '' || this.password == '') {
                return false;
            } else {
                return true;
            }
        },
        createClient() {
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
                    window.location.href = '/portal/clients';
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
    },
    mounted() {

    },
    watch: {

    },
}
</script>
<style scoped></style>
