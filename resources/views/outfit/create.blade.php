@extends('components.layout')

@section('title', 'outfit management | Create New Outfit')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold text-center my-6">Create New Outfit</h1>
    <form method="POST" action="{{ route('outfits.store') }}" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type</label>
            <input type="number" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="type" name="type" required>
        </div>
        <div class="mb-4">
            <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2">Image URL</label>
            <input type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="image_url" name="image_url" required>
        </div>
        <div class="mb-4">
            <label for="color_id" class="block text-gray-700 text-sm font-bold mb-2">Color ID</label>
            <input type="number" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="color_id" name="color_id" required>
        </div>
        <div class="mb-6">
            <label for="ocation_id" class="block text-gray-700 text-sm font-bold mb-2">Occasion ID</label>
            <input type="number" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="ocation_id" name="ocation_id" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit
        </button>
        <a href="/outfitmanagement" class="mt-4 block w-full text-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancel
        </a>
    </form>
</div>

@endsection
