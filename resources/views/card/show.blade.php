@extends('components.layout')

@section('title', 'Card of the day 🔮')


@section('content')


<div class="min-h-screen bg-indigo-900 text-white">
  <div class="container mx-auto px-4">
    <h1 class="">{{$card->card_name}}</h1>
    <br>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <img src="{{$card->image_path }}" class="h-full w-full object-cover object-center">
        <h1 class="font-semibold h-full w-full object-cover object-center">{{$card->meaning}}</h1>
    </div>

  </div>
</div>

@endsection