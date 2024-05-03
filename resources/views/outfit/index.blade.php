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
    <div class="grid grid-cols-5 gap-3"> <!-- Grid container with 3 columns -->
        @foreach ($outfits as $outfit)
            <div class="border rounded-lg p-4 flex flex-col justify-between"> <!-- Grid item -->
                <div>
                    <img class="h-20 w-20 rounded-full mx-auto" src="{{ $outfit->image_url }}" alt="">
                    <div class="text-center mt-3">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $outfit->type }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $outfit->id }}</p>
                    </div>
                </div>
                <div class="mt-4 flex justify-center gap-2">
                    <a href="{{ url('outfitmanagement/edit/' . $outfit->id) }}" class="text-blue-500 hover:text-blue-700">edit</a>
                    <form x-ref="deleteForm{{ $outfit->id }}"
                        action="{{ url('outfitmanagement/delete/' . $outfit->id) }}" method="POST"
                        style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="#" x-on:click.prevent="confirmDelete({{ $outfit->id }})" class="text-red-500 hover:text-red-700">
                        delete
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $outfits->links() }}
    </div>

</div>
@endsection
