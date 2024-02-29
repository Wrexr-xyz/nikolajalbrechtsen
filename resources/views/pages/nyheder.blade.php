<x-app-layout>
    <x-slot name="header">
        {{ __('Nyheder') }}
    </x-slot>
<div class="grid sm:grid-cols-3 grid:cols-1 gap-4">
    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach
</div>
    {{ $posts->links() }}
    
</x-app-layout>

