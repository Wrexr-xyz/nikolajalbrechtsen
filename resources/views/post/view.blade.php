<x-app-layout>
    @section('title')
        {{ $post->title }}
    @endsection
    <div class="hidden sm:inline-flex w-full gap-4 mb-10">
        <div class="w-[80%] bg-gray-700 px-4 py-2 rounded-2xl">
            <main class="grid place-items-center">
                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="aspect-auto object-contain rounded-2xl" src="{{ $post->getThumbnail() }}">
            </main>
            <main class="">
                <hr class="border-2 border-white mt-4">
                <h1 class="text-center text-3xl font-bold">
                    {{ $post->title }}
                </h1>
                <hr class="border-2 border-white my-2">
                <p class="text-center">
                    {{ $post->body }}
                </p>
            </main>
        </div>
        <aside class="w-full sm:w-[20%] sm:float-right bg-gray-700 p-4 rounded-2xl">
            <hr class="my-2">
            <div class="">
                <p class="">
                    {{ $post->user->name }}
                </p>
                <hr class="my-2">
                <p class="">
                    {{$post->getFormattedDate()}}
                </p>
            </div>
            <hr class="my-2">
            <p class="text-sm">
                Kategorier:
            </p>
            <div class="space-y-2 grid">
                @foreach ($post->categories as $category)
                    <a href="" class="bg-gray-500 w-full px-1 rounded text-sm text-white hover:bg-gray-600">
                        {{ $category->title }}
                    </a>
                @endforeach 
            </div>
            <hr class="my-2">
        </aside>
    </div>

    <div class="block sm:hidden w-full gap-4 mb-10">
        <aside class="w-full sm:w-[20%] sm:float-right bg-gray-700 p-4 rounded-2xl">
            <hr class="my-2">
            <div class="">
               
            </div>
            <div class="">
                <p class="">
                    {{ $post->user->name }}
                </p>
                <p class="">
                    {{$post->getFormattedDate()}}
                </p>
            </div>
            <hr class="my-2">
            <p class="text-sm">
                Kategorier:
            </p>
            <div class="space-y-2">
                @foreach ($post->categories as $category)
                <p class="bg-gray-500 w-full px-1 rounded text-sm text-white">
                    {{ $category->title }}
                </p>    
                @endforeach
            </div>
            <hr class="my-2">
        </aside>
        <br>
        <div class="w-[100%] bg-gray-700 px-4 py-2 rounded-2xl">
            <main class="">
                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="block h-[10rem] sm:h-[15rem] w-full" src="/storage/{{ $post->getThumbnail() }}">
            </main>
            <main class="">
                <h1 class="text-center text-3xl font-bold">
                    {{ $post->title }}
                </h1>
                <hr class="my-2">
                <p class="text-center">
                    {{ $post->body }}
                </p>
            </main>
        </div>
        
    </div>
</x-app-layout>