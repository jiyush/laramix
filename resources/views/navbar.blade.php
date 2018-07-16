<!DOCTYPE html>
<html>
<head>
	<title>Testing Laravel Mix</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">@lang('message.logo')</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">@lang('message.home') </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">@lang('message.link')</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Language
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/laramix/public/test/en">English</a>
          <a class="dropdown-item" href="http://localhost/laramix/public/test/fr">French</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('message.search')</button>
    </form>
  </div>
</nav>
<center>
	<button onclick="return laramix()" class="btn btn-primary center-block" style="margin-top: 200px;">@lang('message.click')</button>
  
</center>
<!-- <script type="text/javascript" src="./js/jquery.js"></script> -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/manifest.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>

</body>
</html>