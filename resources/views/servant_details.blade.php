@extends('master')
@section('content')

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> تفاصيل عن الخادم </a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">رسم بيانى لتوضيح نسبة الحضور </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">




                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <img src="img/a1.jpg" class="center-block img-circle" style="min-width: 150px">
                                                </div>
                                                <div class="col-sm-11 col-md-offset-1 m-t-xxl m-b-xl">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <h3>أسم المستخدم</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>حبيب جريس إبراهيم أمين</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-3">
                                                            <h3>البريد الألكترونى</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>habibgrece@hotmail.com</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-3 ">
                                                            <h3>تاريخ الميلاد</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>1995/05/15</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-3 ">
                                                            <h3>النوع</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>ذكر</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-3 ">
                                                            <h3>العنوان</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>9 شارع المعادى بجوار كنيسة العدرا</h3>
                                                        </div>
                                                        <div class="clearfix"></div>

                                                        <div class="col-md-3 ">
                                                            <h3>رقم الهاتف</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>023032323</h3>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                        <div class="col-md-3 ">
                                                            <h3>الخدمة</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>خدمة ابتدائي</h3>
                                                        </div>

                                                        <div class="clearfix"></div>




                                                    </div>
                                                </div>
                                            </div>






                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <canvas id="line-chart" width="800" height="450"></canvas>
                                </div>
                            </div>
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