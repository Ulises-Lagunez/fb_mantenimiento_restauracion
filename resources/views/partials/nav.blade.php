<nav class="bg-gray-800 rounded-t-2xl">  
  <div class="mx-auto max-w-7x1 px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-44 items-center justify-between">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <a href="{{ route('welcome') }}"><img class="h-32 w-64 rounded-2xl" src="logo_FB.jpg" alt="Your Company"></a>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- menu -->
        <div class="relative ml-3">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('welcome') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Welcome</a>
            <a href="{{ route('about') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">About</a>
            <a href="{{ route('services') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Services</a>
            <a href="{{ route('contact') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Contact</a>
            <a href="{{ route('galery') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Galery</a>
            <a href="{{ route('blog') }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Blog</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>