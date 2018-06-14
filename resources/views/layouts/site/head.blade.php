<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="{{ config('app.author') }}">
<meta name="keywords" content="{{ config('app.keywords') }}">
<meta name="description" content="{{ isset($description) ? $description : config('app.description') }}"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta property="og:type" name="og:type" content="website"/>
<meta property="og:site_name" content="{{ config('app.name') }}"/>
<meta property="og:url" name="og:url" content="{{ request()->url() }}"/>
<meta property="og:caption" name="og:caption" content="{{ config('app.url') }}"/>
<meta property="fb:app_id" name="fb:app_id" content="{{ config('app.facebook_id') }}"/>
<meta property="og:title" name="og:title" content="{{ isset($title) ? $title : config('app.title') }}">
<meta property="og:description" name="og:description" content="{{ isset($description) ? $description : config('app.description') }}">
<meta property="og:image" name="og:image" content="{{ config('app.url') }}{{ isset($image) ? $image : '/images/logo.png' }}">

<title>GiveMoi @yield('title')</title>

<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/material-kit.min.css?v=2.0.3">
<link rel="stylesheet" href="/assets/css/style.css">
<!-- Sweet Alert 2 plugin -->
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.css">
<!-- Notify Alert plugin -->
<link rel="stylesheet" href="/assets/css/plugins/notify.css">
<link rel="stylesheet" href="/assets/css/plugins/toastr.min.css">
@section('style')

@show