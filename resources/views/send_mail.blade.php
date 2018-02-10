@extends('master')
@section('content')

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-md-12 animated fadeInRight">
                    <div class="mail-box-header">

                        <h2>
                            ارسال رسالة للخدام
                        </h2>
                    </div>
                    <div class="mail-box">
                        <div class="mail-body">
                            <form class="form-horizontal" role="form" method="get">
                                <div class="">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="select2_demo_11 form-control" multiple="multiple">
                                                <option></option>
                                                <option  value="كل الخدام">كل الخدام</option>
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
                                    </div>
                                    <label class="col-sm-2 ">الى:</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
                                    <label class="col-sm-2 ">الموضوع</label>
                                </div>
                            </form>
                        </div>
                        <div class="mail-text h-200">
                            <div class="summernote">
                                <h3>بسم الثالوث القدوس </h3>
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                                هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                                <br/>
                                <br/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                            <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Send</a>

                        </div>
                        <div class="clearfix"></div>
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