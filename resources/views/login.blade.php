@extends("index")

@push("PAGE_TITLE")
  {{  " تسجيل دخول " }}
@endpush
@section("contant")
<main class="users-forms form">

  @if (session() -> exists("status"))    
  <div class="alert bg-success"> 
    {{ session("status") }}
  </div>
  @endif

  @error("email")
      {{ $message }}
  @enderror
  @error("password")
      {{ $message }}
  @enderror

   <form class="login-form" action="" method="POST" >
       @csrf
       {{-- <div class="form__logo">
        <object data="{{ asset("uploads/logo4.svg"); }}" width="300" height="300"> </object>
       </div> --}}
       <div class="form__header"> سجل الدخول لحسابك </div>

       <div class="form__input-frame fd-column">
         <input class="form__input-frame__input " id="Login-username" type="text" name="email" >
         {{-- <div class="form__input-frame__input-overlay"></div> --}}
         <label for="Login-username" class="form__input-frame__label"> البريد الإلكتروني </label>
         <span class="@error("username") form__input-frame__error  @enderror"> @error("username") {{ $message }} @enderror </span>
        </div>
        
        <div class="form__input-frame fd-column">
          <i class="togglePassword fa-solid fa-eye" data-check="true"></i>
          <input class="form__input-frame__input " id="Login-password" type="password" name="password" autocomplete="off" >
          {{-- <div class="form__input-frame__input-overlay"></div> --}}
         <label for="Login-password" class="form__input-frame__label"> كلمة المرور </label>
         <span class="@error("username") form__input-frame__error  @enderror"> @error("username") {{ $message }} @enderror </span>
       </div>

       <div class="form__adction-btns">
           <div class="form-check">
             <input type="checkbox" name="remeber_me" >
             <span> تذكرني </span>
           </div>
           <a href="#" class="forget-passoword" > نسيت كلمة السر ؟ </a>
       </div>

       <button type="submit" name="ok" class="form__submit-btn">
          دخول
       </button>

       <div class="form__footer">
        ليس لديك حساب ؟
           <a href="register" class="have-account"> إنشاء حساب  </a>
       </div>

   </form> 
</main>
@endsection