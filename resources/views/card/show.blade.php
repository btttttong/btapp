@extends('components.layout')

@section('title', 'Card of the day 🔮')


@section('content')

    <section>
        <div class="wrap mx-auto p-4 pb-8 md:p-20 md:flex gap-8 items-center justify-between bg-indigo-900 text-white">

            <div class="mb-6 md:mb-0 md:w-1/2">
                <div class="aspect-w-1 aspect-h-1">

                    <img class="object-cover rounded-4" loading="lazy" sizes="(max-width: 1023px) 50vw, 100vw"
                        src="{{ $card->image_path }}"
                        
                        width="500" width="500">

                </div>
            </div>

            <div class="md:w-1/2 md:max-w-xl">
                <h2 class="text-3.5xl lg:text-5xl leading-snug mb-4">{{ $card->card_name }}</h2>
                <p class="md:text-lg lg:text-xl">

                <p class="md:text-lg lg:text-xl mt-7">
                  {{ $card->meaning }}
                </p>
            </div>

        </div>
    </section>

@endsection
