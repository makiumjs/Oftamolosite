<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- google font --}}
    
</head>
<body>
<x-nav></x-nav>

    <div class="min-vh-100">
        {{ $slot }}

    </div>


<x-footer></x-footer>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>