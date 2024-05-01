
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? 'Hello!'}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">


<x-layout title="This is your outfit for today!!!">
    <h1>Today's date is: {{ date('l') }} </h1>
    <p> {{ date('Y-m-d') }} </p>
    <p> color for today is: {{$outfit->top->color}}</p>


<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">This is your outfit for today</h2>
  
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="{{$outfit->top->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              {{-- <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a> --}}
            </h3>
            <p class="text-base font-semibold text-gray-900">Top</p>
          </div>
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="{{$outfit->bottom->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              {{-- <a href="#">
                <span class="absolute inset-0"></span>
                Self-Improvement
              </a> --}}
            </h3>
            <p class="text-base font-semibold text-gray-900">Bottom</p>
          </div>
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="{{$outfit->shoe->image_url }}" class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              {{-- <a href="#">
                <span class="absolute inset-0"></span>
                Travel
              </a> --}}
            </h3>
            <p class="text-base font-semibold text-gray-900">Shoe</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</x-layout>

</body>
</html>
