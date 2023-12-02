@php
    use Illuminate\Support\Facades\Route;
@endphp
@include("layouts.header")
<div class="container">
@include("layouts.sidebar")
<main class="dashboard">
    @include("layouts.navbar")
 @yield("contant")
 <footer class="footer base-box"> جميع الحقوق محفوظة <?php echo date("Y") ?></footer>
</main>
</div>
@include("layouts.footer")