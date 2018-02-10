@extends('master')
@section('content')

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add"> تعيين خادم للخدمة &nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true" style="padding-right: 22px"></i></button>
                            <br>

                            <div class="row">

                                <div class="col-md-3 col-md-offset-9">
                                    <div class="form-group" style="margin-right: 10px; margin-bottom: 0">
                                        <label for="sel1">اختر الخدمة</label>
                                        <select class="form-control" id="sel1">
                                            <option>اولى ابتدائى</option>
                                            <option>ثالثة اعدادى </option>
                                            <option>اولى ثانوي</option>
                                            <option>جامعيين</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                    <tr class="frist">
                                        <th>المسلسل</th>
                                        <th>الاسم</th>
                                        <th>الرئيسية </th>
                                        <th>الفرعية</th>
                                        <th>الحالة</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="gradeX">
                                        <td>1</td>
                                        <td class="center">مينا نشات </td>
                                        <td>خدمة ابتدائى</td>
                                        <td>اولى ابتدائى</td>
                                        <td> <span class="label label-warning">نشط</span></td>
                                        <td><button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخادم من الخدمة">
                                             <span class="glyphicon glyphicon-trash">
                                             </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <button class="btn btn-success btn-xs" data-toggle="modal" title="تفاصيل" data-target="#show"><span class="glyphicon glyphicon-eye-open"></span></button>

                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>2</td>
                                        <td class="center">كيرلس ماجد </td>
                                        <td>خدمة ابتدائى</td>
                                        <td>اولى ابتدائى</td>
                                        <td> <span class="label label-warning">نشط</span></td>
                                        <td><button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخادم من الخدمة">
                                             <span class="glyphicon glyphicon-trash">
                                             </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <button class="btn btn-success btn-xs" data-toggle="modal" title="تفاصيل" data-target="#show"><span class="glyphicon glyphicon-eye-open"></span></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>3</td>
                                        <td class="center">مايكل </td>
                                        <td>خدمة ابتدائى</td>
                                        <td>اولى ابتدائى</td>
                                        <td> <span class="label label-warning">نشط</span></td>
                                        <td><button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخادم من الخدمة">
                                             <span class="glyphicon glyphicon-trash">
                                             </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <button class="btn btn-success btn-xs" data-toggle="modal" title="تفاصيل" data-target="#show"><span class="glyphicon glyphicon-eye-open"></span></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>4</td>
                                        <td class="center">كيرلس نشات </td>
                                        <td>خدمة ابتدائى</td>
                                        <td>اولى ابتدائى</td>
                                        <td> <span class="label label-danger">محظور</span></td>
                                        <td><button class="btn btn-danger btn-xs demo4" data-toggle="tooltip" title="حذف الخادم من الخدمة">
                                             <span class="glyphicon glyphicon-trash">
                                             </span></button>&nbsp;&nbsp;
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" title="تعديل" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></button>
                                            &nbsp;
                                            <button class="btn btn-success btn-xs" data-toggle="modal" title="تفاصيل" data-target="#show"><span class="glyphicon glyphicon-eye-open"></span></button>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal -->
                            <div id="show" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <img src="img/profile_small.jpg" class="center-block img-circle" style="min-width: 150px">
                                                </div>
                                                <div class="col-sm-10 col-md-offset-2  m-t-xxl m-b-xl">
                                                    <div class="row">
                                                        <div class="col-md-4 ">
                                                            <h3>أسم المستخدم</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>حبيب جريس إبراهيم أمين</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4">
                                                            <h3>البريد الألكترونى</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>habibgrece@hotmail.com</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4 ">
                                                            <h3>تاريخ الميلاد</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>1995/05/15</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4 ">
                                                            <h3>رقم الهاتف</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>023032323</h3>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                        <div class="col-md-4 ">
                                                            <h3>الخدمه</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>جامعيين</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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

                                                        <!--  -->
                                                        <div class="form-group">
                                                            <label for="sel1">الرئيسية</label>
                                                            <select class="form-control" id="sel1">
                                                                <option></option>
                                                                <option selected="select" value="كيرلس ماجد">ابتدائى</option>
                                                                <option  value="اعدادى">اعدادى</option>
                                                                <option  value="ثانةي">ثانةي</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sel1">الفرعية</label>
                                                            <select class="form-control" id="sel1">
                                                                <option></option>
                                                                <option selected="select" value="كيرلس ماجد">اولى ابتدائى</option>
                                                                <option  value="اعدادى">تانية ابتدائي</option>
                                                                <option  value="ثانةي">ثالثة ابتدائى</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="sel1">الحلة</label>
                                                            <select class="form-control" id="sel1">


                                                                <option selected="select"  value="نشط">نشط</option>
                                                                <option  value="نشط">محظور</option>
                                                            </select>
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
        <!-- modal -->
        <div id="add" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row m-t-lg">
                            <div class="col-sm-12 ">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="home-color bold">تعيين خدام للخدمة</h3>
                                <br>
                                <form role="form">
                                    <!--  -->
                                    <form role="form">
                                        <!--  -->

                                        <!--  -->
                                        <div class="form-group">
                                            <label for="sel1">الرئيسية</label>
                                            <select class="form-control" id="sel1">
                                                <option></option>
                                                <option  value="كيرلس ماجد">ابتدائى</option>
                                                <option  value="اعدادى">اعدادى</option>
                                                <option  value="ثانةي">ثانةي</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">الفرعية</label>
                                            <select class="form-control" id="sel1">
                                                <option></option>
                                                <option value="كيرلس ماجد">اولى ابتدائى</option>
                                                <option  value="اعدادى">تانية ابتدائي</option>
                                                <option  value="ثانةي">ثالثة ابتدائى</option>
                                            </select>
                                        </div>
                                        <!--  -->
                                        <div class="form-group">
                                            <select class="select2_demo_11 form-control" multiple="multiple">
                                                <option></option>
                                                <option  value="كيرلس ماجد">كيرلس ماجد</option>
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
        <!-- /.modal -->

        <div class="footer">
            <div >
                جميع الحقوق محفوظه &copy; 2017
            </div>
        </div>
    </div>
@endsection