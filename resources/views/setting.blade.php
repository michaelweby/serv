@extends('master')
@section('content')

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <!--  -->
                            <div class="ibox-content">
                                <div class="form-horizontal  m-t-lg">
                                    <!--  -->
                                    <div class="form-group">
                                        <div class="col-lg-3 col-md-offset-5" >
                                            <div class=" thumbnail" style="max-width: 150px; max-height: 150px"> <img id="img" src="img/a1.jpg" alt=""></div>

                                            <label for="upload" class="btn btn-primary">تعديل الصورة
                                                <input type="file" id="upload">
                                            </label>

                                        </div>

                                    </div>


                                    <!--  -->
                                    <div class="form-group"><label class="col-lg-2 control-label">أسم المستخدم</label>
                                        <div class="col-lg-10"><input type="text" placeholder="" class="form-control" value="حبيب جريس إبراهيم أمين">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">البريد الألكترونى</label>
                                        <div class="col-lg-10"><input type="text" placeholder="" value="habibgrece@hotmail.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">كلمه المرور</label>
                                        <div class="col-lg-10"><input type="password" placeholder="" value="سيسي" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">  تاكيد كلمه المرور</label>
                                        <div class="col-lg-10"><input type="password" placeholder="" value="سيسي" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">تاريخ الميلاد</label>
                                        <!--  -->
                                        <div class="col-lg-10 ">
                                            <div  id="data_1">

                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <!--  -->
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">رقم الهاتف</label>
                                        <div class="col-lg-10"><input type="text" placeholder="" value="023232543" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <button class="btn btn-primary pull-right">  &nbsp; &nbsp; حفظ  &nbsp; &nbsp;</button>
                                        </div>
                                    </div>






                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">

            <div >
                جميع الحقوق محفوظه &copy; 2017
            </div>
        </div>
    </div>
@endsection