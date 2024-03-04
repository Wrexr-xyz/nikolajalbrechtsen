<x-app-layout>
    <x-slot name="header">
        {{ __('Forside') }}
    </x-slot>
        {{-- Desktop --}}
    <div class="hidden sm:inline-flex w-full gap-4">
        <div class="w-[80%]">
            <main class="bg-gray-700 px-4 py-2 rounded-2xl">
                <h1 class="text-center text-3xl font-bold">
                    Forside
                </h1>
                <hr class="my-2">
                <p class="text-center">
                    Velkommen
                </p>
                <hr class="my-2">
            </main>
        </div>
        <x-sidebar>
            @section('sidebar-title')
            Om Mig                
            @endsection
            @section('sidebar-content')
            Tekst                
            @endsection
        </x-sidebar>
    </div>
    {{-- Mobile --}}
    <div class="block sm:hidden w-full gap-4">
        <div class="w-[100%]">
            <x-sidebar>
                @section('sidebar-title')
                Om Mig                    
                @endsection
                @section('sidebar-content')
                Tekst                    
                @endsection
            </x-sidebar>
            <br>
            <main class="bg-gray-700 px-4 py-2 rounded-2xl">
                <h1 class="text-center text-3xl font-bold">
                    Forside
                </h1>
                <hr class="my-2">
                <p class="text-center">
                    Velkommen
                </p>
                <hr class="my-2">
            </main>
        </div>
    </div>

</x-app-layout>
