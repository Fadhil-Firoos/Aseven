@section('title', 'Product')

<div class="flex-grow p-6 ml-64">
    <!-- head content -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Menu Title</h1>
            <div>
                <button class="bg-gray-300 text-gray-800 py-2 px-4 rounded mr-2 hover:bg-black hover:text-white hover:border hover:border-black"><i class="fa-solid fa-plus"></i> Secondary Action</button>
                <button class="bg-black text-white py-2 px-4 rounded hover:bg-gray-300 hover:text-gray-800 hover:border hover:border-gray-300"><i class="fa-solid fa-plus"></i> Primary Action</button>
            </div>
        </div>

        <!-- content body -->
        <div class="bg-white shadow-md rounded">
          <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
              <tr>
                <th class="w-16 py-3 px-4 uppercase font-semibold text-sm text-center"><input type="checkbox" id="select-all"></th>
                <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="name"><i class="fas fa-caret-down mr-2"></i> Name</button></th>
                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="type"><i class="fas fa-caret-down mr-2"></i> Type</button></th>
                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="price"><i class="fas fa-caret-down mr-2"></i> Price</button></th>
                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Action</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <tr>
                <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                <td class="w-1/3 py-2 px-4">Data1</td>
                <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                <td class="w-1/4 py-2 px-4">Data1</td>
                <td class="w-1/4 py-2 px-4 text-center">
                  <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                  <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                  <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
              <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
                  <td class="w-1/3 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4"><span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">Labels1</span></td>
                  <td class="w-1/4 py-2 px-4">Data1</td>
                  <td class="w-1/4 py-2 px-4 text-center">
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
              <!-- Additional rows here -->
            </tbody>
          </table>
        </div>
</div>
