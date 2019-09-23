@extends('layouts.app')

@section('title', 'News')

@section('style')

@endsection()

@section('sidebar')
    @parent

    @include('layouts.sidebar')
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">

            <!--end:: Widgets/Stats-->

            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title"><i class="fas fa-chart-bar fa-sm"></i>&nbsp;News Category</h3>
                </div>

            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    <div class="m-portlet__head-tools">
                        <div class="col-lg-4" style="padding-bottom:10px;">
                            <a href="{{ url('news/add_news') }}" class="btn btn-ontruck m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><span><i class="la la-plus"></i><span>Add New Category News</span></span></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- END: Subheader -->

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__body">

                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-10 m--margin-bottom-10">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                    <form action="{{ URL::to('/admin/news&promo') }}" method="get">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-7">
                                        <div class="m-input-icon m-input-icon--left">


                                            <input type="text" class="form-control m-input" placeholder="Masukan Judul, Deskripsi" id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">

                            <!-- BACKEND TODOO THIS !!! for ADD CONTROL SEARCH BUTTON -->
                                <a href="#" class="btn btn-ontruck m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span>
                                        <i class="la la-search"></i>
                                        <span>Cari</span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            <!---->

                            </div>
                        </form>
                        </div>
                    </div>
                <!--end: Search Form -->


                <div class="m-accordion m-accordion--default mb-4" id="filter_accordion" role="tablist">


                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data" style="">
                      <table id="" class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                          <thead class="m-datatable__head">
                              <tr class="m-datatable__row">
                                    <th class="m-datatable__cell m-datatable__cell--sort" data-sort="desc">
                                        <span style="width: 110px;">File Foto<i class="la la-arrow-down"></i>
                                        </span>
                                    </th>
                                    <th class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">Tanggal di Buat</span>
                                    </th>
                                    <th class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 150px;">Tanggal di Update</span>
                                    </th>
                                    <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">News Title</span>
                                    </th>
                                    <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">Konten</span>
                                    </th>
                                    <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">Lokasi Gambar</span>
                                    </th>
                                    <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">Slug</span>
                                    </th>
                                    <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                                        <span style="width: 110px;">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="m-datatable__body" style="">
                                	@foreach($news as $data)
                                <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                                     <td class="m-datatable__cell" style="width: 13%;">
                                            <img src="../" alt="no image found" class="img-responsive" width="100%">
                                    </td>
                                    <td class="m-datatable__cell" style="width: 13%;">
                                        <span>{{ Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</span>
                                    </td>
                                    <td class="m-datatable__cell" style="width: 20%;">
                                        <span>{{ Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</span>
                                    </td>
                                    <td class="m-datatable__cell" style="width: 13%;">
                                        <span width: 110px;>{{ $data->title }}</span>
                                    </td>
                                    <td class="m-datatable__cell" style="width: 13%;">
                                        <span width: 110px;></span>
                                    </td>
                                    <td class="m-datatable__cell" style="width: 13%;">
                                        <span width: 110px;></span>
                                    </td>
                                    <td class="m-datatable__cell" style="width: 15%;">
                                        <span width: 110px;></span>
                                    </td>

                                    <td class="m-datatable__cell" style="width: 13%;">
                                            <a href=""><span class="flaticon-edit"></span>
                                        </td>
                               </tr>
                               @endforeach
                            </tbody>
                        </table>
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>



    </div>
@endsection

@section('script')

@endsection
