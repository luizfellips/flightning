<x-layout>

    <div class="mt-5 w-screen flex items-center justify-center">
        <div class="p-10 rounded shadow-sm border-2 border-opacity-35 border-blue-700 max-w-lg w-2/3">
            <div class="mb-6 p-10 bg-white -m-10">
                <h1 class="font-bold text-2xl text-gray-700 text-center">Are you sure you want to delete the following user?</h1>
            </div>
            <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col mb-4">
                        <label>User
                            <span class="block text-xs font-light text-stone-400">User email</span>
                        </label>
                        <input type="text" placeholder="User name"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('email', $user->email) }}" disabled/>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label>User name
                            <span class="block text-xs font-light text-stone-400">The user's name</span>
                        </label>
                        <input type="text" placeholder="User name"
                        class="mt-2 px-4 py-2 shadow rounded" value="{{ old('name', $user->name) }}" disabled/>
                    </div>
                </div>
                <div class="mt-6 flex gap-6">
                    <button type="submit"
                        class="rounded-full bg-red-500 py-4 px-10 font-bold container transition fs-3 text-white shadow hover:bg-red-600">Destroy</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
