
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-6 py-3">
                    Sección
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciónes
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($media as $media)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$media->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$media->name}}
                    </td>
                    <td class="px-6 py-4">
                        <img src="/mediaFB/{{$media->image}}" alt="{{$media->image}}" class="w-24">
                    </td>
                    <td class="px-6 py-4">
                        {{$media->section}}
                    </td>
                    <td class="px-6 py-4">
                        {{$media->description}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-center ">
                            <a href="{{route('media.edit',$media->id)}}">
                                <button type="button" class="mr-3 py-3 px-4 inline-flex justify-center items-center gap-2 -ml-px first:rounded-l-lg first:ml-0 last:rounded-r-lg border font-medium bg-yellow-400 text-gray-900 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-indigo-600 transition-all text-sm "> Editar </button>
                            </a>
                            <form action="{{route('media.destroy',$media->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 -ml-px first:rounded-l-lg first:ml-0 last:rounded-r-lg border font-medium bg-red-700 text-white align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-indigo-600 transition-all text-sm "> Borrar </button>
                            </form>
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
