<x-app-layout>
    <x-slot name="titleH">
        Dashboard
    </x-slot>

    @if($msj = Session::get('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold">Success</p>
            <p>{{$msj}}</p>
        </div>
        
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Plantilla de tabla para mostrar medios -->

                    <x-table-dash>
                        <x-slot name="tableTitle">
                            <div class="flex justify-between items-center">
                                <h2 class="text-2xl mb-4">Media</h2>
                                <a href="{{ route('media.create') }}" class="py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-teal-600">add new</a>
                            </div>
                        </x-slot>
                        
                        <x-slot name="tableContent">
                            @foreach($media as $medium)
                                <tr class="text-center text-xs md:text-sm font-thin text-gray-900 dark:text-gray-100">
                                    <td class="p-0">
                                        <span class="block py-2 px-3 border-r border-gray-300">{{$medium->id}}</span>
                                    </td>
                                    <td class="p-0">
                                        <span class="block py-2 px-3 border-r border-gray-300">{{$medium->name}}</span>
                                    </td>
                                    <td class="p-0">
                                        <span class="block py-2 px-3 border-r border-gray-300">{{$medium->image}}</span>
                                    </td>
                                    <td class="p-0">
                                        <span class="block py-2 px-3 border-r border-gray-300">{{$medium->description}}</span>
                                    </td>
                                    <td class="p-4 text-xs md:text-sm">
                                        <a href="#" class="py-2 px-4 rounded-lg text-sm font-medium text-white bg-blue-600">Edit</a>
                                        <form action="#" method="post" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-2 px-4 rounded-lg text-sm font-medium text-white bg-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </x-slot>                           
                    </x-table-dash>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
