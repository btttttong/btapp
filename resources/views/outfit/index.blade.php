@extends('components.layout')

@section('title', 'Outfit Management')

@section('content')
<div x-data="{ 
    confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            this.$refs['deleteForm' + id].submit();
        }
    }
}"> <!-- Alpine.js component with confirmDelete method -->
    @foreach($outfits as $outfit)
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
                <p class="text-sm leading-6 text-gray-900"><a href="{{ url('outfitmanagement/edit/' . $outfit->id ) }}">edit</a></p>
                <form x-ref="deleteForm{{$outfit->id}}" action="{{ url('outfitmanagement/delete/' . $outfit->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="#" x-on:click.prevent="confirmDelete({{ $outfit->id }})">
                    delete
                </a>
            </div>
        </li>
    </ul>
    @endforeach
</div>  
@endsection
