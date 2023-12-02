@extends("dashboard")

@push("PAGE_TITLE")
  {{  " أضافة رابط " }}
@endpush
    
@section("contant")


        @if (session() -> exists("error"))    
        <div class="alert input_error"> 
          {{ session("error") }}
        </div>
        @endif

        @if (session() -> exists("status"))    
        <div class="alert bg-info"> 
          {{ session("status") }}
        </div>
        @endif
<div class="frame">

    <div class="base-box">
        
        <div class="section-header">
            أضافة رابط
        </div>
        <form class="fd-column f-width add-link" action="{{ route("add-new-link") }}" method="POST">
            @csrf
                <div class="fd-column fd-width p-relative add-link__item ">
                    <li class="fa-light fa-clipboard add-link__item__icon"></li>
                    <span class="add-link__item__title"> رابط الكود</span>
                    @php
                        $SHORT_LINK_CODE = rand(111111 , 999999);
                        @endphp
                    <input type="hidden" name="SHORT_LINK_CODE" value="{{ $SHORT_LINK_CODE }}">
                    <input class="add-link__item__input  @error("SHORT_LINK_CODE") input--error @enderror" type="text" value="http://127.0.0.1:8000/code/{{ $SHORT_LINK_CODE }}" disabled>
                    @error("SHORT_LINK_CODE")
                    <div class="input_error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="fd-column fd-width p-relative add-link__item ">
                    <li class="fa-light fa-clipboard add-link__item__icon"></li>
                    <span class="add-link__item__title"> الرابط المختصر </span>
                    <input class="add-link__item__input  @error("SHORT_LINK") input--error @enderror" type="text" name="SHORT_LINK" {{ old("SHORT_LINK") }} placeholder="الرابط المختصر المتضمن علي رابط الكود" >
                    @error("SHORT_LINK")
                    <div class="input_error">
                        {{ $message }}
                    </div>
                    @enderror
                    @if (session() -> exists("SHORT_LINK"))    
                    <div class="input_error"> 
                        {{ session("SHORT_LINK") }}
                    </div>
                    @endif
                </div>
                
                <div class="fd-column fd-width p-relative add-link__item ">
                    <li class="fa-light fa-clipboard add-link__item__icon"></li>
                    <span class="add-link__item__title"> رابط تغير المصدر </span>
                    <input class="add-link__item__input  @error("VISIT_SOURCE_LINK") input--error @enderror" type="text" name="VISIT_SOURCE_LINK" {{ old("VISIT_SOURCE_LINK") }} placeholder="رابط تغيير المصدر المتضمن الرابط المختصر" >
                    @error("VISIT_SOURCE_LINK")
                    <div class="input_error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="fd-row fd-width ">
                    
                    <div class="fd-column  p-relative add-link__item m-1 mr-0">
                        <li class="fa-light fa-clipboard add-link__item__icon"></li>
                        <span class="add-link__item__title"> عدد النقاط </span>
                        <input class="add-link__item__input  @error("LINK_POINTS") input--error @enderror" type="number" name="LINK_POINTS" {{ old("LINK_POINTS") }} placeholder="عدد نقاط الرابط ( لاتتعدى عدد نقاطك المكتسبة )" >
                        @error("LINK_POINTS")
                        <div class="input_error">
                            {{ $message }}
                        </div>
                        @enderror
                        @if (session('LINK_POINTS'))
                        <div class="input_error">
                            {{ session("LINK_POINTS") }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="fd-column  p-relative add-link__item m-1 ml-0">
                        <li class="fa-light fa-clipboard add-link__item__icon"></li>
                        <span class="add-link__item__title "> إسم مستعار للرابط </span>
                        <input class="add-link__item__input  @error("LINK_ALIAS") input--error @enderror" type="text" name="LINK_ALIAS" {{ old("LINK_ALIAS") }} placeholder=" إضافة إسم مستعار للتفرقة بين الراوبط ( إختياري )" >
                        @error("LINK_ALIAS")
                        <div class="input_error">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                </div>
                
                
                
                <div class="fd-row ">
                    
                    <button class="add-link__btn bg-success" type="submit" name="ADD_LINK" >
                        أضافة
                    </button>
                    
                    <button class="add-link__btn bg-secondary" type="button" name="HELP" >
                        مساعدة
                    </button>
                    
                </div>
            </form>
        </div>
    </div>

    
        @endsection