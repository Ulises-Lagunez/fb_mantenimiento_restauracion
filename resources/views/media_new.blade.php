<x-app-layout> 
    <x-slot name="titleH">
        Craer un nuevo medio
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard FB Constructora y mantenimiento de Mexico
        </h2>
    </x-slot>

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-black rounded-2xl">
            <form action="{{ url('/media/create') }}" method="post">
                @csrf
                <div class="m-6">
                    <label for="name" class="mb-3 block text-base font-medium text-[#dadada]">Nombre</label>
                    <input type="text" name="name" id="name" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">    
                </div>
                
                <div class="m-6">
                    <label for="image" class="mb-3 block text-base font-medium text-[#dadada]">Archivo de imagen</label>
                    <input type="file" name="image" id="image" required class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">                
                </div>

                <div class="m-6">
                    <label for="description" class="mb-3 block text-base font-medium text-[#dadada]">Descripción</label>
                    <input type="text" name="description" id="description" required class="w-full h-36 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>

                <div class="mb-5 mx-6">
                    <input type="submit" value="Guardar" class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                </div>  
            </form>
        </div>
    </div>
</x-app-layout>