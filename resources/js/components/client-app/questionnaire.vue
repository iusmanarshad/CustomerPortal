<template>
    <div class="container mx-auto mt-3">
        <FormWizard @on-complete="onComplete" color="#094899" @on-change="handleTabChange">
            <template v-for="(section, key) in questions" :key="key">
                <TabContent :title="getTitleFromKey(key)" icon="fa fa-user" :before-change="beforeTabSwitch" >
                    <div class="row row-sm mb-3">
                        <template v-for="(sectionQuestions, index) in section" :key="index">

                            <template v-for="(question, questionKey) in sectionQuestions" :key="questionKey">
                                <template v-if="questionKey == 'further_questions' && ((index == 'is_there_an_opposing_party' && sectionQuestions.question.value == 1) || (index != 'is_there_an_opposing_party' && sectionQuestions.question.value == 0))">
                                    <div class="row row-sm">
                                        <template v-for="(furtherQuestion, furtherQuestionKey) in question" :key="furtherQuestionKey">
                                            <div class="col-md-5 col-lg-6">
                                                <label :for="furtherQuestion.key" class="form-label">{{ furtherQuestion.question }}: <span class="tx-danger" v-if="furtherQuestion.is_required == 1">*</span></label>
                                                <template v-if="furtherQuestion.type == 'phone'">
                                                    {{
                                                        initializePhoneInput(furtherQuestion)
                                                    }}
                                                    <div class="input-group telephone-input">
                                                        <input type="tel" :id="furtherQuestion.key" placeholder="e.g. +1 702 123 4567" v-model="furtherQuestion.value" :class="{ 'border border-danger': furtherQuestion.is_required == 1 && (furtherQuestion.error || furtherQuestion.value == '' || furtherQuestion.value == null) }">
                                                    </div>
                                                </template>
                                                <template v-else-if="furtherQuestion.type == 'boolean'">
                                                    <label class="rdiobox"><input v-if="furtherQuestion.value == 1" name="rdio" type="radio" v-model="furtherQuestion.value" value="1" checked><input v-else name="rdio" type="radio" v-model="furtherQuestion.value" value="1"> <span>Yes</span></label>
                                                    <label class="rdiobox"><input v-if="furtherQuestion.value == 0" name="rdio" type="radio" v-model="furtherQuestion.value" value="0" checked><input name="rdio" type="radio" v-model="furtherQuestion.value" value="0"> <span>No</span></label>
                                                </template>
                                                <template v-else-if="furtherQuestion.type == 'textarea'">
                                                    <textarea v-model="question.value" class="form-control mg-t-10" :class="{ 'is-invalid': furtherQuestion.is_required == 1 && (furtherQuestion.error || furtherQuestion.value == '' || furtherQuestion.value == null) }" rows="5"></textarea>
                                                </template>
                                                <template v-else>
                                                    <input :type="getInputType(furtherQuestion.type)" :id="furtherQuestion.key" class="form-control"
                                                        :class="{ 'is-invalid': furtherQuestion.is_required == 1 && (furtherQuestion.error || furtherQuestion.value == '' || furtherQuestion.value == null) }" :name="furtherQuestion.key"
                                                        v-model="furtherQuestion.value">
                                                </template>

                                            </div>
                                        </template>
                                    </div>


                                </template>
                                <template v-else-if="questionKey == 'question'">
                                    <div class="col-md-5 col-lg-6">
                                        <label :for="question.key" class="form-label">{{ question.question }}: <span class="tx-danger" v-if="question.is_required == 1">*</span></label>
                                        <template v-if="question.type == 'phone'">
                                            {{
                                                initializePhoneInput(question)
                                            }}
                                            <div class="input-group telephone-input">
                                                <input type="tel" :id="question.key" placeholder="e.g. +1 702 123 4567" v-model="question.value" :class="{ 'border border-danger': question.is_required == 1 && (question.error || question.value == '' || question.value == null) }">
                                            </div>
                                        </template>
                                        <template v-else-if="question.type == 'boolean'">
                                            <label class="rdiobox"><input v-if="question.value == 1" :name="question.key" type="radio" v-model="question.value" value="1" checked><input v-else name="rdio" type="radio" v-model="question.value" value="1"> <span>Yes</span></label>
                                            <label class="rdiobox"><input v-if="question.value == 0" :name="question.key" type="radio" v-model="question.value" value="0" checked><input v-else :name="question.key" type="radio" v-model="question.value" value="0"> <span>No</span></label>
                                        </template>
                                        <template v-else-if="question.type == 'textarea'">
                                            <textarea v-model="question.value" class="form-control mg-t-10" :class="{ 'is-invalid': question.is_required == 1 && (question.error || question.value == '' || question.value == null) }" rows="5"></textarea>
                                        </template>
                                        <template v-else>
                                            <input :type="getInputType(question.type)" :id="question.key" class="form-control"
                                                :class="{ 'is-invalid': question.is_required == 1 && (question.error || question.value == '' || question.value == null) }" :name="question.key"
                                                v-model="question.value">
                                        </template>

                                    </div>
                                </template>
                            </template>

                            <template v-if="index == 'is_there_any_associate'">
                                <div v-show="index == 'is_there_any_associate' && sectionQuestions.question.value == 1" class="row row-sm">
                                    <div class="col-md-5 col-lg-6 mt-2">
                                        <button type="button" style="background-color: rgb(9, 72, 153); border-color: rgb(9, 72, 153); color: white;" @click="addAssociate()">Add more associate</button>
                                    </div>
                                </div>
                                <template v-if="associates">
                                    <template v-for="(associate, associateIndex) in associates">
                                        <div class="row row-sm" v-show="index == 'is_there_any_associate' && sectionQuestions.question.value == 1">

                                            <template v-for="(question, questionIndex) in associate.questions">

                                                <div class="col-md-5 col-lg-6">
                                                    <label :for="question.key + associateIndex" class="form-label">{{ question.question }}: <span class="tx-danger" v-if="question.is_required == 1">*</span></label>
                                                    <input :type="getInputType(question.type)" :id="question.key + associateIndex" class="form-control" :readonly="question.is_read_only == 1"
                                                            :class="{ 'is-invalid': question.is_required == 1 && (question.error || question.value == '' || question.value == null || (question.key == 'associate_email' && question.isEmailValid == 0)) }" :name="question.key + associateIndex"
                                                            v-model="question.value">
                                                </div>

                                            </template>
                                            <div v-show="index == 'is_there_any_associate' && sectionQuestions.question.value == 1 && associates.length > 1 && associate.is_removable == 1" class="row row-sm">
                                                <div class="col-md-5 col-lg-6 mt-4">
                                                    <button type="button" style="background-color: rgb(9, 72, 153); border-color: rgb(9, 72, 153); color: white;" @click="removeAssociate(associateIndex)">Remove this associate</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4" v-show="index == 'is_there_any_associate' && sectionQuestions.question.value == 1">
                                    </template>
                                </template>
                            </template>


                        </template>
                    </div>
                </TabContent>
            </template>
        </FormWizard>

        <div v-if="errors && errors.length > 0" class="alert alert-danger mt-2 mb-3">
            <ul class="mb-0">
                <li v-for="error in errors" :key="error">
                    {{ error }}
                </li>
            </ul>
        </div>

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
            questions: null,
            currentSection: null,
            currentSectionKey: null,
            firstSectionKey: 'contact_details',
            secondSectionKey: 'address',
            thirdSectionKey: 'opposing_party',
            fourthSectionKey: 'billing_details',
            fifthSectionKey: 'trademark_details',
            sixthSectionKey: 'associates',
            seventhSectionKey: 'feedback',
            loading: true,
            errors: null,
            successMessage: '',
            associates: null,
            emailError: false,
        }
    },
    methods: {
        removeAssociate(index) {
            // Use splice to remove the associate at the specified index
            this.associates.splice(index, 1);
        },
        addAssociate() {
            const newAssociate = {
                questions: [
                    { type: 'string', question: 'First Name', is_required: 1, key: 'associate_first_name',  value: '' },
                    { type: 'string', question: 'Last Name', is_required: 1, key: 'associate_last_name',  value: '' },
                    { type: 'email', question: 'Email', is_required: 1, key: 'associate_email', value: '' },
                ],
                is_removable: 1
            };
            this.associates.push(newAssociate);
        },
        handleTabChange(prevIndex, nextIndex) {
            if (nextIndex == 0) {
                this.currentSection = this.questions[this.firstSectionKey];
                this.currentSectionKey = this.firstSectionKey;
            } else if (nextIndex == 1) {
                this.currentSection = this.questions[this.secondSectionKey];
                this.currentSectionKey = this.secondSectionKey;
            } else if (nextIndex == 2) {
                this.currentSection = this.questions[this.thirdSectionKey];
                this.currentSectionKey = this.thirdSectionKey;
            } else if (nextIndex == 3) {
                this.currentSection = this.questions[this.fourthSectionKey];
                this.currentSectionKey = this.fourthSectionKey;
            } else if (nextIndex == 4) {
                this.currentSection = this.questions[this.fifthSectionKey];
                this.currentSectionKey = this.fifthSectionKey;
            } else if (nextIndex == 5) {
                this.currentSection = this.questions[this.sixthSectionKey];
                this.currentSectionKey = this.sixthSectionKey;
            } else if (nextIndex == 6) {
                this.currentSection = this.questions[this.seventhSectionKey];
                this.currentSectionKey = this.seventhSectionKey;
            }
            console.log("Prev: " + prevIndex + ", Next: " + nextIndex);
        },
        initializePhoneInput(question) {
            $(function () {
                $("#" + question.key).intlTelInput();
            })
        },
        getInputType(type){
            let inputType = type;
            if (type == 'string' || type == 'phone') {
                inputType = 'text';
            }
            return inputType;
        },
        getTitleFromKey(key){
            let title = '';
            if (key == this.firstSectionKey) {
                title = 'Contact Details';
            } else if (key == this.secondSectionKey) {
                title = 'Address';
            } else if (key == this.thirdSectionKey) {
                title = 'Opposing Party';
            } else if (key == this.fourthSectionKey) {
                title = 'Billing Contact Details';
            } else if (key == this.fifthSectionKey) {
                title = 'Trademark Contact Details';
            } else if (key == this.sixthSectionKey) {
                title = 'Associates';
            } else if (key == this.seventhSectionKey) {
                title = 'Feedback';
            }

            return title;
        },
        initializeQuestionnaire(){
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/client-app/questionnaire/create',
                baseURL: window.location.origin,
            })
                .then(response => {
                    console.log(response);
                    this.questions = response.data.data;
                    this.associates = response.data.associateQuestions;
                    this.currentSection = this.questions.contact_details;
                    this.currentSectionKey = 'contact_details';

                    document.querySelector('.loader-container').style.display = 'none';

                }).catch((error) => {
                    console.log(error);
                    document.querySelector('.loader-container').style.display = 'none';
                });
        },
        onComplete() {
            this.saveQuestionnaire();
        },
        beforeTabSwitch() {
            let allowSwitchTab = true;
            let section = this.currentSection;
            Object.keys(section).forEach((key) => {
                console.log(key)
                let questionBlock = section[key];

                if (key == 'is_there_any_associate' && questionBlock.question.value == 1) {
                    Object.keys(this.associates).forEach((associateKey) => {
                        let associate = this.associates[associateKey];
                        let questions = associate.questions;
                        this.associates[associateKey].questions[2].isEmailValid = 1;
                        Object.keys(questions).forEach((questionKey) => {
                            let question = questions[questionKey];
                            if (question.is_required == 1 && (question.value == null || question.value == '')) {
                                allowSwitchTab = false;
                                return;
                            }
                            // Regular expression for a simple email validation
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            console.log("Before email check: " + questionKey)
                            if (question.is_required == 1 && questionKey == 2 && !emailRegex.test(question.value)) {
                                allowSwitchTab = false;
                                this.associates[associateKey].questions[questionKey].isEmailValid = 0;
                                return;
                            }
                        });



                    });
                }


                let verifyFurtherQuestions = (key == 'is_there_an_opposing_party' && questionBlock.question.value == 1) || (key != 'is_there_an_opposing_party' && questionBlock.question.value == 0)
                Object.keys(questionBlock).forEach((questionKey) => {


                    if (questionKey == 'question') {
                        let question = questionBlock[questionKey];
                        if (question.is_required == 1 && (question.value == null || question.value == '')) {
                            allowSwitchTab = false;
                            return;
                        }
                    } else {
                        let furtherQuestions = questionBlock[questionKey];
                        Object.keys(furtherQuestions).forEach((furtherQuestionKey) => {
                            let question = furtherQuestions[furtherQuestionKey];
                            if (verifyFurtherQuestions) {
                                if (question.is_required == 1 && (question.value == null || question.value == '')) {
                                    allowSwitchTab = false;
                                    return;
                                }
                            }

                        });
                    }
                });
            });

            return allowSwitchTab;
        },
        setCurrentSection(){
            try {
                let foundExistingSection = false;
                Object.keys(this.questions).forEach((key) => {
                    console.log(key + ': ' + foundExistingSection);
                    if (foundExistingSection) {
                        this.currentSection = this.questions[key];
                        this.currentSectionKey = key;
                        throw new Error('BreakException');
                    }
                    if (key == this.currentSectionKey) {
                        foundExistingSection = true;
                    }
                });
            } catch (e) {
                if (e.message !== 'BreakException') throw e;
            }

        },
        beforeAdditionalTabSwitch() {
            this.emailError = this.email == '';
            this.passwordError = this.password == '';
            if (this.email == '' || this.password == '') {
                return false;
            } else {
                return true;
            }
        },
        saveQuestionnaire() {
            document.querySelector('.loader-container').style.display = 'flex';
            axios({
                method: 'post',
                url: 'api/client-app/questionnaire',
                baseURL: window.location.origin,
                data: {
                    questions: this.questions,
                    associates: this.associates,
                }
            })
                .then(response => {
                    document.querySelector('.loader-container').style.display = 'none';
                    this.successMessage = response.data.message;
                    var toastLiveExample = document.getElementById('liveToast')
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                    setTimeout(function () {
                        window.location.href = '/dashboard';
                    }, 3000)
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
        this.initializeQuestionnaire();
    },
    watch: {

    },
}
</script>
<style scoped>
.intl-tel-input .flag-dropdown .selected-flag {
    padding-block-end: 11px !important;
}
</style>
