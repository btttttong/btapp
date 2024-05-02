<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('outfits.update', ['id' => $outfit->id] ) }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="color" :value="__('Color')" />
            <x-text-input id="color" name="color" type="text" class="mt-1 block w-full" :value="old('color', $outfit->color)" required autofocus autocomplete="color" />
            
            <br>  

            <p>Please select type:</p>
            <input type="radio" id="top" name="type" value="Top" @if($outfit->type == 'Top') checked  @endif>
            <label for="top">top</label><br>
            <input type="radio" id="bottom" name="type" value="Bottom" @if($outfit->type == 'Bottom') checked  @endif>
            <label for="bottom">bottom</label><br>
            <input type="radio" id="shoe" name="type" value="Shoe" @if($outfit->type == 'Shoe') checked  @endif>
            <label for="show">shoe</label>

            <br>  <br> 

            <x-input-label for="ocation_id" :value="__('Occasion')" />
            <x-text-input id="ocation_id" name="ocation_id" type="text" class="mt-1 block w-full" :value="old('ocassion', $outfit->ocation_id)" required autofocus autocomplete="1" />

            <x-input-label for="image_url" :value="__('Image')" />
            <x-text-input id="image_url" name="image_url" type="text" class="mt-1 block w-full" :value="old('image_url', $outfit->image_url)" required autofocus autocomplete="image_url" />
    
    

            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
