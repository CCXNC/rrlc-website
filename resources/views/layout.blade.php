@props(['title' => 'Default Title', 'icon' => 'storage/logos/rrlc_logo.png']) 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{ asset($icon) }}" type="image/jpeg">
    <title>{{$title ?? 'Default Website'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    <main class="container mx-auto">
        {{$slot}}

        @if(!request()->is('contactus'))
            <x-footer />
        @endif
     
    </main>

    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>