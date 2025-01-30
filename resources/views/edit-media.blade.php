<x-app-layout>
    <x-slot name="titleH">
        Editar Medio
    </x-slot>
    @if ($errors->any())
        @foreach ($errors as $error)
            {{$error}}
        @endforeach
    @endif
    
    <x-formulario :media="$media">
        <x-slot name='accion'>
            /media/edit/{{$media->id}}
        </x-slot>
        <x-slot name='metodo'>
            POST
        </x-slot>
    </x-formulario>

</x-app-layout>