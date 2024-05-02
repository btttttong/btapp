
@extends('components.layout')

@section('title', 'welcommme')

@section('content')

    <h1>Today's date is: {{ date('l') }} </h1>
    <p> {{ date('Y-m-d') }} </p>
    <p> color for today is: {{$outfit->top->color}}</p>



<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">This is your outfit for today</h2>
  
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="{{$outfit->top->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500"></h3>
            <p class="text-base font-semibold text-gray-900">Top</p>
          </div>
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="{{$outfit->bottom->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500"></h3>
            <p class="text-base font-semibold text-gray-900">Bottom</p>
          </div>
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="{{$outfit->shoe->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500"></h3>
            <p class="text-base font-semibold text-gray-900">Shoe</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
