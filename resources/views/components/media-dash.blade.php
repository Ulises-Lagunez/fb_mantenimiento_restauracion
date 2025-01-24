

<div class="bg-white p-2 overflow-auto h-screen">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl mb-4">Media</h2>
        <a href="{{ url('/media') }}" class="py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-teal-600">add new</a>
    </div>
    <!-- Classes Table -->
    <div class="relative overflow-auto">
      <div class="overflow-x-auto rounded-lg">
        <table class="min-w-full bg-white border">
          <thead>
            <tr class="bg-[#2B4DC994] text-center text-xs md:text-sm font-thin text-white">
              <th class="p-0">
                <span class="block py-2 px-3 border-r border-gray-300">Id</span>
              </th>
              <th class="p-0">
                <span class="block py-2 px-3 border-r border-gray-300">Name</span>
              </th>
              <th class="p-0">
                <span class="block py-2 px-3 border-r border-gray-300">Image</span>
              </th>
              <th class="p-0">
                <span class="block py-2 px-3 border-r border-gray-300">Description</span>
              </th>
              <th class="p-4 text-xs md:text-sm">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b text-xs md:text-sm text-center text-gray-800">
              <td class="p-2 md:p-4">01</td>
              <td class="p-2 md:p-4">Class 1</td>
              <td class="p-2 md:p-4">Beginner</td>
              <td class="p-2 md:p-4">Beginner</td>
              <td class="relative p-2 md:p-4 flex justify-center space-x-2">
                <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs md:text-sm">Edit</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md text-xs md:text-sm">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>

