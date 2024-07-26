@section('title', 'Add Permission Role')

<div class="flex-grow p-6 ml-64">
    <div class="bg-white p-8 rounded shadow-md w-full" x-data="permissionForm()">
        <h1 class="text-3xl font-bold mb-10">Add Permission Role {{ $roleName }}</h1>
        <form @submit.prevent="submitForm">
            <div class="mb-4 grid gap-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8">
                @foreach ($dataPermission as $permission)
                <label class="flex items-center text-gray-700 text-sm font-bold">
                    <input
                        class="border text-gray-700 appearance-none rounded leading-tight focus:outline-none focus:shadow-outline"
                        type="checkbox" :value="{{ $permission->id }}"
                        :checked="{{ in_array($permission->id, $permissionHasRole) ? 'true' : 'false' }}"
                        @change="togglePermission({{ $permission->id }})">
                    <span class="ml-2">{{ $permission->name }}</span>
                </label>
                @endforeach
            </div>

            <div class="flex items-center justify-start">
                <button
                    class="w-50 bg-black text-white px-5 py-2 rounded-lg mb-6 mt-2"
                    type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function permissionForm() {
        return {
            selectedPermissions: @json($permissionHasRole),

            togglePermission(permissionId) {
                if (this.selectedPermissions.includes(permissionId)) {
                    this.selectedPermissions = this.selectedPermissions.filter(id => id !== permissionId);
                } else {
                    this.selectedPermissions.push(permissionId);
                }
            },

            submitForm() {
                @this.call('save', this.selectedPermissions);
            }
        }
    }
</script>
