@section('title', 'Kelola User')

<div class="flex-grow p-6 ml-64">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">User Menu</h1>
    </div>

    <!-- Table -->
    <div class="bg-white shadow-md rounded">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-16 py-3 px-4 uppercase font-semibold text-sm text-center"><input type="checkbox" id="select-all"></th>
            <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="name"><i class="fas fa-caret-down mr-2"></i> Name</button></th>
            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="email"><i class="fas fa-caret-down mr-2"></i> Email</button></th>
            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left"><button class="sort-button" data-column="role"><i class="fas fa-caret-down mr-2"></i> Role</button></th>
            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-center">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr>
            <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
            <td class="w-1/3 py-2 px-4">Name1</td>
            <td class="w-1/4 py-2 px-4">email1</span></td>
            <td class="w-1/4 py-2 px-4">role1</td>
            <td class="w-1/4 py-2 px-4 text-center">
              <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
              <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
              <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Name2</td>
              <td class="w-1/4 py-2 px-4">email2</span></td>
              <td class="w-1/4 py-2 px-4">role2</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Name3</td>
              <td class="w-1/4 py-2 px-4">email3</span></td>
              <td class="w-1/4 py-2 px-4">role3</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <td class="w-16 py-2 px-4 text-center"><input type="checkbox" class="row-checkbox"></td>
              <td class="w-1/3 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4">Data</span></td>
              <td class="w-1/4 py-2 px-4">Data</td>
              <td class="w-1/4 py-2 px-4 text-center">
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-eye"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1 border p-2 rounded-lg"><i class="fas fa-pencil-alt"></i></button>
                <button class="text-gray-500 hover:text-gray-700 mx-1"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>