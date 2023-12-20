<template>
    <!-- Row -->
    <div class="row row-sm">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 col-xxl-4 col-xl-6">
                    <div class="card">
                        <div class="main-content-app">
                            <div class="main-content-left main-content-left-chat overflow-hidden">
                                <div class="panel tabs-style2">
                                    <div class="panel-head p-3 border-bottom">
                                        <ul class="nav nav-tabs p-0">
                                            <li class="nav-item flex-1">
                                                <button class="nav-link active w-100" data-bs-toggle="modal" data-bs-target="#addGroup">
                                                    <i class="fe fe-plus me-2"></i> Add New Group
                                                </button>
                                            </li>
<!--                                            <li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="javascript:void(0);">Groups</a></li>
                                            <li class="nav-item flex-1"><a class="nav-link" data-bs-toggle="tab" href="javascript:void(0);">Calls</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="main-chat-list overflow-auto" id="ChatList">
                                    <div class="panel-body p-0 border-0 overflow-scroll">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="style2tab1">
                                                <template v-for="group in groups">
                                                    <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed"
                                                         :class="{'selected': selectedGroup && selectedGroup.id === group.id }"
                                                         @click="openGroupChat(group)"
                                                    >
                                                        <div class="mg-e-10">
                                                            <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
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
<!--                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Socrates Itumay</h6> <span class="tx-muted tx-11 align-self-start min-w-fit-content">2 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Consetetur sanctus consetetur amet amet stet,.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/2.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Eos Tempor</h6> <span class="tx-muted tx-11">3 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Ipsum lorem kasd sed labore sed elitr.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Ut Nonumy</h6> <span class="tx-muted tx-11">4 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Erat labore elitr takimata sea dolor. Et duo takimata consetetur.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Ipsum Et</h6> <span class="tx-muted tx-11">5 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Aliquyam justo diam eirmod rebum diam. Dolores dolores dolor justo.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/3.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Et Kasd</h6> <span class="tx-muted tx-11">3 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Sit takimata sanctus takimata takimata et ipsum no. Eos duo elitr.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/4.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Dolor Dlita</h6> <span class="tx-muted tx-11">4 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Erat clita gubergren sit labore. Dolor labore eirmod takimata diam.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/4.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Voluptua Ipsum</h6> <span class="tx-muted tx-11">1 D</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Stet erat diam lorem ut ea ut ut at. At dolor dolore.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Socrates Itumay</h6> <span class="tx-muted tx-11">1 D</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Consetetur sanctus consetetur amet amet stet,.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/2.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Eos Tempor</h6> <span class="tx-muted tx-11">2 D</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Ipsum lorem kasd sed labore sed elitr.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/5.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Ut Nonumy</h6> <span class="tx-muted tx-11">2 D</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Erat labore elitr takimata sea dolor. Et duo takimata consetetur.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar avatar-status"><img alt="" src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Ipsum Et</h6> <span class="tx-muted tx-11">2 D</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Aliquyam justo diam eirmod rebum diam. Dolores dolores dolor justo.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/3.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Et Kasd</h6> <span class="tx-muted tx-11">1 W</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Sit takimata sanctus takimata takimata et ipsum no. Eos duo elitr.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3 border-bottom-dashed">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/4.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Dolor Dlita</h6> <span class="tx-muted tx-11">4 hr</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Erat clita gubergren sit labore. Dolor labore eirmod takimata diam.</p>
                                                    </div>
                                                </div>
                                                <div class="chat-item d-flex pd-x-13 py-3">
                                                    <div class="mg-e-10">
                                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/4.jpg" class="rounded-circle"></span>
                                                    </div>
                                                    <div class="flex-1">
                                                        <div class="flex-between mb-1">
                                                            <h6 class="mb-0">Voluptua Ipsum</h6> <span class="tx-muted tx-11">1 W</span>
                                                        </div>
                                                        <p class="mb-0 tx-12">Stet erat diam lorem ut ea ut ut at. At dolor dolore.</p>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xxl-8 col-xl-6">
                    <div class="card" v-if="selectedGroup">
                        <div class="main-content-app">
                            <div class="main-content-body main-content-body-chat">
                                <div class="main-chat-header">
                                    <div class="main-header-arrow me-3">
                                        <a href="javascript:void(0);" class="tx-inverse" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                                    </div>
                                    <div class="mg-e-10">
                                        <span class="avatar"><img alt="" src="../../../../../public/build/assets/img/users/9.jpg" class="rounded-circle"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex-between d-block d-sm-flex">
                                            <div>
                                                <h5 class="mb-0">{{ selectedGroup.name }}</h5>
                                                <span class="tx-muted tx-12">2 online</span>
                                            </div>
                                            <div class="btn-list d-flex align-items-center ms-auto">
                                                <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
                                                <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="Delete Chat"><i class="fe fe-trash"></i></a>
                                                <a class="btn btn-sm btn-def tx-muted" href="javascript:void(0);" data-bs-toggle="tooltip" title="View Info"><i class="fe fe-alert-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- main-chat-header -->
                                <div class="main-chat-body overflow-auto" id="ChatBody">
                                    <div class="content-inner chat">
                                        <div class="chat-box-single-line">
                                            <span class="timestamp">Today</span>
                                        </div>
                                        <template v-for="message in messages">
                                            <div class="d-flex justify-content-end chat_block">
                                                <div class="msg_block_send">
                                                    <div class="msg_container_send">
                                                        <div class="msg_cotainer_send-main">
                                                            <span>{{ message.message }}</span>
                                                        </div>
                                                        <span class="msg_time_send" style="width: 100px; text-align: right">{{ message.timestamp }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
<!--                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>Hi there! How are you?</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">8:10 AM</span>
                                                </div>
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span> Hey I'm Waiting for your reply.</span>
                                                    </div>
                                                    <div class="msg_cotainer-main">
                                                        <span>I've to go to outside....</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">8:35 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end chat_block">
                                            <div class="msg_block_send">
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main">
                                                        <span>Hi, I'll catch you in few  minutes. Please wait!</span>
                                                    </div>
                                                    <span class="msg_time_send">8:38 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>Ok Thanks!</span>
                                                    </div>
                                                    <div class="msg_cotainer-main">
                                                        <span>I'm waiting for your message.</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">8:39 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end chat_block">
                                            <div class="msg_block_send">
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main">
                                                        <span>Hey, I am at Coffee shop you said</span>
                                                    </div>
                                                    <div class="msg_cotainer_send-main">
                                                        <span>I can't see you here.</span>
                                                    </div>
                                                    <div class="msg_cotainer_send-main">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-def white"><i class="fe fe-play-circle"></i></a>
                                                            <span class="mx-2">
                                                                                <svg  width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                                <svg  class="chat_audio" width="20" height="20"><defs></defs><g  transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" width="20" height="20"><path d="M6 19a1 1 0 0 1-1-1V6A1 1 0 0 1 7 6V18A1 1 0 0 1 6 19zM12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 12 18zM9 21a1 1 0 0 1-1-1V4a1 1 0 0 1 2 0V20A1 1 0 0 1 9 21zM3 17a1 1 0 0 1-1-1V8A1 1 0 0 1 4 8v8A1 1 0 0 1 3 17zM21 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 21 16zM15 16a1 1 0 0 1-1-1V9a1 1 0 0 1 2 0v6A1 1 0 0 1 15 16zM18 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0V17A1 1 0 0 1 18 18z" fill="rgba(255, 255, 255, 0.5)" class="color000 svgShape"></path></svg></g></svg>
                                                                            </span>
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-def white"><i class="fe fe-download"></i></a>
                                                        </div>
                                                    </div>
                                                    <span class="msg_time_send">9:15 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>I just went to vegetable store.</span>
                                                    </div>
                                                    <div class="msg_cotainer-main">
                                                        <span>You can come here or wait for just 5 min</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">9:15 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end chat_block">
                                            <div class="msg_block_send">
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main">
                                                        <span>Ok then I'll wait...</span>
                                                    </div>
                                                    <div class="msg_cotainer_send-main">
                                                        <span>just call me or come inside to coffee shop when you came by</span>
                                                    </div>
                                                    <span class="msg_time_send">9:15 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>Deal... Bye</span>
                                                    </div>
                                                    <div class="msg_cotainer-main">
                                                        <span>Enjoy your coffee</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">9:16 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end chat_block">
                                            <div class="msg_block_send">
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main">
                                                        <span>Definitely and Bye...</span>
                                                    </div>
                                                    <span class="msg_time_send">9:17 AM</span>
                                                </div>
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main media-files">
                                                        <img src="../../../../../public/build/assets/img/ecommerce/30.jpg" alt="img">
                                                    </div>
                                                    <span class="msg_time_send">9:30 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>I'm in coffee shop..</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">9:45 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end chat_block">
                                            <div class="msg_block_send">
                                                <div class="msg_container_send">
                                                    <div class="msg_cotainer_send-main">
                                                        <span>come to 8th number table</span>
                                                    </div>
                                                    <span class="msg_time_send">9:46 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start chat_block">
                                            <div class="me-1 d-flex align-items-end">
                                                <div class="avatar avatar-sm">
                                                    <img src="../../../../../public/build/assets/img/users/6.jpg" class="rounded-circle" alt="img">
                                                </div>
                                            </div>
                                            <div class="msg_block">
                                                <div class="msg_container">
                                                    <div class="msg_cotainer-main">
                                                        <span>Ok.. coming...</span>
                                                    </div>
                                                    <span class="tx-10 tx-muted msg_time">9:46 AM</span>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="main-chat-footer br-bs-10 br-be-10">
                                    <input class="form-control radius-7" v-on:keyup.enter="sendMessage" v-model="newMessage" placeholder="Type your message here..." type="text">
                                    <a class="btn btn-outline-primary btn-icon me-2" data-bs-toggle="tooltip" href="javascript:void(0);" title="Attach Files"><i class="fe fe-paperclip"></i></a>
                                    <a class="btn btn-primary btn-icon text-white" @click="sendMessage"><i class="fe fe-send"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" v-else>
                        <div class="main-content-app flex justify-content-center align-items-center">
                            <h3>Click on a group to see messages</h3>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-12 col-xxl-3 col-xl-12">
                                    <div class="card overflow-hidden">
                                        <div class="main-content-app">
                                            <div class="card-body p-0 chat-main">
                                                <div class="float-end ms-auto m-4">
                                                    <a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <div class="text-center border-bottom chat-image p-4">
                                                    <div class="avatar-xl avatar-status offline mb-3 mx-auto">
                                                        <a href="{{url('contacts')}}"><img alt="avatar" class="rounded-circle" src="../../../../../public/build/assets/img/users/2.jpg"></a>
                                                    </div>
                                                    <a href="{{url('contacts')}}"><h5 class="mb-1">Voluptua Ipsum</h5></a>
                                                    <p class="tx-muted mt-0 mb-1 pt-0 tx-13">UI/UX Designer</p>
                                                    <p class="tx-muted mt-0 pt-0 tx-13 mb-0">+773(161)-123-567</p>
                                                </div>
                                                <div class="p-4 border-bottom-dashed">
                                                    <h6 class="mb-3">Contact Details :</h6>
                                                    <div class="d-flex mg-b-15">
                                                        <span class="avatar-sm rounded-circle bg-primary-transparent"><i class="fe fe-mail tx-primary tx-14"></i></span>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-1 font-weight-semibold tx-13">Email:</p>
                                                            <span class="tx-muted tx-12">volupipsum @demo.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="avatar-sm rounded-circle bg-warning-transparent"><i class="fe fe-map-pin tx-warning tx-14"></i></span>
                                                        <div class="flex-1 ms-2">
                                                            <p class="mb-1 font-weight-semibold tx-13">Address:</p>
                                                            <span class="tx-muted tx-12">2nd street,<br>houston texas,<br>united states.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <h6 class="mb-3">Shared Files :</h6>

                                                    <div class="d-flex mb-3">
                                                        <div class="me-2">
                                                            <div class="pd-10 border br-5 tx-muted">
                                                                <i class="fa fa-folder-open tx-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="d-flex">
                                                                <div class="mb-0">
                                                                    <p class="mb-1 font-weight-semibold tx-13">Document</p>
                                                                    <span class="tx-muted tx-12">1.2mb</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-3">
                                                        <div class="me-2">
                                                            <div class="pd-10 border br-5 tx-muted">
                                                                <i class="fa fa-image tx-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="d-flex">
                                                                <div class="mb-0">
                                                                    <p class="mb-1 font-weight-semibold tx-13">Image</p>
                                                                    <span class="tx-muted tx-12">5.2mb</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-0">
                                                        <div class="me-2">
                                                            <div class="pd-10 border br-5 tx-muted">
                                                                <i class="fa fa-play tx-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="d-flex">
                                                                <div class="mb-0">
                                                                    <p class="mb-1 font-weight-semibold tx-13">Video</p>
                                                                    <span class="tx-muted tx-12">21.2mb</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-def tx-muted"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>


        <!-- Add client modal -->
        <div class="modal fade" id="addGroup" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Add Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inpGroupName">Name</label>
                            <input type="text" class="form-control" id="inpGroupName" name="group_name" v-model="groupForm.name" placeholder="Enter group name">
                        </div>
                        <div class="form-group">
                            <label for="inpGroupSlug">Slug</label>
                            <input type="text" class="form-control" id="inpGroupSlug" name="group_slug" v-model="groupForm.slug" placeholder="Enter group slug">
                        </div>
                        <div class="form-group">
                            <label for="inpGroupDescription">Description</label>
                            <textarea class="form-control" id="inpGroupDescription" name="group_description" v-model="groupForm.description" placeholder="Enter group description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inpGroupCover">Cover image</label>
                            <input type="file" class="form-control" id="inpGroupCover" name="group_Cover">
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
                        <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                        <button class="btn btn-sm btn-primary" data-bs-dismiss="modal" type="button" id="createClientButton" @click="createGroup">Save Changes</button>
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

    </div>
    <!-- End Row -->
</template>

<script>
export default {
    props: [],
    data() {
        return {
            loading: true,
            errors: null,
            first_name: '',
            last_name: '',
            owner_name: '',
            email: '',
            password: '',
            clientId: null,
            clients: [],
            groupForm: {
                name: '',
                slug: '',
                description: ''
            },
            groups: [],
            selectedGroup: null,
            messages: [],
            newMessage: ''
        }
    },
    methods: {
        fetchClients() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/clients',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.clients = response.data.clients;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        fetchGroups() {
            document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/groups',
                baseURL: window.location.origin,
                params: {
                    user_id: this.userId,
                }
            }).then(response => {
                console.log(response);
                this.groups = response.data.groups;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        createGroup() {
            document.querySelector('.loader-container').style.display = 'flex';

            let formData = {
                name: this.groupForm.name,
                slug: this.groupForm.slug,
                description: this.groupForm.description
            };

            axios({
                method: 'post',
                url: 'api/customer-portal/announcements/groups',
                baseURL: window.location.origin,
                data: formData
            }).then(response => {
                console.log(response);
                this.groups.unshift(response.data.group);
                console.log(this.groups)
                this.groupForm = {
                    name: '',
                    slug: '',
                    description: ''
                };
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        openGroupChat(group) {
            console.log(this.selectedGroup)
            this.selectedGroup = group;
            this.fetchMessages();
        },
        fetchMessages() {
            document.querySelector('.loader-container').style.display = 'flex';
            console.log(this.userId)

            axios({
                method: 'get',
                url: 'api/customer-portal/announcements/messages',
                baseURL: window.location.origin,
                params: {
                    //user_id: this.userId,
                    group_id: this.selectedGroup.id
                }
            }).then(response => {
                console.log(response);
                this.messages = response.data.messages;
                document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                document.querySelector('.loader-container').style.display = 'none';
            });
        },
        sendMessage() {
            //document.querySelector('.loader-container').style.display = 'flex';

            axios({
                method: 'post',
                url: 'api/customer-portal/announcements/messages',
                baseURL: window.location.origin,
                data: {
                    //user_id: this.userId,
                    group_id: this.selectedGroup.id,
                    message: this.newMessage,
                }
            }).then(response => {
                console.log(response);
                this.newMessage = '';
                this.messages.push(response.data.new_message);
                //document.querySelector('.loader-container').style.display = 'none';
            }).catch((error) => {
                console.log(error);
                this.loading = false;
                //document.querySelector('.loader-container').style.display = 'none';
            });
        },
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
        /*fetchClients() {
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
        },*/
    },
    mounted() {
        this.fetchClients();
        this.fetchGroups();
    },
    watch: {

    },
}
</script>
<style scoped>

</style>
