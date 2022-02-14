@props(['active'=>false,'href'])
@php
    $classes="block text-left text-sm leading-6 px-3 hover:bg-blue-300 focus:bg-gray-300 hover:text-white focus:text-white";
if($active)
$classes.=" bg-blue-300 text-white";
@endphp
<a href="{{$href}}" {{$attributes->merge(["class"=>$classes])}} >{{$slot}}</a>