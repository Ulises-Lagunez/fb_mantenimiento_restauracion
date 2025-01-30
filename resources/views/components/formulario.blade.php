
<form action="{{$accion}}" method="{{$metodo}}" enctype="multipart/form-data" class="max-w-sm mx-auto mt-10">
    @csrf
    @isset($media->name)
        @method('PUT')
    @endisset
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre:</label>
        <input type="text" name="name" id="name" @isset($media->name) value="{{$media->name}}" @endisset class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Archivo de imagen:</label>
        <input type="file" name="image" id="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div>
        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sección:</label>
        <select name="section" id="section" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="---" disabled @empty($medio->section) selected @endempty>---</option>
            <option value="app" @isset($medio->section) selected @endisset>Aplicación</option>
            <option value="carpinteria" @isset($medio->section) selected @endisset>Carpinteria</option>
            <option value="plomeria" @isset($medio->section) selected @endisset>Plomeria</option>
            <option value="aire-acond" @isset($medio->section) selected @endisset>Aire acondicionado</option>

        </select>
    </div>
    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
        <textarea name="description" id="description" cols="50" rows="10" @isset($media->description) value="{{$media->description}}" @endisset class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
    </div>
    <div class="mb-5">
        <button type="submit" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Guardar</button>
    </div>
  </form>
  