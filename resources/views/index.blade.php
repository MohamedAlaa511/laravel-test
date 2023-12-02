@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Request;
@endphp
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @stack("PAGE_TITLE") </title>
    <link rel="stylesheet" href="{{ asset("css/index.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/main.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/normalize.css") }}" />


    <!-- <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d"
    > -->

     <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
      >
 
</head>

<body>
    
<div class="container">
@yield("contant")
</div>
<?php ?>

    <script src="{{ asset("js/jquery-3.6.1.js") }}"></script>
    <script src="{{ asset("js/index.js") }}"></script>
</body>

</html>