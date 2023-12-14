@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0)">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Crypto</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="mb-3 d-flex align-items-center">
												<span class="tx-14">Bitcoin</span>
												<span class="rounded-circle p-1 bg-primary-transparent ms-1">
													<svg xmlns="http://www.w3.org/2000/svg" class="btc-svg" height="22" width="22" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
												</span>
											</div>
											<div class="d-block d-sm-flex align-items-center mb-2">
												<h5 class="mb-0 me-2 numberfont">$2,30,394</h5>
												<span class="tx-muted tx-12">BTC/USD</span>
											</div>
											<span class="badge badge-success-transparent">+5.19%</span>
										</div>
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="ht-100p">
												<canvas id="btcData"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="mb-3 d-flex align-items-center">
												<span class="tx-14">Ethereum</span>
												<span class="rounded-circle p-1 bg-secondary-transparent ms-1">
													<svg xmlns="http://www.w3.org/2000/svg" class="eth-svg" height="22" width="22" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>
												</span>
											</div>
											<div class="d-block d-sm-flex align-items-center mb-2">
												<h5 class="mb-0 me-2 numberfont">$1,89,987</h5>
												<span class="tx-muted tx-12">ETH/USD</span>
											</div>
											<span class="badge badge-danger-transparent">-1.31%</span>
										</div>
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="ht-100p">
												<canvas id="ethData"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="mb-3 d-flex align-items-center">
												<span class="tx-14">Dash</span>
												<span class="rounded-circle p-1 bg-warning-transparent ms-1">
													<svg xmlns="http://www.w3.org/2000/svg" class="dash-svg" height="22" width="22" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>
												</span>
											</div>
											<div class="d-block d-sm-flex align-items-center mb-2">
												<h5 class="mb-0 me-2 numberfont">$1,95,954</h5>
												<span class="tx-muted tx-12">DASH/USD</span>
											</div>
											<span class="badge badge-success-transparent">+7.31%</span>
										</div>
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="ht-100p">
												<canvas id="dashData"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="mb-3 d-flex align-items-center">
												<span class="tx-14">Golem</span>
												<span class="rounded-circle p-1 bg-success-transparent ms-1">
													<svg xmlns="http://www.w3.org/2000/svg" class="glm-svg" height="22" width="22" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"/></svg>
												</span>
											</div>
											<div class="d-block d-sm-flex align-items-center mb-2">
												<h5 class="mb-0 me-2 numberfont">$1,03,104</h5>
												<span class="tx-muted tx-12">GLM/USD</span>
											</div>
											<span class="badge badge-danger-transparent">-0.31%</span>
										</div>
										<div class="col-xl-6 col-lg-6 col-6">
											<div class="ht-100p">
												<canvas id="glmData"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12 col-xxl-9 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Trade Report (BTC)</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-lg-6">
											<div class="d-flex flex-wrap pe-xl-3 bd-e-0 bd-xl-e bd-e-dashed mb-lg-0 mb-2">
												<div class="me-3">
													<div class="avatar radius-4 bg-primary-transparent">
														<i class="fa fa-cubes tx-primary"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<p class="mb-0">Total Trades</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1.89BTC</p>
														<span class="tx-12 font-weight-semibold numberfont tx-primary"><i class="fe fe-arrow-up-right me-1"></i>+0.01%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6">
											<div class="d-flex flex-wrap pe-xl-3 bd-e-0 bd-xl-e bd-e-dashed mb-xl-0 mb-2">
												<div class="me-3">
													<div class="avatar radius-4 bg-secondary-transparent">
														<i class="fa fa-file-arrow-up tx-secondary"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<p class="mb-0">Open Position</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1.89BTC</p>
														<span class="tx-12 font-weight-semibold numberfont tx-secondary"><i class="fe fe-arrow-down-right me-1"></i>-0.11%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6">
											<div class="d-flex flex-wrap pe-xl-3 bd-e-0 bd-xl-e bd-e-dashed mb-xl-0 mb-2">
												<div class="me-3">
													<div class="avatar radius-4 bg-warning-transparent">
														<i class="fa fa-circle-check text-warning"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<p class="mb-0">Active Orders</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1.89BTC</p>
														<span class="tx-12 font-weight-semibold numberfont tx-warning"><i class="fe fe-arrow-up-right me-1"></i>+1.01%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6">
											<div class="d-flex flex-wrap bd-e-0 bd-e-dashed">
												<div class="me-3">
													<div class="avatar radius-4 bg-success-transparent">
														<i class="fa fa-chart-pie tx-success"></i>
													</div>
												</div>
												<div class="flex-1">
													<div class="mb-1">
														<p class="mb-0">Equity</p>
													</div>
													<div class="flex-between">
														<p class="font-weight-semibold tx-16 mb-0 numberfont">1.89BTC</p>
														<span class="tx-12 font-weight-semibold numberfont tx-success"><i class="fe fe-arrow-up-right me-1"></i>+0.21%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Market Analysis
									</div>
									<div class="btn-group">
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1H</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary">1D</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1W</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1M</a>
									</div>
								</div>
								<div class="card-body">
									<div class="flex-between tx-13 mb-2 d-lg-flex d-none">
										<div class="d-flex">
											<div class="pe-3 border-end">
												<span>Open :</span>
												<span class="numberfont tx-primary">42,397.89</span>
											</div>
											<div class="px-3 border-end">
												<span>High :</span>
												<span class="numberfont tx-success">99,373.38</span>
											</div>
											<div class="px-3 border-end">
												<span>Close :</span>
												<span class="numberfont tx-warning">80,382.29</span>
											</div>
											<div class="ps-3">
												<span>Low :</span>
												<span class="numberfont tx-secondary">70,382.38</span>
											</div>
										</div>
										<div class="d-flex">
											<div class="pe-3 border-end">
												<span>Vol :</span>
												<span class="numberfont tx-primary">378.25K</span>
											</div>
											<div class="ps-3">
												<span class="numberfont tx-success"><i class="fe fe-arrow-up-right me-1"></i>+5.61%</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper">
										<div id="cryptoReport"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-xxl-3 col-lg-12">
							<div class="card card-bg-primary">
								<div class="card-body">
									<span class="float-end badge badge-sm bg-white-2 rounded-pill"><i class="fe fe-arrow-up-right me-1 tx-11"></i>+1.27%</span>
									<h6 class="mb-3">Balance Details</h6>
									<p class="tx-24 mb-3 numberfont">$2,39,489.00</p>
									<div class="row">
										<div class="col-xl-6 col-sm-6 col-6">
											<div class="d-sm-flex align-items-center flex-wrap">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar-sm bg-white-5 br-5">
														<i class="fe fe-arrow-up tx-primary tx-20"></i>
													</div>
												</div>
												<div class="flex-1">
													<span class="tx-15 mb-1 numberfont">$22,490.00</span>
													<p class="tx-13 mb-0 op-8">Invested</p>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6 col-6">
											<div class="d-sm-flex align-items-center flex-wrap">
												<div class="me-sm-2 mb-2 mb-sm-0">
													<div class="avatar-sm bg-white-5 br-5">
														<i class="fe fe-arrow-down tx-primary tx-20"></i>
													</div>
												</div>
												<div class="flex-1">
													<span class="tx-15 mb-1 numberfont">$22,490.00</span>
													<p class="tx-13 mb-0 op-8">Expenses</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header border-bottom pb-0">
									<div class="panel tabs-style7 scaleX">
										<div class="panel-head">
											<ul class="nav nav-tabs">
												<li class="nav-item flex-1"><a class="nav-link pb-4 tx-14 active" data-bs-toggle="tab" href="#scaleXtab1">Buy</a></li>
												<li class="nav-item flex-1"><a class="nav-link pb-4 tx-14" data-bs-toggle="tab" href="#scaleXtab2">Sell</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="panel-body p-0 border-0">
										<div class="tab-content">
											<div class="tab-pane active" id="scaleXtab1">
												<div class="row">
													<div class="col-xl-12">
														<div class="flex-between mb-3">
															<p class="mb-0">
																<span class="tx-muted">Bal. Avl.</span>
																<span class="numberfont">$2,39,489.00</span>
															</p>
															<p class="mb-0">
																<span class="tx-muted me-1">Buy ~ </span>
																<span class="tx-primary numberfont">$347,98</span>
															</p>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<select class="form-control select2-img">
																<option value="Bitcoin">Bit Coin</option>
																<option value="BitConnect">Bit Connect</option>
																<option value="BitShares">Bit Shares</option>
																<option value="Bytecoin">Byte Coin</option>
																<option value="Dash">Dash</option>
																<option value="Decred">Decred</option>
																<option value="Ethereum">Ethereum</option>
																<option value="Golem">Golem</option>
																<option value="Iconomi">Iconomi</option>
																<option value="LanaCoin">Lana Coin</option>
															</select>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<div class="input-group mb-0">
																<span class="input-group-text">Coins Amount</span>
																<input type="text" class="form-control" value="0.00198" placeholder="Amount Of Coins">
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<div class="input-group mb-0">
																<span class="input-group-text">Amount (USD)</span>
																<input type="text" class="form-control" value="$347,98" placeholder="Enter Amount In USD">
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2">Transaction Fee</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 numberfont">$2.05</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2">Other Charges</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 numberfont">$1.13</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2 font-weight-semibold tx-14">Total</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 font-weight-semibold tx-14 numberfont">$34,798.00</span>
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<a href="javascript:void(0);" class="btn btn-block btn-primary mt-2">Buy Coin</a>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="scaleXtab2">
												<div class="row">
													<div class="col-xl-12">
														<div class="flex-between mb-3">
															<p class="mb-0">
																<span class="tx-muted">Bal. Avl.</span>
																<span class="numberfont">$2,39,489.00</span>
															</p>
															<p class="mb-0">
																<span class="tx-muted me-1">BTC ~ </span>
																<span class="tx-primary numberfont">$9,347.56</span>
															</p>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<select class="form-control select2-img">
																<option value="Bitcoin">Bit Coin</option>
																<option value="BitConnect">Bit Connect</option>
																<option value="BitShares">Bit Shares</option>
																<option value="Bytecoin">Byte Coin</option>
																<option value="Dash">Dash</option>
																<option value="Decred">Decred</option>
																<option value="Ethereum">Ethereum</option>
																<option value="Golem">Golem</option>
																<option value="Iconomi">Iconomi</option>
																<option value="LanaCoin">Lana Coin</option>
															</select>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<div class="input-group mb-0">
																<span class="input-group-text">Coins Amount</span>
																<input type="text" class="form-control" value="0.00198" placeholder="Amount Of Coins">
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="form-group">
															<div class="input-group mb-0">
																<span class="input-group-text">Amount (USD)</span>
																<input type="text" class="form-control" value="$29,389" placeholder="Enter Amount In USD">
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2">Transaction Fee</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 numberfont">$2.05</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2">Other Charges</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 numberfont">$1.13</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xl-6">
																<span class="mb-2 font-weight-semibold tx-14">Total</span>
															</div>
															<div class="col-xl-6">
																<span class="text-end float-end mb-2 font-weight-semibold tx-14 numberfont">$29,389.00</span>
															</div>
														</div>
													</div>
													<div class="col-xl-12">
														<a href="javascript:void(0);" class="btn btn-block btn-secondary mt-2">Sell Coin</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row row-deck">
						<div class="col-xxl-3 col-xl-6">
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										Market Info
									</div>
									<div class="btn-group">
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1H</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1D</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">1W</a>
										<a href="javascript:void(0);" class="btn btn-sm btn-primary">1M</a>
									</div>
								</div>
								<div class="card-body">
									<ul class="list-unstyled mb-0">
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-primary-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#4eb6d0" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold">
														<p class="mb-0 tx-14">BTC/USD</p>
														<span class="numberfont tx-15">$18,907.01</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+3.27%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">142.5 USD</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-secondary-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#ffda82" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold tx-14">
														<p class="mb-0">ETH/USD</p>
														<span class="numberfont tx-15">$15,135.25</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+1.45%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">2,145.75 USD</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-warning-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#ffbd5a" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold tx-14">
														<p class="mb-0">Dash/USD</p>
														<span class="numberfont tx-15">$15,176.46</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+4.86%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">5,756.4 USD</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-success-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#2dce89" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold tx-14">
														<p class="mb-0">GOLEM/USD</p>
														<span class="numberfont tx-15">$11,576.21</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+2.60%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">2,332.49 USD</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-purple-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#7891ef" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold tx-14">
														<p class="mb-0">LTC/USD</p>
														<span class="numberfont tx-15">$16,581.81</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+5.42%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">4,623.50 USD</p>
													</div>
												</div>
											</div>
										</li>
										<li class="list-item">
											<div class="d-flex flex-wrap">
												<div class="me-2">
													<div class="avatar bg-danger-transparent rounded-circle">
														<svg xmlns="http://www.w3.org/2000/svg" fill="#f34343" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z"/></svg>
													</div>
												</div>
												<div class="flex-1">
													<div class="flex-between flex-wrap mb-1 font-weight-semibold tx-14">
														<p class="mb-0">AUGUR/USD</p>
														<span class="numberfont tx-15">$10,107.51</span>
													</div>
													<div class="flex-between d-sm-flex d-block tx-12">
														<p class="mb-sm-0 mb-1 numberfont tx-success">+2.38%</p>
														<p class="mb-0 tx-muted font-weight-semibold numberfont">1,234.43 USD</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6">
							<div class="card overflow-hidden">
								<div class="card-header flex-between">
									<div class="card-title">Bitcoin Price Statistics</div>
									<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
								</div>
								<div class="card-body p-0">
									<div class="list-group projects-list border-0">
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">Bitcoin value in USD</p>
												<p class="text-dark mb-0 font-weight-normal text-dark tx-15">
													<span class="numberfont">$29,472.60</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">Price Change <span class="badge badge-sm bg-primary-transparent ms-3 text-primary">Increased</span></p>
												<p class="text-success mb-0 font-weight-normal tx-13">
													<span class="numberfont">+280.30(0.96%)</span> <i class="fa fa-arrow-up"></i> today
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-normal text-dark">Trade Value</p>
												<p class="text-dark mb-0 text-dark tx-15">
													<span class="numberfont">$245,36,465.652</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">Market Rank<span class="badge badge-sm bg-secondary-transparent text-dark ms-3">3 Years</span></p>
												<p class="text-dark mb-0 text-dark tx-15">
													<span class="numberfont">#1</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">This Week High</p>
												<p class="text-success mb-0 tx-15">
													<span class="numberfont">$68,990.90</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">This Week Low</p>
												<p class="text-danger mb-0 tx-15">
													<span class="numberfont">$28,825.76</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-top-0 border-start-0 border-end-0 border-bottom">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">Market Dominance</p>
												<p class="text-dark mb-0 tx-15">
													<span class="numberfont">70%</span>
												</p>
											</div>
										</a>
										<a href="javascript:void(0);" class="list-group-item flex-column align-items-start border-0">
											<div class="d-flex w-100 justify-content-between align-items-center">
												<p class="tx-14 mb-0 font-weight-semibold text-dark">Alltime High</p>
												<p class="text-info mb-0 tx-15">
													<span class="numberfont">$68,990.90</span>
												</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-5 col-xl-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title flex-between">
										Crypto Currencies and Prices
										<a href="javascript:void(0);" class="tx-inverse font-weight-normal tx-12">View All</a>
									</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap mb-0 border-top-0">
											<thead class="border-bottom-0 pt-3 pb-3">
												<tr>
													<th>S.no</th>
													<th>Name</th>
													<th>Price</th>
													<th>Growth</th>
													<th>Market Cap</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="fa fa-star text-warning me-2"></i>1
													</td>
													<td><svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#4eb6d0" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>Bitcoin (BTC)</td>
													<td class="font-weight-semibold numberfont">$29,472.60</td>
													<td class="tx-13"><span class="numberfont text-success">+4.23%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$6,57,456,436,588</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>2
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#7891ef" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z"/></svg>Litecoin (LTC)</td>
													<td class="font-weight-semibold numberfont">$2,456.52</td>
													<td class="tx-13"><span class="numberfont text-success">+1.45%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$3,45,743,456</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>7
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="28" height="28" viewBox="0 0 64 65"><g fill="none" fill-rule="nonzero"><circle cx="32.2" cy="32.4" r="31.7" fill="#F8BF1A"/><path fill="#FFF" d="M14.6 50.2v-8.4h4.9V22.6h-4.9v-8.1h20.5c1.4 0 2.8.4 4.1.9 2.6 1 4.9 2.5 6.7 4.7 1.6 1.9 2.7 4.1 3.3 6.6 1 4.2 1 8.5-.2 12.7-1.6 5.5-5 9.2-10.8 10.5-1 .2-2.1.3-3.1.4H15.4c-.3-.1-.5-.1-.8-.1zm14.9-8.4c1.1 0 2.2.1 3.3 0 1.4-.1 2.7-.6 3.6-1.8.8-1 1.5-2.1 1.9-3.3.8-2.7.5-5.4-.1-8.1-.3-1.6-1.1-3.1-2.1-4.3-.6-.7-1.4-1.5-2.3-1.6-1.4-.3-2.9-.1-4.3-.1v19.2z"/></g></svg>Dojecoin (DJC)</td>
													<td class="font-weight-semibold numberfont">$6,234.23</td>
													<td class="tx-13"><span class="numberfont text-success">+4.32%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$123,41,245,234.42</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>3
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#f34343" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z"/></svg>Augur (AUG)</td>
													<td class="font-weight-semibold numberfont">$1,235.52</td>
													<td class="tx-13"><span class="numberfont text-success">+0.78%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$54,62,354.70</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>4
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#ffbd5a" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>Dash (DASH)</td>
													<td class="font-weight-semibold numberfont">$5,734.68</td>
													<td class="tx-13"><span class="numberfont text-danger">-1.54%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$56,33,25,634.00</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>5
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#2dce89" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"/></svg>Golem (GLM)</td>
													<td class="font-weight-semibold numberfont">$3,234.50</td>
													<td class="tx-13"><span class="numberfont text-danger">-2.89%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$34,235,662,323.34</span>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fa fa-star me-2 text-dark-light"></i>6
													</td>
													<td>
														<svg xmlns="http://www.w3.org/2000/svg" class="me-2" fill="#ffda82" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>Etherium (ETH)</td>
													<td class="font-weight-semibold numberfont">$4,678.46</td>
													<td class="tx-13"><span class="numberfont text-success">+1.23%</span></td>
													<td>
														<span class="numberfont tx-13 font-weight-semibold">$75,745,434,234.50</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header flex-between">
									<div class="card-title">
										My Assets
									</div>
									<a href="javascript:void(0);" class="btn btn-sm btn-primary-light">Vew Report</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mb-0 text-nowrap" id="myAssets">
											<thead>
												<tr>
													<th>Coin</th>
													<th>Holdings</th>
													<th>Price</th>
													<th>Market Cap</th>
													<th>volume</th>
													<th>24h</th>
													<th>Profit/Loss</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#4eb6d0" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Bitcoin - BTC</h6>
															</div>
														</div>
													</td>
													<td>$28,390.10</td>
													<td>$55,928.89</td>
													<td>$123,905,289.20</td>
													<td>$12,39,390.25</td>
													<td><span class="tx-danger"><i class="fe fe-arrow-down-right me-1"></i>0.21%</span></td>
													<td><span class="tx-success">+2,309.90</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#ffda82" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Ethereum - ETH</h6>
															</div>
														</div>
													</td>
													<td>$25,291.01</td>
													<td>$54,827.91</td>
													<td>$23,05,180.88</td>
													<td>$21,93,935.52</td>
													<td><span class="tx-success"><i class="fe fe-arrow-up-right me-1"></i>0.31%</span></td>
													<td><span class="tx-success">+1,029.48</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#ffbd5a" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Dash - DASH</h6>
															</div>
														</div>
													</td>
													<td>$31,910.16</td>
													<td>$60,228.09</td>
													<td>$32,07,829.49</td>
													<td>$36,32,470.27</td>
													<td><span class="tx-success"><i class="fe fe-arrow-up-right me-1"></i>0.01%</span></td>
													<td><span class="tx-danger">-1,719.50</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#2dce89" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"></path></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Golem - GLM</h6>
															</div>
														</div>
													</td>
													<td>$15,841.54</td>
													<td>$45,756.18</td>
													<td>$215,70,718.10</td>
													<td>$28,23,728.68</td>
													<td><span class="tx-danger"><i class="fe fe-arrow-down-right me-1"></i>0.01%</span></td>
													<td><span class="tx-danger">-3,527.60</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#7891ef" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z"></path></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Litecoin - LTC</h6>
															</div>
														</div>
													</td>
													<td>$41,236.85</td>
													<td>$16,753.36</td>
													<td>$35,02,159.03</td>
													<td>$58,69,147.53</td>
													<td><span class="tx-danger"><i class="fe fe-arrow-down-right me-1"></i>0.13%</span></td>
													<td><span class="tx-success">+1,351.25</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<svg xmlns="http://www.w3.org/2000/svg" fill="#f34343" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z"></path></svg>
															</div>
															<div class="flex-1">
																<h6 class="mb-0 me-1">Augur - REP</h6>
															</div>
														</div>
													</td>
													<td>$35,759.15</td>
													<td>$36,745.37</td>
													<td>$18,16,354.05</td>
													<td>$61,394,158.26</td>
													<td><span class="tx-success"><i class="fe fe-arrow-up-right me-1"></i>0.03%</span></td>
													<td><span class="tx-danger">-1,653.55</span></td>
													<td>
														<div class="btn-list">
															<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">Sell Now</a>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary">Buy More</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@section('scripts')

		<!--Internal  Chart.bundle js -->
		<script src="{{asset('build/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- Internal index js -->
		@vite('resources/assets/js/index-6.js')

@endsection
