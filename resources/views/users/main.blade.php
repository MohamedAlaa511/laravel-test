@extends("dashboard")

@push("PAGE_TITLE")
  {{  "لوحة التحكم" }}
@endpush
    
@section("contant")
@php
   //dd($links_data)
//$datas=  ksort($links_data);
@endphp

    <div class="user-statics frame">
        <div class="user-statics__box base-box">
            <i class="fa-light fa-file-user user-statics__box__icon"></i>
            <span class="user-statics__box__title"> مستوى الحساب </span>
            <span class="user-statics__box__number">جديد</span>
        </div>
        
        <div class="user-statics__box base-box">
            <i class="fa-light fa-treasure-chest user-statics__box__icon"></i>
            <span class="user-statics__box__title"> نقاطك </span>
            <span class="user-statics__box__number">{{ $points }}</span>
        </div>

        <div class="user-statics__box base-box">
            <i class="fa-light fa-treasure-chest user-statics__box__icon"></i>
            <span class="user-statics__box__title"> زياراتك </span>
            <span class="user-statics__box__number">{{ $user_visits }}</span>
        </div>

        <div class="user-statics__box base-box">
            <i class="fa-light fa-link user-statics__box__icon"></i>
            <span class="user-statics__box__title"> روابطك </span>
            <span class="user-statics__box__number">{{ $links }}</span>
        </div>

        <div class="user-statics__box base-box">
            <i class="fa-light fa-bullseye-pointer user-statics__box__icon"></i>
            <span class="user-statics__box__title">زيارات الروابط</span>
            <span class="user-statics__box__number">{{ $user_links_visits }}</span>
        </div>

        <div class="user-statics__box base-box">
            <i class="fa-light fa-users-viewfinder user-statics__box__icon"></i>
            <span class="user-statics__box__title">مشاهدة الروابط</span>
            <span class="user-statics__box__number">{{ $views }}</span>
        </div>

        
    </div>

    <div class="frame table-section">
        <div class="base-box">

            <div class="section-header">
                روابطك
            </div>
            
                <table class="top-links-table">
                    <thead>
                        <tr>
                            <th>اسم الرابط</th>
                            <th> الرابط المختصر </th>
                            <th> رابط المصدر </th>
                            <th> النقاط </th>
                        <th> عدد الزوار </th>
                        <th> الظهور </th>
                        <th> الحالة </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($links_data as $link )
                        
                    <tr>
                        <td>{{ $link-> name  }}</td>
                        <td>{{ $link-> short_link   }}</td>
                        <td>{{ $link-> source  }}</td>
                        <td>{{ $link-> points }}</td>
                        <td>{{ $link-> visits }}</td>
                        <td>{{ $link-> views  }}</td>
                        <td class="fd-column"><span class="status-{{ strtolower($link->status) }}">{{ $link-> status  }}</span></td>
                    </tr>
                    @empty
                        
                    <tr>
                        <td style="text-align: center" colspan="6">لم يتم اضافة اي رابط </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection