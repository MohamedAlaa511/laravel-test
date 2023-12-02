@extends("dashboard")

@push("PAGE_TITLE")
  {{  " رابط الإحالة " }}
@endpush
    
@section("contant")


        {{-- <div class="user-statics user-tips frame">

            <div class="user-statics__tips base-box fd-row">
                <div class="fd-column user-statics__tips__container ">
                    <div class="user-statics__tips__title section-header"> مرحبا بك يا محمد </div>
                    <div class="user-statics__tips__content">
                    يمكنك الأن إستدعاء أصدقائك للإشتراك في الموقع و ربح 30 نقطة على كل عضو يسجل من خلالك . يمكنك نشر الرابط الخاص بك في موقع التواصل الإجتماعي لكي تتمكن من الحصول على النقاط يجب على العضو أن يقوم بإضافة رابط في الموقع فمباشرة أن يقوم العضو بإضافة رابط في الموقع ستضاف 30 نقطة إلى رصيدك سيظهر لك جميع الأعضاء المتسجلون من خلالك ووضعياتهم ( هل تحصلت على النقاط من خلالهم أم لا ) من خلال الضغط على زر الأعضاء المتسجلين من خلالك
                    </div>
                   </div>
                   <img src="{{ asset("uploads/Smiley face-rafiki.svg") }}" class="user-statics__tips__icon">
                   
            </div>


        </div> --}}
 
         <div class="frame">

             <div class="base-box">
                    
                    <div class="section-header"> رابط الإحالة  </div>
         
                    <div class="fd-column  p-relative add-link__item m-1 ml-0">
                        <li class="fa-light fa-clipboard add-link__item__icon" style="top:24px"></li>
                        <input class="add-link__item__input" type="text" name="SHORT_LINK_CODE" value="www.golden-links.com/type=refer?uid=015245sdf845dsd8f9gfs9g7" disabled >
                    </div>

                    <div class="section-header">
                        روابطك
                    </div>
        
                    <table class="top-links-table">
                        <thead>
                            <tr>
                                <th>اسم المستخدم</th>
                                <th> التاريخ </th>
                                <th> الحالة </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>user 0</td>
                                <td>20 / 10 / 2018</td>
                                <td> قيد الإنتظار </td>
                            </tr>
                            <tr>
                                <td>user 1</td>
                                <td>20 / 10 / 2018</td>
                                <td> نشاط </td>
                            </tr>
                            <tr>
                                <td>user 2</td>
                                <td>20 / 10 / 2018</td>
                                <td> قيد الإنتظار </td>
                            </tr>
                            <tr>
                                <td>user 3</td>
                                <td>20 / 10 / 2018</td>
                                <td> نشاط </td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
        
        
@endsection