@extends('master')
@section('content')
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row services">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>جميع الخدمات</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row ">
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <div class="widget navy-bg text-center">
                                            <h2>خدمة ابتدائي</h2>
                                        </div>
                                        <div class="mena">
                                            <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخدمة" >
                                       <span class="glyphicon glyphicon-trash">
                                       </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <a href="sub_services.html" class="btn btn-success btn-xs" data-toggle="tooltip" title="التفاصيل"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <div class="widget navy-bg text-center">
                                            <h2>خدمة اعدادى</h2>
                                        </div>
                                        <div class="mena">
                                            <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخدمة" >
                                       <span class="glyphicon glyphicon-trash">
                                       </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <a href="sub_services.html" class="btn btn-success btn-xs" data-toggle="tooltip" title="التفاصيل"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <div class="widget navy-bg text-center">
                                            <h2>خدمة ثانوى</h2>
                                        </div>
                                        <div class="mena">
                                            <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخدمة" >
                                       <span class="glyphicon glyphicon-trash">
                                       </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <a href="sub_services.html" class="btn btn-success btn-xs" data-toggle="tooltip" title="التفاصيل"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <div class="widget navy-bg text-center">
                                            <h2>خدمة جامعة</h2>
                                        </div>
                                        <div class="mena">
                                            <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخدمة" >
                                       <span class="glyphicon glyphicon-trash">
                                       </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <a href="sub_services.html" class="btn btn-success btn-xs" data-toggle="tooltip" title="التفاصيل"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <div class="widget navy-bg text-center">
                                            <h2>خدمة خرجين</h2>
                                        </div>
                                        <div class="mena">
                                            <button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخدمة" >
                                       <span class="glyphicon glyphicon-trash">
                                       </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <a href="sub_services.html" class="btn btn-success btn-xs" data-toggle="tooltip" title="التفاصيل"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padd">
                                        <a class="profile" data-toggle="modal" data-target="#test-modal">
                                            <div class="dotted  text-center">
                                                <h2>اضف خدمه</h2>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="edit" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row m-t-lg">
                                                    <div class="col-sm-12 ">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                        <h3 class="home-color bold">تعديل على اسم الخدمة</h3>
                                                        <br>
                                                        <form role="form">
                                                            <!--  -->
                                                            <div class="form-group"> <input type="text" value="خدمة ابتدائي" class="form-control"></div>
                                                            <!--  -->
                                                            <div class="form-group">
                                                                <select class="select2_demo_3 form-control">
                                                                    <option></option>
                                                                    <option selected="select" value="كيرلس ماجد">كيرلس ماجد</option>
                                                                    <option value="نشات مينا">نشات مينا</option>
                                                                    <option value="كيرو">كيرو</option>
                                                                    <option value="مايكل">مايكل</option>
                                                                    <option value="ماريو">ماريو</option>
                                                                    <option value="مريم">مريم</option>
                                                                    <option value="نشات">نشات</option>
                                                                    <option value="تينا">تينا</option>
                                                                </select>
                                                            </div>




                                                            <div class="ibox float-e-margins" style="display: none;">
                                                                <div class="ibox-title  back-change">

                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="btn btn-md btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="test-modal" data-modal-index="1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row m-t-lg">
                            <div class="col-sm-12 ">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="home-color bold">أضف اسم الخدمه</h3>
                                <br>
                                <form role="form">
                                    <!--  -->
                                    <div class="form-group"> <input type="text" placeholder="اضف اسم الخدمه" class="form-control"></div>
                                    <div class="form-group">
                                        <select class="select2_demo_3 form-control">
                                            <option></option>
                                            <option value="كيرلس ماجد">كيرلس ماجد</option>
                                            <option value="نشات مينا">نشات مينا</option>
                                            <option value="كيرو">كيرو</option>
                                            <option value="مايكل">مايكل</option>
                                            <option value="ماريو">ماريو</option>
                                            <option value="مريم">مريم</option>
                                            <option value="نشات">نشات</option>
                                            <option value="تينا">تينا</option>
                                        </select>
                                    </div>




                                    <div class="ibox float-e-margins" style="display: none;">
                                        <div class="ibox-title  back-change">

                                        </div>

                                    </div>
                                    <!--  -->
                                </form>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 white-color bold text-center">
                                    <span  class="btn m-t-lg m-b-lg" style="border: 2px dotted #ddd; border-radius: 22px; padding: 22px 7px" data-toggle="modal" data-target="#test-modal-2">
                                       <div class="text-center">
                                          <p>اضف فصل داخل الخدمة </p>
                                          <i class="fa fa-plus" aria-hidden="true"></i>
                                       </div>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="test-modal-2" data-modal-index="2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row m-t-lg">
                            <div class="col-sm-12 ">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="home-color bold">اضافة فصول داخل الخدمة</h3>
                                <br>
                                <form role="form">
                                    <!--  -->
                                    <div class="form-group"> </div>
                                    <!--  -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">اسم الفصل</label>
                                        <div class="col-md-9">
                                            <div class="form-group"> <input type="text" placeholder="اضف اسم الفصل" class="form-control"></div>





                                            <!--  -->
                                            <div id="room_fileds">
                                                <div>
                                                    <div class="content">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button"  class="btn btn-sm  m-t-xs m-b-lg" id="more_fields" onclick="add_fields();" value=" اضافة فصل اخر" />
                                            <!--  -->
                                        </div>
                                        <!-- <label class="col-md-2">
                                           </label> -->
                                    </div>
                                    <!--  -->
                                </form>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary btn-block m-t-n-xs" type="submit"><strong>حفظ</strong></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="footer">
            <div >
                جميع الحقوق محفوظه &copy; 2017
            </div>
        </div>
    </div>
@endsection