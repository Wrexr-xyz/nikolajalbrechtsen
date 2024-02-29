<x-app-layout>
    <x-slot name="header">
        {{ __('Kamera') }}
    </x-slot>
    <iframe src="https://demo.flashphoner.com:8888/embed_player?urlServer=&streamName=rtsp%3A%2F%2Fnikolaj6470%3ANmfmmkm19972503%40nikolajalbrechtsen.com%3A554%2Fstream2&mediaProviders=WebRTC,MSE?autoplay=1&muted=1"
    allow="autoplay"
    allowfullscreen='allowfullscreen'
    frameborder="0" 
    scrolling='no'
    class="w-[90%] h-48 sm:h-[40rem] md:h-[47rem] rounded-2xl">
    </iframe>
        {{-- <div class="grid place-items-center bg-gray-700 w-full text-center py-2 rounded-2xl">
            <iframe
                src='https://demo.flashphoner.com:8888/embed_player?urlServer=&streamName=rtsp%3A%2F%2Fnikolaj6470%3ANmfmmkm19972503%40nikolajalbrechtsen.com%3A554%2Fstream2&mediaProviders=WebRTC,MSE?autoplay=1&muted=1'
                allow="autoplay"
                class="w-[100%] h-48 sm:h-[45rem] md:h-[50rem]"
                frameborder='0'
                scrolling='no'
                allowfullscreen='allowfullscreen'>
            </iframe>
        </div> --}}
</x-app-layout>