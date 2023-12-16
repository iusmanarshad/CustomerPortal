@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FILE ATTACHMENT TAGS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">File attachment tags</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">File Attachment Tags</div>
								</div>
                                <div class="card-body">
                                     <div class="tag-attachments-group">
										<div class="tag-attachment">
											<a href="javascript:void(0);"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-primary">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-secondary">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-music tx-20 me-1"></i>music-mp3</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-success">
											<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-warning">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-excel tx-20 me-1"></i>Document.xl</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-danger">
											<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-pdf tx-20 me-1"></i>AMN0012.pdf</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">Rounded File Attachments</div>
								</div>
                                <div class="card-body">
                                     <div class="tag-attachments-group">
										<div class="tag-attachment rounded-pill">
											<a href="javascript:void(0);"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-primary">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-secondary">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-music tx-20 me-1"></i>music-mp3</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-success">
											<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-warning">
											<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-excel tx-20 me-1"></i>Document.xl</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-danger">
											<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-pdf tx-20 me-1"></i>AMN0012.pdf</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">Outline File Attachments</div>
								</div>
                                <div class="card-body">
                                     <div class="tag-attachments-group">
										<div class="tag-attachment">
											<a href="javascript:void(0);"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-outline-primary">
											<a href="javascript:void(0);" class="tx-primary"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-outline-secondary">
											<a href="javascript:void(0);" class="tx-secondary"><i class="mdi mdi-music tx-20 me-1"></i>music-mp3</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-outline-success">
											<a href="javascript:void(0);" class="tx-success"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-outline-warning">
											<a href="javascript:void(0);" class="tx-warning"><i class="mdi mdi-file-excel tx-20 me-1"></i>Document.xl</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment attachment-outline-danger">
											<a href="javascript:void(0);" class="tx-danger"><i class="mdi mdi-file-pdf tx-20 me-1"></i>AMN0012.pdf</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">Rounded Outline File Attachments</div>
								</div>
                                <div class="card-body">
                                     <div class="tag-attachments-group">
										<div class="tag-attachment rounded-pill">
											<a href="javascript:void(0);"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-outline-primary">
											<a href="javascript:void(0);" class="tx-primary"><i class="mdi mdi-file-image tx-20 me-1"></i>Image01..._jpg</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-outline-secondary">
											<a href="javascript:void(0);" class="tx-secondary"><i class="mdi mdi-music tx-20 me-1"></i>music-mp3</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-outline-success">
											<a href="javascript:void(0);" class="tx-success"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-outline-warning">
											<a href="javascript:void(0);" class="tx-warning"><i class="mdi mdi-file-excel tx-20 me-1"></i>Document.xl</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
										<div class="tag-attachment rounded-pill attachment-outline-danger">
											<a href="javascript:void(0);" class="tx-danger"><i class="mdi mdi-file-pdf tx-20 me-1"></i>AMN0012.pdf</a>
											<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
								<div class="card-header">
									<div class="card-title">Attachment Sizes</div>
								</div>
                                <div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-lg-12">
											<div class="tag-attachments-group">
												<div class="tag-attachment attachment-sm">
													<a href="javascript:void(0);"><i class="mdi mdi-music tx-15 me-1"></i>music-mp3</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-13"></i></a>
												</div>
												<div class="tag-attachment attachment-primary">
													<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment attachment-lg attachment-secondary">
													<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-excel tx-22 me-1"></i>Document.xl</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-17"></i></a>
												</div>
												<div class="tag-attachment attachment-xl attachment-success">
													<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-20"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12">
											<div class="tag-attachments-group">
												<div class="tag-attachment rounded-pill attachment-sm">
													<a href="javascript:void(0);"><i class="mdi mdi-music tx-15 me-1"></i>music-mp3</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-13"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-primary">
													<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-lg attachment-secondary">
													<a href="javascript:void(0);" class="text-white"><i class="mdi mdi-file-excel tx-22 me-1"></i>Document.xl</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-17"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-xl attachment-success">
													<a href="javascript:void(0);" class="tx-white"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x tx-20"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12">
											<div class="tag-attachments-group">
												<div class="tag-attachment attachment-sm">
													<a href="javascript:void(0);"><i class="mdi mdi-music tx-15 me-1"></i>music-mp3</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment attachment-outline-primary">
													<a href="javascript:void(0);" class="tx-primary"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment attachment-lg attachment-outline-secondary">
													<a href="javascript:void(0);" class="tx-secondary"><i class="mdi mdi-file-excel tx-22 me-1"></i>Document.xl</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment attachment-xl attachment-outline-success">
													<a href="javascript:void(0);" class="tx-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-12">
											<div class="tag-attachments-group">
												<div class="tag-attachment rounded-pill attachment-sm">
													<a href="javascript:void(0);"><i class="mdi mdi-music tx-15 me-1"></i>music-mp3</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-outline-primary">
													<a href="javascript:void(0);" class="tx-primary"><i class="mdi mdi-file-video tx-20 me-1"></i>video0014...-mp4</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-lg attachment-outline-secondary">
													<a href="javascript:void(0);" class="tx-secondary"><i class="mdi mdi-file-excel tx-22 me-1"></i>Document.xl</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
												<div class="tag-attachment rounded-pill attachment-xl attachment-outline-success">
													<a href="javascript:void(0);" class="tx-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>

                    </div>
					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Image Attachment Tags</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-3 mb-xl-0">
											<div class="image-attach">
												<img class="card-img" src="{{asset('build/assets/img/media/1.jpg')}}" alt="pos-relative">
												<div class="pos-absolute a-0 bg-black-1 radius-4"></div>
												<span class="pos-absolute t-15 l-15 tx-17 tx-white">123image.jpg</span>
												<div class="btn-list attach-options flex-center">
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-primary" data-bs-toggle="tooltip" title="Dowonload"><i class="fe fe-download tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-teal" data-bs-toggle="tooltip" title="Share"><i class="fe fe-share tx-13"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-3 mb-xl-0">
											<div class="image-attach">
												<img class="card-img" src="{{asset('build/assets/img/media/2.jpg')}}" alt="pos-relative">
												<div class="pos-absolute a-0 bg-black-1 radius-4"></div>
												<span class="pos-absolute t-15 l-15 tx-17 tx-white">123image.jpg</span>
												<div class="btn-list attach-options flex-center">
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-primary" data-bs-toggle="tooltip" title="Dowonload"><i class="fe fe-download tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-teal" data-bs-toggle="tooltip" title="Share"><i class="fe fe-share tx-13"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-3 mb-xl-0">
											<div class="image-attach">
												<img class="card-img" src="{{asset('build/assets/img/media/3.jpg')}}" alt="pos-relative">
												<div class="pos-absolute a-0 bg-black-1 radius-4"></div>
												<span class="pos-absolute t-15 l-15 tx-17 tx-white">123image.jpg</span>
												<div class="btn-list attach-options flex-center">
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-primary" data-bs-toggle="tooltip" title="Dowonload"><i class="fe fe-download tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-teal" data-bs-toggle="tooltip" title="Share"><i class="fe fe-share tx-13"></i></a>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-3 mb-xl-0">
											<div class="image-attach">
												<img class="card-img" src="{{asset('build/assets/img/media/4.jpg')}}" alt="pos-relative">
												<div class="pos-absolute a-0 bg-black-1 radius-4"></div>
												<span class="pos-absolute t-15 l-15 tx-17 tx-white">123image.jpg</span>
												<div class="btn-list attach-options flex-center">
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-primary" data-bs-toggle="tooltip" title="Dowonload"><i class="fe fe-download tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash tx-13"></i></a>
													<a href="javascript:void(0);" class="btn btn-circle flex-center btn-teal" data-bs-toggle="tooltip" title="Share"><i class="fe fe-share tx-13"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- ROW-4 OPEN -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">File Attachments</div>
                                </div>
                                <div class="card-body">
                                    <div class="d-sm-flex d-block align-items-end">
                                        <div class="file-attach file-attach-sm">
                                            <div class="mb-1 border br-5 pos-relative overflow-hidden">
                                                <img src="{{asset('build/assets/img/files/5.png')}}" class="br-5" alt="file">
												<div class="btn-list attach-options v-center d-flex flex-column">
													<a href="javascript:void(0);" class="btn btn-circle-xs btn-primary flex-center me-0 mb-0"><i class="fe fe-trash tx-11"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-xs btn-warning flex-center me-0 mb-0 mg-t-3"><i class="fe fe-download tx-11"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-xs btn-success flex-center me-0 mb-0 mg-t-3"><i class="fe fe-eye tx-11"></i></a>
												</div>
                                            </div>
											<span>Image01.jpg</span>
                                        </div>
                                        <div class="file-attach">
                                            <div class="mb-1 border br-5 pos-relative overflow-hidden">
                                                <img src="{{asset('build/assets/img/files/1.png')}}" class="br-5" alt="doc">
												<div class="btn-list attach-options v-center d-flex flex-column">
													<a href="javascript:void(0);" class="btn btn-circle-sm btn-primary flex-center me-0 mb-0"><i class="fe fe-trash tx-12"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-sm btn-warning flex-center me-0 mb-0 mg-t-3"><i class="fe fe-download tx-12"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-sm btn-success flex-center me-0 mb-0 mg-t-3"><i class="fe fe-eye tx-12"></i></a>
												</div>
                                            </div>
											<span>word.doc</span>
                                        </div>
                                        <div class="file-attach file-attach-lg">
                                            <div class="mb-1 border br-5 pos-relative overflow-hidden">
                                                <img src="{{asset('build/assets/img/files/3.png')}}" class="br-5" alt="file">
												<div class="btn-list attach-options v-center d-flex flex-column">
													<a href="javascript:void(0);" class="btn btn-circle-lg btn-primary flex-center me-0 mb-0"><i class="fe fe-trash tx-14"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-lg btn-warning flex-center me-0 mb-0 mg-t-3"><i class="fe fe-download tx-14"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-lg btn-success flex-center me-0 mb-0 mg-t-3"><i class="fe fe-eye tx-14"></i></a>
												</div>
                                            </div>
											<span>demoXL.xl</span>
                                        </div>
                                        <div class="file-attach file-attach-xl">
                                            <div class="mb-1 border br-5 pos-relative overflow-hidden">
                                                <img src="{{asset('build/assets/img/files/2.png')}}" class="br-5" alt="pdf">
												<div class="btn-list attach-options v-center d-flex flex-column">
													<a href="javascript:void(0);" class="btn btn-circle-xl btn-primary flex-center me-0 mb-0"><i class="fe fe-trash"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-xl btn-warning flex-center me-0 mb-0 mg-t-3"><i class="fe fe-download"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-circle-xl btn-success flex-center me-0 mb-0 mg-t-3"><i class="fe fe-eye"></i></a>
												</div>
                                            </div>
											<span>Document.pdf</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-4 CLOSED -->

@endsection

@section('scripts')



@endsection
