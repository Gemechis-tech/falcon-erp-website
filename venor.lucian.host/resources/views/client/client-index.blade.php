@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('niva-backend.all_clients') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('niva-backend.all_clients') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <a href="{{route('about-setting.edit')}}" class="btn btn-primary btn-back">{{clean( trans('niva-backend.back_aboutpage') , array('Attr.EnableID' => true))}}</a>
                <a href="{{route('contact-setting.edit')}}" class="btn btn-primary btn-back">{{clean( trans('niva-backend.back_contact_page') , array('Attr.EnableID' => true))}}</a>
                <a href="{{route('client.create')}}" class="btn btn-primary btn-back">{{clean( trans('niva-backend.create') , array('Attr.EnableID' => true))}}</a>


            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

