<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>libang</title>
   <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('layout._header')
  @yield('content')

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
