<template>
    <div id="wizard2" class="br-5">
        <h3>Personal Information</h3>
        <section>
            <p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <label for="firstname" class="form-label">Firstname: <span class="tx-danger">*</span></label>
                    <input type="text" id="firstname" class="form-control" v-model="first_name" name="first_name"
                        placeholder="Enter first name" required>
                        <p>{{ first_name }}</p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <label for="lastname" class="form-label">Lastname: <span class="tx-danger">*</span></label>
                    <input type="text" id="lastname" class="form-control" name="last_name" v-model="last_name"
                        placeholder="Enter last name">
                </div>
            </div>
        </section>
        <h3>Account Information</h3>
        <section>
            <p class="mg-b-20 tx-14">Try the keyboard navigation by clicking arrow left or right!</p>
            <div class="row row-sm">
                <div class="col-md-5 col-lg-4">
                    <label for="email" class="form-label">Email: <span class="tx-danger">*</span></label>
                    <input type="email" id="email" class="form-control" name="email" v-model="email"
                        placeholder="Enter email address" required>
                </div>
                <div class="col-md-5 col-lg-4">
                    <label for="password" class="form-label">Password: <span class="tx-danger">*</span></label>
                    <input type="password" id="password" class="form-control" name="password" v-model="password"
                        placeholder="Enter password" required>
                </div>
            </div>
        </section>
        <h3>Owner Details</h3>
        <section>
            <div class="form-group">
                <label for="owner_name" class="form-label">Owner Name</label>
                <input type="text" id="owner_name" name="owner_name" v-model="owner_name" class="form-control" placeholder="Owner Name">
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: true,
            errors: null,
            first_name: '',
            last_name: '',
            owner_name: '',
            email: '',
            password: '',
        }
    },
    methods: {
        createClient(dataObj) {
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'post',
                url: 'api/customer-portal/clients',
                baseURL: window.location.origin,
                data: {
                    first_name: dataObj.fname,
                    last_name: dataObj.lname,
                    owner_name: dataObj.oname,
                    email: dataObj.email,
                    password: dataObj.password,
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
        let dataObj = {};
        $('#wizard2').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            autoFocus: true,
            titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
            onFinished: (event, currentIndex) => {
                console.log("Finished the wizard")
                var oname = $('#owner_name').parsley();
                dataObj.oname = oname.getValue();
                this.createClient(dataObj);
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                if (currentIndex < newIndex) {
                    // Step 1 form validation
                    if (currentIndex === 0) {
                        var fname = $('#firstname').parsley();
                        var lname = $('#lastname').parsley();
                        console.log(fname.getValue());
                        if (fname.isValid() && lname.isValid()) {
                            dataObj.fname = fname.getValue();
                            dataObj.lname = lname.getValue();
                            return true;
                        } else {
                            fname.validate();
                            lname.validate();
                        }
                    }
                    // Step 2 form validation
                    if (currentIndex === 1) {
                        console.log("2nd the wizard")
                        var email = $('#email').parsley();
                        var password = $('#password').parsley();
                        if (email.isValid() && password.isValid()) {
                            dataObj.email = email.getValue();
                            dataObj.password = password.getValue();
                            return true;
                        } else {
                            email.validate();
                            password.validate();
                        }
                    }
                    // Always allow step back to the previous step even if the current step is not valid.
                } else {
                    return true;
                }
            }
        });
    },
    watch: {

    },
}
</script>
<style scoped></style>
