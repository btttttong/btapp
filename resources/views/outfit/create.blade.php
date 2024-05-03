@extends('components.layout')

@section('title', 'outfit management | Create New Outfit')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold text-center my-6">Create New Outfit</h1>
    <form method="POST" action="{{ route('outfits.store') }}" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label for="color_id" class="block text-sm font-medium text-gray-700">Color</label>
            <select id="color_id" name="color_id" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">Select a color</option>
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="ocation_id" class="block text-sm font-medium text-gray-700">Occasion</label>
            <select id="ocation_id" name="ocation_id" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">Select an occasion</option>
                @foreach($occasions as $occasion)
                    <option value="{{ $occasion->id }}">{{ $occasion->event_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <select id="type" name="type" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="">Select an type</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->category_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="image_url" class="block text-sm font-medium text-gray-700">Image URL</label>
            <input type="text" id="image_url" name="image_url" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="flex items-center justify-between gap-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            <a href="/outfitmanagement" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
        </div>
    </form>
</div>
@endsection
