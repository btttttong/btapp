@extends('components.layout')

@section('title', 'outfit management')


@section('content')

<div> 
@foreach($outfits as $outfit)
    {{-- {{ $outfit }} --}}
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
          <div class="flex min-w-0 gap-x-4">
            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{$outfit->image_url}}" alt="">
            <div class="min-w-0 flex-auto">
              <p class="text-sm font-semibold leading-6 text-gray-900">{{$outfit->type}}</p>
              <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$outfit->id}}</p>
            </div>
          </div>
          <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
TODO:
Fix href
            <p class="text-sm leading-6 text-gray-900"><a href="">edit</a></p>
            <p class="text-sm leading-6 text-gray-900"><a href="">delete</a></p>
          </div>
        </li>
      </ul>
@endforeach



</div>
  
@endsection