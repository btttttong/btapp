<section class="bg-white p-6 rounded shadow-md">
    <form method="post" action="{{ route('outfits.update', ['id' => $outfit->id] ) }}" class="space-y-6">
        @csrf

        <div>
            {{-- {{$outfit}} --}}


            {{-- <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
            <input type="text" id="color" name="color" value="{{ old('color', $outfit->color_id) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required autofocus autocomplete="color"> --}}
            <label for="color_id" class="block text-sm font-medium text-gray-700">Color</label>
            <select id="color_id" name="color_id" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                {{-- <option value="">Select a color</option> --}}
                @foreach($colors as $color)
                    <option value="{{ $color->id }}" {{ old('color_id', $outfit->color_id) == $color->id ? 'selected' : '' }}>
                        {{ $color->name }}
                    </option>
                @endforeach
            </select>

            <p class="mt-4 mb-2 text-sm font-medium text-gray-700">Please select type:</p>
            <div class="space-y-2">
                <div class="flex items-center">
                    <input type="radio" id="top" name="type" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if($outfit->type_id == '1') checked  @endif>
                    <label for="top" class="ml-3 block text-sm font-medium text-gray-700">Top</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="bottom" name="type" value="2" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if($outfit->type_id == '2') checked  @endif>
                    <label for="bottom" class="ml-3 block text-sm font-medium text-gray-700">Bottom</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="shoe" name="type" value="3" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" @if($outfit->type_id == '3') checked  @endif>
                    <label for="shoe" class="ml-3 block text-sm font-medium text-gray-700">Shoe</label>
                </div>
            </div>

            {{-- <label for="ocation_id" class="block text-sm font-medium text-gray-700 mt-4">Occasion</label>
            <input type="text" id="ocation_id" name="ocation_id" value="{{ old('ocassion', $outfit->ocation_id) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required autocomplete="1"> --}}

            <label for="ocation_id" class="block text-sm font-medium text-gray-700">Occasion</label>
            <select id="ocation_id" name="ocation_id" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                {{-- <option value="">Select an occasion</option> --}}
                @foreach($occasions as $occasion)
                    <option value="{{ $occasion->id }}" {{ old('ocation_id', $outfit->ocation_id) == $occasion->id ? 'selected' : '' }}>
                        {{ $occasion->event_name }}
                    </option>
                @endforeach
            </select>

            <label for="image_url" class="block text-sm font-medium text-gray-700 mt-4">Image</label>
            <input type="text" id="image_url" name="image_url" value="{{ old('image_url', $outfit->image_url) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required autocomplete="image_url">
        </div>

        <div class="flex items-center justify-start gap-4 mt-6">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Save</button>
            <a href="/outfitmanagement" class="px-4 py-2 bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-700">Cancel</a>
        </div>
    </form>
</section>
