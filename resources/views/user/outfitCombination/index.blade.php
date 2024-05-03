
@extends('components.layout')

@section('title', 'Lucky charm 💅🏻')

@section('content')


<div class="bg-indigo-800 text-white rounded-md">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">

      {{-- <div class="container mx-auto px-4">
        <h1 class="text-xl font-bold mb-4">Select an Occasion</h1>
        <form id="occasionForm" action="{{ route('anyname') }}" method="POST">
            @csrf
            <input type="hidden" name="occasion_id" id="occasionId">
            @foreach ($occasions as $occasion)
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2" onclick="submitForm({{ $occasion->id }})">
                    {{ $occasion->event_name }}
                </button>
            @endforeach
        </form>
    </div> --}}

      <h2 class="text-2xl font-bold ">This is your outfit for today</h2>
      <h3>for  {{$groupedOutfits['Top']->event_name}} </h3>

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

{{-- <script>
  function submitForm(occasionId) {
      document.getElementById('occasionId').value = occasionId;
      document.getElementById('occasionForm').submit();
  }
  </script> --}}

@endsection
