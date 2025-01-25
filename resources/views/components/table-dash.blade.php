

<div class="bg-white p-2 overflow-auto h-screen">
    
    {{$tableTitle}}
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
            {{$tableContent}}
          </tbody>
        </table>
      </div>
    </div>
</div>

