@extends('master')
@section('content')


        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <!-- <span class="label label-success pull-right">Monthly</span> -->
                            <h5>عدد الخدمات</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">40</h1>

                            <small>كل الخدمات</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <!-- <span class="label label-info pull-right">Annual</span> -->
                            <h5>عدد امناء الاسر</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">10</h1>

                            <small>كل الامناء</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">

                            <h5>عدد الخدام</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">100</h1>

                            <small>كل الخدام</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">

                            <h5>عدد المخدومين</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">8000</h1>

                            <small>المخدومين</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>عدد الخدام فى كل خدمة</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="text-center">
                                <canvas id="pie-chart" width="800" height="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>عدد المخدومين فى كل مرحلة</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnut-chart" width="800" height="450"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-12">
                    <div id='wrap'>
                        <div id='calendar'></div>
                        <div style='clear:both'></div>
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