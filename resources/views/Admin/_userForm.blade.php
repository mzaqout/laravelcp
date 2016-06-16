    <div class="row">
    
     <div class="col-sm-6">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                بيانات المستخدم
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                </div>
            </div>
            <div class="panel-body" style="display: block;">
               
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-field-1">
                           الاسم الشخصي
                        </label>
                        <div class="col-sm-8">
                              {!! Form::text('name',null,['class'=>'form-control','id'=>'name']) !!}

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">الجوال </label>
                        <div class="col-md-8">
                            <div class="input-icon right">
                                {!! Form::text('mobile',null,['class'=>'form-control','id'=>'mobile']) !!}                                </div>
                            <div class="help-block">
                            </div>
                        </div>
                    </div>



                    
              
            </div>
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>
    
    <div class="col-sm-6">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i>
                بيانات الدخول
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                </div>
            </div>
            <div class="panel-body" style="display: block;">
                 
                    
                    <div class="form-group">
                        <label class="control-label col-md-3">البريد الالكتروني </label>
                        <div class="col-md-8">
                            <div class="input-icon right">
                               
                                {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                                
                            </div>
                            <div class="help-block">
                            </div>
                        </div>
                    </div>
                       
                    <div class="form-group has-success">
                        <label class="control-label col-md-3">كلمة المرور </label>
                        <div class="col-md-8">
                            <div class="input-icon right">
                                {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}                                </div>
                            <div class="help-block">
                            </div>
                        </div>
                    </div>


            <div class="form-group  has-success">
                        <label class="control-label col-md-3">اعادة كلمة المرور </label>
                        <div class="col-md-8">
                            <div class="input-icon right">
                                {!! Form::password('repassword',['class'=>'form-control','id'=>'repassword']) !!}                                </div>
                            <div class="help-block">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="control-label col-md-3">حالة الحساب </label>
                    <div class="col-md-9">
                            <div class="margin-bottom-10">
                                    
                                <input id="option1" name="isActive" value="1" @if($update) @if($user->isActive)checked="checked" @endif @else checked="checked" @endif   class="make-switch switch-radio1" type="radio">
                                    <label for="option1">مفعل</label>
                                
                                    <input id="option2" name="isActive" value="0"  @if($update) @if(!$user->isActive)checked="checked" @endif @endif class="make-switch switch-radio1" type="radio">
                                    <label for="option2">غير مفعل</label>
                            </div>
                         
                    </div>
            </div>
                 <div class="form-actions fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" col-md-2">
                                    <button type="submit" class="btn purple"><i class="fa fa-check"></i> {{$button}}</button>
                                </div>
                                @if($update)
                                <div class=" col-md-6">
                                    <button name='passReset' type="submit" class="btn purple"><i class="fa fa-check"></i> استرجاع كلمة المرور</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>    

            </div>
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>
    
</div>


@push('js')
<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
		   $(document).ready(function () {

        $('#form-user').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                name: {
                    required: true
                },
                mobile:{
                    required: true,
                    number:true
                },
                password: {
                    minlength: 6,
                    required: true
                },
                repassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                
                email: {
                    required: true,
                    email:true
                },
                
                
                
            },
            messages: {// custom messages for radio buttons and checkboxes
                name: "يرجى ادخال الاسم الشخصي للمستخدم",
                mobile: "يرجى ادخال رقم جوال صحيح",
                email: {
                    required: "البريد الالكتروني يستخدم لعملية الدخول",
                    email: "صيغة البريد الالكتروني غير صحيحة name@domain.com"
                },
                password: "على الاقل 6 حروف",
                 repassword:{
                   equalTo: "يرجى التأكد من مطابقة كلمة المرور المدخلة",
                   required: "يرجى التأكد من مطابقة كلمة المرور المدخلة",
                }
                
            },
            invalidHandler: function (event, validator) { //display error alert on form submit   

            },
            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },
            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "tnc") { // insert checkbox errors after the container                  
                    error.insertAfter($('#register_tnc_error'));
                } else if (element.closest('.input-icon').size() === 1) {
                    error.insertAfter(element.closest('.input-icon'));
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });


    });
		</script>
                
                @endpush