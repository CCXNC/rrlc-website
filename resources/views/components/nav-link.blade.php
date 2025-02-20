@props([
    'url' => '/',
    'active' => false, 
    'icon' => null,
    'mobile' => null
    ])

@if($mobile)
    <a href="{{$url}}" class="font-bold block px-4 py-2.5 hover:bg-green-800">
    @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
    </a>

@else
    <a href="{{$url}}" class="font-bold hover:underline py-2">
    @if($icon)
        <i class="fa fa-{{$icon}} mr-1"></i>
    @endif
    {{$slot}}
    </a>
@endif