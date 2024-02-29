<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" className="dark">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
	<title>Nikolaj Albrechtsen</title>
	<script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  <script src="main.js"></script>
  <script>
    tailwind.config = {
        darkMode: 'class',
    }
  </script>
</head>
@php
$sidenav1 = "bg-gray-800 py-2 text-sm text-gray-700 dark:text-gray-100 rounded";
$sidenav2 = "py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded";
$dropdownnav1 = "block px-4 py-2 text-sm text-gray-300 bg-purple-600 hover:text-white";
$dropdownnav2 = "block px-4 py-2 text-sm text-gray-300 hover:bg-purple-600 hover:text-white";
@endphp
<body class="dark">
<div>
  <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
    <div class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">
      <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

      <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
          <div class="flex items-center">
            <a href="/" class="text-gray-800 text-center dark:text-white text-2xl font-semibold">{{ \App\Models\TextWidget::getTitle('header') }} <br><span class="text-lg -pt-2">{!! \App\Models\TextWidget::getContent('header') !!}</span></a>
          </div>
        </div>
        <nav class="flex space-y-2 flex-col mt-10 px-4 text-center">
            <a href="/" class="{{ (request()->is('/')) ? 'bg-gray-800 py-2 text-sm text-gray-700 dark:text-gray-100 rounded' : 'w-full py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded' }}">
              Forside
            </a>
            <a href="/nyheder" class="{{ (request()->is('nyheder')) ? 'bg-gray-800 py-2 text-sm text-gray-700 dark:text-gray-100 rounded' : 'w-full py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded' }}">
              Nyheder
            </a>
            <a href="/stop-ur" class="{{ (request()->is('stopur')) ? 'bg-gray-800 py-2 text-sm text-gray-700 dark:text-gray-100 rounded' : 'w-full py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded' }}">
              Stop Ur
            </a>
            <!-- DropDown -->
          <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen" class="w-full py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">
              <span class="inline-flex items-center space-x-1.5 text-center">
                <span>iframe's</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </span>
              </span>
            </button>
            <div class="flex-1 mt-2 w-full rounded-md overflow-hidden" x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="dropdownOpen = false">
              <a href="/soundcloud" class="block text-sm px-4 py-2 text-gray-400 hover:bg-gray-600">Soundcloud<google/a>
              <a href="/wwe" class="block text-sm px-4 py-2 text-gray-400 hover:bg-gray-600">WWE</a>
              <a href="/kamera" class="block text-sm px-4 py-2 text-gray-400 hover:bg-gray-600">Kamera</a>
              <a href="/google" class="block text-sm px-4 py-2 text-gray-400 hover:bg-gray-600">Google</a>
            </div>
          </div>
          <!-- DropDown -->

          <!-- DropDown -->
          <div x-data="{ dropdownOpen: false }" class="relative">
              <button @click="dropdownOpen = ! dropdownOpen" class="w-full py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">
                <span class="inline-flex items-center space-x-1.5 text-center">
                  <span>Test</span>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </span>
              </button>

              <div class="flex-1 mt-2 w-full rounded-md overflow-hidden" x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="dropdownOpen = false">
                <a href="/test/test-1" class="block text-sm px-4 py-2 text-gray-400 hover:bg-gray-600">Test 1</a>
              </div>
            </div>
          <!-- DropDown -->
        </nav>
      </div>

      <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center px-6 py-2 bg-gray-700">
          <div class="flex items-center space-x-4 lg:space-x-0">
            <button @click="sidebarOpen = true" class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <div>
              <h1 class="text-2xl font-medium text-gray-800 dark:text-white capitalize">{{-- {{ $name = Route::currentRouteName(); }} --}} @yield('title')</h1>
            </div>
          </div>

          <div class="flex items-center space-x-2">
                <div class="relative">
                  <div class="flex items-center space-x-2 relative focus:outline-none">
                    <a href="/login" class="bg-gray-500 px-2 py-1 rounded-md text-gray-700 dark:text-gray-300 text-sm hidden sm:block">Log Ind</a>
                    <a href="/register" class="bg-gray-500 px-2 py-1 rounded-md text-gray-700 dark:text-gray-300 text-sm hidden sm:block">Registrer</a>
                  </div>
                </div>

          </div>
        </header>
        <main class="flex overflow-x-hidden overflow-y-auto">
            <div class="container mx-auto px-6 py-8">
                <div class="grid place-items-center text-gray-500 dark:text-gray-300 text-xl"> 
                    {{ $slot }}
                </div>
            </div>
        </main>