@extends('admin')

@section('header')
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css"/>
<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">

<div class="col-md-12">
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
    <h3 class="page-title">
        <small></small>
         حسابات المستخدمين </h3>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/admin">
                الرئيسية
            </a>
            <i class="fa fa-angle-left"></i>
        </li>
        <li>
            <a href="/admin/users">
                 حسابات المستخدمين 
            </a>
            <i class="fa fa-angle-left"></i>
        </li>
        
        <li>
            <a href="#">
                 تعديل
            </a>
            <i class="fa fa-angle-left"></i>
        </li>


    </ul>
    <!-- END PAGE TITLE & BREADCRUMB-->
</div>
@endsection

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>خطأ!</strong> خطأ في البيانات المدخلة.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    {!! Form::model($user,['method'=>'PATCH','url'=>'/admin/'.$user->id,'id'=>'form-product',
    'class'=>'form-horizontal form-bordered','enctype'=>'multipart/form-data']) !!}
    
     @include('admin._userForm',['logo'=>true,'userTypeId'=>$user->userTypeId,'username'=>$user->userProfile->username,
     'countryId'=>$user->userProfile->countryId,'stateId'=>$user->userProfile->stateId,'button'=>'تعديل',
     'cityId'=>$user->userProfile->cityId,'address'=>$user->userProfile->address,'mobile'=>$user->userProfile->mobile])

{!! Form::close() !!}
@endsection
