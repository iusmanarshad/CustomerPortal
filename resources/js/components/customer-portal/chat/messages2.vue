<template>
    <!-- row -->
            <div class="row row-sm main-content-mail">
                <div class="col-lg-4 col-xl-3 col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-3 border-bottom">
                                <a href="javascript:void(0);" class="btn btn-primary btn-block" id="btnCompose" @click="changeActiveVew('composer')">Compose</a>
                            </div>
                            <div class="p-3 border-bottom">
                                <ul class="nav nav-pills main-nav-column">
                                    <li class="nav-item" @click="changeActiveVew('inbox')">
                                        <a class="nav-link thumb active" href="javascript:void(0);"><i class="fe fe-mail"></i> Inbox <span class="ms-auto">10</span></a>
                                    </li>
                                    <li class="nav-item" @click="changeActiveVew('inbox')">
                                        <a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-send"></i> Sent <span class="ms-auto">2</span></a>
                                    </li>
                                </ul>
                            </div>
<!--                            <div class="p-3">
                                <ul class="nav nav-pills main-nav-column">
                                    <li class="nav-item"><a class="nav-link thumb" href="javascript:void(0);"><i class="fe fe-help-circle"></i> Help</a></li>
                                    <li class="nav-item"><a class="nav-link thumb" href="{{url('mail-settings')}}"><i class="fe fe-settings"></i> Settings</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12" v-if="activeView === 'composer'">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="card-title">Compose Message</div>
                        </div>
                        <div class="card-body">
                            <form >
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <label class="col-sm-2">To</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="recepient@mail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <label class="col-sm-2">Subject</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter your subject here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row ">
                                        <label class="col-sm-2">Message</label>
                                        <div class="col-sm-10">
                                            <textarea rows="10" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-sm-flex">
                                <div class="btn-list">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Attach"><i class="bx bx-paperclip tx-muted tx-18"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Link"><i class="bx bx-link tx-muted tx-18"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Photos"><i class="bx bx-image tx-muted tx-18"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-def" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bx bx-trash tx-muted tx-18"></i></a>
                                </div>
                                <div class="ms-auto">
                                    <a class="btn btn-primary" href="{{url('mail-compose')}}"><i class="far fa-paper-plane me-2"></i> Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9 col-md-12" v-else>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card overflow-hidden">
                                <div class="card-header border-bottom">
                                    <div class="d-sm-flex align-items-center">
<!--                                        <div class="form-group mb-0">
                                            <div class=" main-mail-options d-flex align-items-center">
                                                <div class="me-3">
                                                    <label class="ckbox mt-0 mb-0"><input type="checkbox" id="checkAll"> <span></span></label>
                                                </div>
                                                <div class="me-2">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted disabled" data-bs-toggle="tooltip" title="Archive"><i class="ti ti-archive tx-15-f"></i></a>
                                                </div>
                                                <div class="me-2">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted disabled" data-bs-toggle="tooltip" title="Label"><i class="fe fe-tag"></i></a>
                                                </div>
                                                <div class="me-2">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted disabled" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                </div>
                                                <div class="me-2">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted disabled" data-bs-toggle="tooltip" title="Spam"><i class="fe fe-alert-circle"></i></a>
                                                </div>
                                                <div class="me-2">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-def tx-muted" data-bs-toggle="tooltip" title="Refresh"><i class="fe fe-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="ms-auto">
                                            <p class="tx-muted mb-0"><span class="current-page tx-18">1</span><span class="mx-1">Of</span><span class="total tx-18">10</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group main-mail-group">
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Socrates Itumay</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Consetetur sanctus consetetur amet amet stet,. Clita nonumy rebum et ipsum labore sed vero et vero dolore. Ut kasd et accusam. Consetetur sanctus consetetur amet amet stet,. Clita nonumy rebum et ipsum labore sed vero et vero dolore. Ut kasd et accusam.</p>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Mar 28</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star active">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/1.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Wiley Waites</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Lorem consetetur nonumy sed dolores eos dolores dolores, eos dolores amet rebum et elitr est elitr, sit et labore aliquyam.</p>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1 me-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-image tx-16"></i></span>
                                                                        Image01..._jpg
                                                                    </span>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-excel tx-16"></i></span>
                                                                        Document.docx
                                                                    </span>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Mar 27</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm rounded-circle bg-teal tx-15">E</span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Edgardo Huel</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Kasd voluptua labore et justo ea clita sit justo, rebum eos elitr duo sit et.</p>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Mar 20</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/4.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Willie Makit</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">At clita no sed ea et et amet, sadipscing consetetur sit et stet amet sit,. Lorem ipsum. Est dolor eos voluptua kasd eos.</p>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1 me-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-image tx-16"></i></span>
                                                                        Image02..._jpg
                                                                    </span>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Mar 12</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star active">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm rounded-circle bg-secondary tx-15">B</span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Ben Dover</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Voluptua sed et eirmod at sea. At ea clita duo ut diam erat voluptua amet et, takimata dolor invidunt lorem justo.</p>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Mar 01</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star active">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/7.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Katherina Kat</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Sit justo ipsum accusam justo amet ut kasd justo elitr, stet dolor no.</p>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1 me-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-image tx-16"></i></span>
                                                                        Image01..._jpg
                                                                    </span>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1 me-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-excel tx-16"></i></span>
                                                                        Document2.docx
                                                                    </span>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-excel tx-16"></i></span>
                                                                        Document4.docx
                                                                    </span>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Feb 14</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/8.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Jessie Jane</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Diam et eirmod diam accusam ipsum gubergren gubergren, ipsum ea sed magna magna vero sea.</p>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Feb 11</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star active">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm rounded-circle bg-green tx-15">L</span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Lupe Lamora</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Sed no kasd dolor rebum sed sed eirmod sit et vero, stet ea amet labore dolores erat dolores.</p>
                                                        <span class="tag tag-attachments-sm rounded-pill tag-outline-light mt-1 me-1">
                                                                        <span class="me-1"><i class="mdi mdi-file-image tx-16"></i></span>
                                                                        Image02..._jpg
                                                                    </span>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Feb 01</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-start pos-relative">
<!--                                                <div class="me-3 d-flex align-items-start">-->
<!--                                                    <div class="me-3">-->
<!--                                                        <label class="ckbox m-0"><input type="checkbox"> <span></span></label>-->
<!--                                                    </div>-->
<!--                                                    <div class="main-mail-star">-->
<!--                                                        <i class="typcn typcn-star"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="flex-1 d-flex overflow-hidden position-relative">
                                                    <a href="{{url('mail-read')}}" class="stretched-link"></a>
                                                    <div class="mg-e-10">
                                                        <span class="avatar-sm"><img alt="" src="../../../../../public/build/assets/img/users/12.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1 overflow-hidden">
                                                        <h6 class="mb-1 tx-16 tx-primary text-truncate">Michael Sourya</h6>
                                                        <p class="mb-0 tx-13 tx-muted text-truncate">Sit gubergren ipsum vero sit ut consetetur ea accusam sit lorem. Labore elitr stet sanctus no elitr amet. Vero ipsum.</p>
                                                    </div>
                                                </div>
                                                <span class="tx-muted tx-12 min-w-fit-content ms-3 float-end mt-sm-0 mt-2">Jan 31</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-back"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="icon ion-ios-arrow-forward"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <!-- /row -->
</template>

<script>
import GroupList from "../../chat/group-list.vue";
import GroupMessages from "../../chat/group-messages.vue";

export default {
    components: {GroupList, GroupMessages},
    props: [],
    data() {
        return {
            loading: true,
            errors: null,
            activeView: 'inbox'
        }
    },
    methods: {
        changeActiveVew(activeView) {
            this.activeView = activeView;
        },
    },
    mounted() {
        //this.fetchGroups();
    },
    watch: {

    },
}
</script>
<style scoped>

</style>
