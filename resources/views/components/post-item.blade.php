<article class="{{ $post->classes }} overflow-hidden rounded-lg shadow-lg bg-gray-700">
    
        <a href="{{ route('view', $post) }}">
            <div class="">
                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="block h-[10rem] sm:h-[14rem] w-full">
            </div>
        </a>
    
        <header class="flex items-center justify-between leading-tight p-2">
            <h1 class="text-lg text-white">
                <a class="no-underline hover:underline text-white" href="{{ route('view', $post) }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p class="text-white text-sm">
                {{$post->getFormattedDate()}}
            </p>
        </header>
    
        <footer class="flex items-center justify-between leading-none p-2">
            <a class="flex items-center no-underline hover:underline" href="{{ route('view', $post) }}">
                <img alt="Placeholder" class="block rounded-full w-[32px] h-[48px]" src="https://ui-avatars.com/api/?name=N+A&amp;color=FFFFFF&amp;background=111827">
                <p class="ml-2 text-sm text-white">
                    {{ $post->user->name }}
                </p>
            </a>
            <a class="flex items-center no-underline hover:underline" href="">
                @foreach ($post->categories as $category)
                <p class="bg-gray-400 px-1 rounded ml-2 text-sm text-white">
                    {{ $category->title }}
                </p>    
                @endforeach
            </a>
        </footer>
    
        <main class="flex items-center justify-between leading-none p-2">
            <a href="{{ route('view', $post) }}" class="flex items-center no-underline hover:underline">
                {{ $post->shortBody() }}
            </a>
        </main>

</article>