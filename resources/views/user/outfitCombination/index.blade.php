
@extends('components.layout')

@section('title', 'Lucky charm 💅🏻')

@section('content')


<div class="bg-indigo-800 text-white rounded-md">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <h2 class="text-2xl font-bold ">This is your outfit for today</h2>

      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        @foreach(['Top', 'Bottom', 'Shoe'] as $type)
          @if($groupedOutfits->has($type))
          <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="{{ $groupedOutfits[$type]->image_url }}" class="h-full w-full object-cover object-center">
              </div>
              <h3 class="mt-6 text-sm ">{{ $groupedOutfits[$type]->color_name }}</h3>
              <p class="text-base font-semibold">{{ $type }}</p>
          </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</div>

{{$groupedOutfits}}

@endsection
