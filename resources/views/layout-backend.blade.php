@props(['title' => 'Default Title', 'icon' => 'storage/logos/glow_rrlc_logo.png']) 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{ asset($icon) }}" type="image/jpeg">
    <title>{{$title ?? 'Default Website'}}</title>
</head>
<body class="bg-gray-100">
    <x-header-backend />
    <main class="container mx-auto pt-5">
        @if(session('success'))
            <x-alert type="success" message="{{session('success')}}" />
        @endif
        @if(session('error'))
            <x-alert type="error" message="{{session('error')}}" />
        @endif
        {{$slot}} 
      
       
        <x-footer-backend />
       
     
    </main>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> 
    <script src="{{asset('/js/script.js')}}"></script>
</body>
</html>