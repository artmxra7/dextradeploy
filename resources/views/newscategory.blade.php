@extends('layouts.app')

@section('title', 'News')

@section('style')

@endsection()

@section('sidebar')
    @parent

    @include('layouts.sidebar')
@endsection

@section('content')
<!-- begin::Body -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Local Data</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Metronic Datatable</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">Base</span>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">JSON Data</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">Quick Actions</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">Messages</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">Support</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit">
														</li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-technology m--font-accent"></i>
							</div>
							<div class="m-alert__text">
								Datatable initialized from remote JSON source with local(frontend) pagination, column order and search support.
							</div>
						</div>
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											JSON Datatable<small>initialized from remote json file</small>
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
												<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
													<i class="la la-ellipsis-h m--font-brand"></i>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav">
																	<li class="m-nav__section m-nav__section--first">
																		<span class="m-nav__section-text">Quick Actions</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">Create Post</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">Send Messages</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																			<span class="m-nav__link-text">Upload File</span>
																		</a>
																	</li>
																	<li class="m-nav__section">
																		<span class="m-nav__section-text">Useful Links</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-info"></i>
																			<span class="m-nav__link-text">FAQ</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																			<span class="m-nav__link-text">Support</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit m--hide">
																	</li>
																	<li class="m-nav__item m--hide">
																		<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">

								<!--begin: Search Form -->
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label>Status:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_status">
																<option value="">All</option>
																<option value="1">Pending</option>
																<option value="2">Delivered</option>
																<option value="3">Canceled</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">Type:</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_type">
																<option value="">All</option>
																<option value="1">Online</option>
																<option value="2">Retail</option>
																<option value="3">Direct</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-cart-plus"></i>
													<span>New Order</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>

								<!--end: Search Form -->


                                <!--end: Search Form -->

                                <!--begin: Datatable -->
								<div class="m_datatable" id="ajax_data"></div>

								<!--end: Datatable -->

								<!--begin: Datatable -->
                                <div class="panel-body">
                                    <table class="table table-bordered" id="customers-table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Created At</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- end:: Body -->
@endsection

@section('script')
<script>
    $('#customers-table').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      searchDelay: 500,
      ajax: '{{ route('api.row_details_news_category') }}',

      columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'created_at', name: 'created_at' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
    });
</script>

<script src="{{ asset('metronic/assets/my-asset/data-json.js') }}"  type="text/javascript">
</script>

@endsection
