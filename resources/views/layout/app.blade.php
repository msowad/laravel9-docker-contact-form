<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="ie=edge"
  >
  <title>{{ $title }}</title>
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >
  <link
    href="{{ asset('css/app.css') }}"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,regular,500,,600,700"
    rel="stylesheet"
  />
</head>

<body class="font-sans text-gray-800">
  <x-layout.header></x-layout.header>
  {{ $slot }}
  <footer></footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
