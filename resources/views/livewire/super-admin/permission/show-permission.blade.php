@section('title', 'Show Permission')

<div class="flex-grow p-6 ml-64">
    <div class="bg-white p-8 rounded shadow-md w-full ">
        <h1 class="text-3xl font-bold mb-10">Show Permission {{ $name }}</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                <input
                    class="shadow {{ $errors->has('name') ? 'border-red-500' : 'border  text-gray-700' }} appearance-none rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" id="nama" type="text" wire:model="name" readonly/>
            </div>
    </div>
</div>
