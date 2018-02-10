<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات الكنيسة</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/bootstrap-rtl/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/bootstrap-rtl/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ url('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ url('css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/cropper/cropper.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <script src={{ url('js/plugins/metisMenu/jquery.metisMenu.js') }}""></script>
    <link href="{{ url('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ url('css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700" rel="stylesheet">
    <link rel="shortcut icon" type="img/png" href="img/icon.png" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href='{{ url('css/calender/fullcalendar.css') }}' rel='stylesheet' />
    <link href='{{ url('css/calender/fullcalendar.print.css') }}' rel='stylesheet' media='print' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style>


        #wrap {
            /*    width: 1100px;
            */    margin: 0 auto;
        }

        #external-events {
            float: left;
            width: 150px;
            padding: 0 10px;
            text-align: left;
        }

        #external-events h4 {
            font-size: 16px;
            margin-top: 0;
            padding-top: 1em;
        }

        .external-event { /* try to mimick the look of a real event */
            margin: 10px 0;
            padding: 2px 4px;
            background: #3366CC;
            color: #fff;
            font-size: .85em;
            cursor: pointer;
        }

        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
        }

        #external-events p input {
            margin: 0;
            vertical-align: middle;
        }
        #calendar {
            /*    float: right; */
            margin: 0 auto;
            /*    width: 900px;
            */    background-color: #FFFFFF;
            border-radius: 6px;
            box-shadow: 0 1px 2px #C3C3C3;
        }
    </style>
</head>
<body class="rtls">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="{{ asset('img/profile_small.jpg') }}" />
                            </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">كنيسة الشهيد كرياكوس</strong>
                                    </span> <span class="text-muted text-xs block">كيرلس ماجد <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{ url('profile') }}">الملف الشخصى</a></li>
                            <li><a href="{{ url('setting') }}">الاعدادات</a></li>

                            <li class="divider"></li>
                            <li><a href="{{ url('login') }}">تسجيل خروج</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">

                    </div>
                </li>

                <li class="active">
                    <a href="{{ url('/') }}"><i class="fa fa-diamond"></i> <span class="nav-label">الرئيسية</span></a>
                </li>
                <li>
                    <a href="{{ url('add_servant') }}"><i class="fa fa-flask"></i> <span class="nav-label">كل الخدام</span></a>
                </li>
                <li>
                    <a href="{{ url('attendance_servant') }}"><i class="fa fa-flask"></i> <span class="nav-label">حضور الخدام</span></a>
                </li>


                <li>
                    <a href="{{ url('add_services') }}"><i class="fa fa-flask"></i> <span class="nav-label">اضافه خدمه</span></a>
                </li>
                <li>
                    <a href="{{ url('employee_for_services') }}"><i class="fa fa-flask"></i> <span class="nav-label">تعيين خادم للخدمة</span></a>
                </li>
                <li>
                    <a href="{{ url('send_mail') }}"><i class="fa fa-flask"></i> <span class="nav-label">ارسال رسالة للخدام</span></a>
                </li>





            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="text-muted welcome-message text-center">نظام اشراف ومتابعة خدمات الكنيسة</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="{{ url('notifications') }}" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ url('img/a1.jpg') }}">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>كيرلس ماجد</strong>
                                        قام باضافة خدمة جديدة
                                        <strong>خدمة مرضى</strong> <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="{{ url('notifications') }}" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ url('img/a1.jpg') }}">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>كيرلس ماجد</strong>
                                        قام باضافة خدمة جديدة
                                        <strong>خدمة ابتدائي</strong><br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="{{ url('notifications') }}" class="pull-left">
                                        <img alt="image" class="img-circle" src="{{ url('img/a1.jpg') }}">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>كيرلس ماجد</strong>
                                        تغير امين الاسرة ابتدائي من
                                        <strong>
                                            مينا نشات
                                        </strong>
                                        الى
                                        <strong>كيرلس نشات</strong><br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="{{ url('notifications') }}">
                                        <i class="fa fa-envelope"></i> <strong>كل الاشعارات</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="{{ url('login') }}" class="visible-lg hidden-sm">
                            <i class="fa fa-sign-out"></i> تسجيل خروج
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


    @yield('content')
</div>
<!-- Mainly scripts -->
<script src='{{ url('js/calender/jquery-1.10.2.js') }}'></script>
<script src='{{ url('js/calender/jquery-ui.custom.min.js') }}'></script>
<script src='{{ url('js/calender/fullcalendar.js') }}'></script>
<script src="{{ url('js/calender/main.js') }}" type="text/javascript" ></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/inspinia.js') }}"></script>
<script src="{{ url('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('js/plugins/chosen/chosen.jquery.js') }}"></script>
<script src="{{ url('js/plugins/jsKnob/jquery.knob.js') }}"></script>
<script src="{{ url('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="{{ url('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('js/plugins/nouslider/jquery.nouislider.min.js') }}"></script>
<script src="{{ url('js/plugins/switchery/switchery.js') }}"></script>
<script src="{{ url('js/plugins/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ url('js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ url('js/plugins/dataTables/table.js') }}"></script>
<script src="{{ url('js/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ url('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ url('js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ url('js/plugins/clockpicker/clockpicker.js') }}"></script>
<script src="{{ url('js/plugins/cropper/cropper.min.js') }}"></script>
<script src="{{ url('js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ url('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ url('js/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ url('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ url('js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ url('js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
<script src="{{ url('js/fakeLoader.min.js') }}"></script>
<script src="{{ url('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="{{ url('js/plugins/summernote/summernote.min.js') }}"></script>
<script src="{{ url('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ url('js/plugins/chartJs/Chart.min.js') }}"></script>
<script src="{{ url('js/demo/chartjs-demo.js') }}"></script>
<script src="{{ url('js/demo/chartjspie-demo.js') }}"></script>
<script src="{{ url('js/demo/chartjsbar-chart-demo.js') }}"></script>
</body>
</html>