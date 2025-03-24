@props([
    'url' => '/', 
    'icon' => null,
    'bgClass' => 'bg-white',
    'hoverClass' => 'hover:bg-green-800 hover:text-white',
    'textClass' => 'text-green-700 text-sm font-bold border-2 border-green-700',
    'block' => false
])

<a href="{{$url}}" class="{{$bgClass}} {{$textClass}} {{$hoverClass}} px-4 py-2 rounded hover:shadow-md transition duration-300 {{$block ? 'block' : ''}}">
   @if($icon)
    <i class="fa fa-{{$icon}} mr-1"></i>
   @endif
   {{$slot}}
</a>
