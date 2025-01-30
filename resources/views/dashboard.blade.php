<x-app-layout>    
    <x-slot name="titleH">
        Dashboard FB
    </x-slot>
    @if(session('success'))
        <div class="alert alert-success" id="notification">
            {{session('success')}}
        </div>    
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Plantilla de tabla para mostrar medios -->

                    <h1>tabla de recursos</h1>
                    <div class="w-auto flex justify-end">
                        <a href="{{route('media.create')}}" class="bg-green-700 px-8 py-3 rounded-2xl mb-2">
                            <button type="button" class="text-xl text-yellow-50 dark:text-gray-400 ">Agregar</button>
                        </a>
                    </div>
                    <x-tabla-media :media="$media"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
