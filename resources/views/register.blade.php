@extends("index")

@push("PAGE_TITLE")
  {{  " إنشاء حساب  " }}
@endpush
    
@section("contant")
<main class="users-forms form">


   


   <form class="login-form" action="register/add_new_user" method="POST" >
       @csrf
       {{-- <div class="form__logo">
        <object data="{{ asset("uploads/logo4.svg"); }}" width="300" height="300"> </object>
       </div> --}}
       <div class="form__header">  إنشاء حساب  </div>

       <div class="form__input-frame fd-column">
         <input class="form__input-frame__input @error("username") input--error @enderror "  type="text" name="username" value="{{ old("username") }}">
         <label  class="form__input-frame__label"> اسم المستخدم </label>
         <span class="@error("username") form__input-frame__error  @enderror"> @error("username") {{ $message }} @enderror </span>
        </div>
        
        <div class="form__input-frame fd-column">
          <input class="form__input-frame__input  @error("email") input--error @enderror " type="email" name="email" value="{{ old("email") }}">
         <label class="form__input-frame__label"> البريد الإلكتروني </label>
         <span class="@error("email") form__input-frame__error  @enderror"> @error("email") {{ $message }} @enderror </span>
        </div>
        
        <div class="form__input-frame fd-column">
          <i class="togglePassword fa-solid fa-eye" data-check="true"></i>
          <input class="form__input-frame__input  @error("password") input--error @enderror "  type="password" id="register_password" name="password" value="{{ old("password") }}" >
         <label  class="form__input-frame__label"> كلمة المرور </label>
          <span class="@error("password") form__input-frame__error  @enderror"> @error("password") {{ $message }} @enderror </span>
          <div class="password_rules">
            <div class="password_rules__header">قواعد كلة المرور : </div>
            <ul class="password_rules__content">
              <li id="min_rule">
                 <i class="fa-light fa-circle"></i>
                 <span class="password_rules__content_rule"> يجب ان تكون علي الاقل من 8 مقاطع </span>
              </li>

              <li id="lang_rule">
                 <i class="fa-light fa-circle"></i>
                 <span class="password_rules__content_rule"> يجب أن تكون جميع الاحرف و الارقام بالغة الإنجليزية </span>
              </li>

              <li id="spaces_rule">
                 <i class="fa-light fa-circle"></i>
                 <span class="password_rules__content_rule"> يجب الا تحتوي كلمة المرور علي أي مسافات </span>
              </li>

              <li id="capital_rule">
                 <i class="fa-light fa-circle"></i>
                 <span class="password_rules__content_rule"> يجب ان تحتوي  علي حرف  من الأحرف الكبيرة علي الأقل  [ A - Z ]</span>
                </li>
                
                <li id="small_alpha_rule">
                  <i class="fa-light fa-circle"></i>
                  <span class="password_rules__content_rule"> يجب ان تحتو  علي حرف من الأحرف الصغيرة علي الأقل  [ a - z ]</span>
              </li>

                <li id="num_rule">
                  <i class="fa-light fa-circle"></i>
                  <span class="password_rules__content_rule"> يجب أن تحتوي  علي الأقل علي رقم من [ 0 - 9 ] </span>
              </li>

                <li id="symbols_rule">
                  <i class="fa-light fa-circle"></i>
                  <span class="password_rules__content_rule"> يجب أن تحتوي  علي الأقل علي علامة من [ !@#$%^&*_-+= ] </span>
              </li>

            </ul>
          </div>
        </div>

        <div class="form__input-frame fd-column">
          <i class="togglePassword fa-solid fa-eye" data-check="true"></i>
          <input class="form__input-frame__input  @error("password_confirmation") input--error @enderror "  type="password" name="password_confirmation" value="{{ old("password_confirmation") }}" autocomplete="off" >
         <label  class="form__input-frame__label"> تأكيد كلمة المرور </label>
          <span class="@error("password_confirmation") form__input-frame__error  @enderror"> @error("password_confirmation") {{ $message }} @enderror </span>
       </div>

       <div class="form__adction-btns">
           <div class="form-check">
             <input type="checkbox" name="terms_agree" @if (old("terms_agree"))
               checked
             @endif  >
             <a href="#" class="form__adction-btns__trems" > لقد قرأت ووافقت على شروط الإستخدام </a>
             <span class="@error("terms_agree") form__input-frame__error  @enderror"> @error("terms_agree") {{ $message }} @enderror </span>
           </div>

       </div>

       <button type="submit" name="ok" class="form__submit-btn" name="register">
          دخول
       </button>

       <div class="form__footer">
        ليس لديك حساب ؟
           <a href="login" class="have-account"> إنشاء حساب  </a>
       </div>

   </form> 
</main>
@endsection