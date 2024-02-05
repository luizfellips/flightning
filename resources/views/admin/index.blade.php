<x-layout>
    <div class="row mt-3 text-center p-2">
        <h1 class="display-5">Admin Panel</h1>

        <div class="row text-center bg-white rounded-3xl p-4">
            <h2 class="fs-1 m-4 text-start border-b-2 border-gray-50 p-2">Available options</h2>
            <div class="col">
                <a class="btn bg-green-500 hover:bg-green-600 fs-3 text-white" href="{{route('admin.create')}}">Create new flight</a>
            </div>
            <div class="col">
                <button class="btn bg-green-500 hover:bg-green-600 fs-3 text-white">Edit an existent flight data</button>
            </div>
            <div class="col">
                <button class="btn bg-red-500 hover:bg-red-600 fs-3 text-white">Delete a flight record</button>
            </div>
        </div>

    </div>
</x-layout>
