<x-base>
    {{--building layout by template inheritance@extends('layouts.base')
@section('name','Muskan')--}}
<x-slot name="name">Muskan</x-slot>
{{--@section('text')--}}
<x-slot name="text">
<h1 class="text-4xl font-bold">Home</h1>
<p class="mt-4 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsum laudantium, sequi repudiandae laboriosam labore
    quaerat eaque, rerum modi adipisci reiciendis consectetur. Eius, dignissimos aut.</p>
</x-slot>
{{--@endsection--}}
</x-base>