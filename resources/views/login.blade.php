<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>خدمات الكنيسة</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body style="background: url(img/login.jpg); background-size: cover;
background-repeat: no-repeat;">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="login" style="direction: rtl;">

        <h3>مرحبا بك</h3>

        <p>نظام اشراف ومتابعة خدمات الكنيسة</p>
        <form class="m-t" role="form" action="index.html">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="اسم المستخدم" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="الرقم السرى" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">تسجيل</button>

            <a  data-toggle="modal" data-target="#myModal"><small>تغيير كلمة المرور</small></a>
            <!--                 <p class="text-muted text-center"><small></small></p>
             -->                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
        </form>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close pull-left" data-dismiss="modal" >&times;</button>
                        <h4 class="modal-title" style="text-align: right;">تغير الرقم السرى</h4>
                    </div>
                    <div class="modal-body">
                        <form style="direction: rtl; text-align: right;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الاكترونى</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الاكترونى">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">الحالى </label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">الجديد</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">اعادة كتابة الرقم السرى </label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السرى">
                            </div>

                            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        <p class="m-t"> جميع الحقوق محفوظه &copy; 2017</p>
    </div>




</div>


<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
