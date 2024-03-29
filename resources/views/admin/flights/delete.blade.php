<x-layout>
    <div class="h-screen w-screen mt-4 flex items-center justify-center">
        <div class="p-10 rounded shadow-sm border-2 border-opacity-35 border-red-700 max-w-lg w-2/3">
            <div class="mb-6 p-10 bg-white -m-10">
                <h1 class="font-bold text-2xl text-gray-700 text-center">Are you sure you want to delete the following flight?</h1>
            </div>
            <form action="{{ route('admin.flights.destroy', ['flight' => $flight->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col mb-4">
                        <label>Company
                            <span class="block text-xs font-light text-stone-400">The name of the flight's
                                company</span>
                        </label>
                        <input type="text" disabled placeholder="Company name" name="company"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->company) }}" />
                    </div>
                    <div class="flex flex-col mb-4">
                        <label>Plane
                            <span class="block text-xs font-light text-stone-400">The model of the plane</span>
                        </label>
                        <input type="text" disabled placeholder="Plane model" name="plane"
                            class="mt-2 px-4 py-2 shadow rounded"
                            value="{{ old('plane', $flight->plane) }}" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col mb-4">
                        <label>From
                            <span class="block text-xs font-light text-stone-400">Where is flight taking place</span>
                        </label>
                        <input type="text" placeholder="From" disabled name="from" class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->locations->from) }}" />
                    </div>
                    <div class="flex flex-col mb-4">
                        <label>To
                            <span class="block text-xs font-light text-stone-400">Where shall the plane arrive</span>
                        </label>
                        <input type="text" placeholder="Where" name="to"
                            class="mt-2 px-4 py-2 shadow rounded" disabled value="{{ old('plane', $flight->locations->to) }}" />
                    </div>
                </div>
                    <div class="flex flex-col mb-4">
                        <label>Boarding
                            <span class="block text-xs font-light text-stone-400">When should the boarding
                                start</span>
                        </label>
                        <input type="datetime-local" disabled placeholder="Boarding time" name="boarding"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->details->boarding) }}" />
                    </div>
                    <div class="flex flex-col mb-4">
                        <label>Departure
                            <span class="block text-xs font-light text-stone-400">When should the flight leave
                                ground</span>
                        </label>
                        <input type="datetime-local" disabled placeholder="Departure time" name="departure"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->details->departure) }}" />
                    </div>
                <div class="flex flex-col mb-4">
                    <label>Arrival
                        <span class="block text-xs font-light text-stone-400">When should the plane arrive</span>
                    </label>
                    <input type="datetime-local" disabled placeholder="Arrival time" name="arrival"
                        class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->details->arrival) }}"/>
                </div>
                <div class="flex flex-col mb-4">
                    <label>Ticket Price
                        <span class="block text-xs font-light text-stone-400">Price of flight's ticket</span>
                    </label>
                    <input type="number" disabled placeholder="Ticket price" name="ticket_price" step="any"
                        class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->ticket_price) }}"/>
                </div>
                <div class="mt-6 flex gap-6">
                    <button type="submit"
                        class="rounded-full bg-red-500 py-4 px-10 font-bold container transition fs-3 text-white shadow hover:bg-red-600">Delete</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

