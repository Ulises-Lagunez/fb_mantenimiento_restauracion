<x-app-layout>
    <x-slot name="titleH">
        Crear Medio
    </x-slot>
    @if ($errors->any())
        @foreach ($errors as $error)
            {{$error}}
        @endforeach
    @endif
    
    <x-formulario :media="$media">
        <x-slot name='accion'>
            /media
        </x-slot>
        <x-slot name='metodo'>
            POST
        </x-slot>
    </x-formulario>

</x-app-layout>