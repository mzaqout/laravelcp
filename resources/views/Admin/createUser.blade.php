@extends('admin')

@section('breadcrumb')
<li>
                                    <i class="clip-home-3"></i>
                                    <a href="/home">
                                        الرئيسية
                                    </a>
                                </li>
                                <li class="active">
                                    اضافة مستخدم
                                </li>
                                
@endsection

@section('content')



    {!! Form::open(['url'=>'/Admin/Users/save-user/','id'=>'form-user',
    'class'=>'form-horizontal form-bordered','enctype'=>'multipart/form-data']) !!}
    
     @include('admin._userForm',['update'=>false,'button'=>'حفظ'])


{!! Form::close() !!}
@endsection

