    <x-layout>

        <div class="h-screen w-screen mt-3 flex items-center justify-center">
            <div class="p-10 rounded shadow-sm border-2 border-opacity-35 border-blue-700 max-w-lg w-2/3">
                <div class="mb-6 p-10 bg-white -m-10">
                    <h1 class="font-bold text-2xl text-gray-700 text-center">Update a flight</h1>
                </div>
                <form action="{{ route('admin.flights.update', ['flight' => $flight->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col mb-4">
                            <label>Company
                                <span class="block text-xs font-light text-stone-400">The name of the flight's
                                    company</span>
                            </label>
                            <input type="text" placeholder="Company name" name="company"
                                class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->company) }}" />
                        </div>
                        <div class="flex flex-col mb-4">
                            <label>Plane
                                <span class="block text-xs font-light text-stone-400">The model of the plane</span>
                            </label>
                            <input type="text" placeholder="Plane model" name="plane"
                                class="mt-2 px-4 py-2 shadow rounded"
                                value="{{ old('plane', $flight->plane) }}" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col mb-4">
                            <label>From
                                <span class="block text-xs font-light text-stone-400">Where is flight taking place</span>
                            </label>
                            <input type="text" placeholder="From" name="from" class="mt-2 px-4 py-2 shadow rounded" value="{{ old('from', $flight->locations->from) }}" />
                        </div>
                        <div class="flex flex-col mb-4">
                            <label>To
                                <span class="block text-xs font-light text-stone-400">Where shall the plane arrive</span>
                            </label>
                            <input type="text" placeholder="Where" name="to"
                                class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->locations->to) }}" />
                        </div>
                    </div>
                        <div class="flex flex-col mb-4">
                            <label>Boarding
                                <span class="block text-xs font-light text-stone-400">When should the boarding
                                    start</span>
                            </label>
                            <input type="datetime-local" placeholder="Boarding time" name="boarding"
                                class="mt-2 px-4 py-2 shadow rounded" value="{{ old('boarding', $flight->details->boarding) }}" />
                        </div>
                        <div class="flex flex-col mb-4">
                            <label>Departure
                                <span class="block text-xs font-light text-stone-400">When should the flight leave
                                    ground</span>
                            </label>
                            <input type="datetime-local" placeholder="Departure time" name="departure"
                                class="mt-2 px-4 py-2 shadow rounded" value="{{ old('departure', $flight->details->departure) }}" />
                        </div>
                    <div class="flex flex-col mb-4">
                        <label>Arrival
                            <span class="block text-xs font-light text-stone-400">When should the plane arrive</span>
                        </label>
                        <input type="datetime-local" placeholder="Arrival time" name="arrival"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('arrival', $flight->details->arrival) }}"/>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label>Ticket Price
                            <span class="block text-xs font-light text-stone-400">Price of flight's ticket</span>
                        </label>
                        <input type="number" placeholder="Ticket price" name="ticket_price" step="any"
                            class="mt-2 px-4 py-2 shadow rounded" value="{{ old('plane', $flight->ticket_price) }}"/>
                    </div>
                    <div class="mt-6 flex gap-6">
                        <button type="submit"
                            class="rounded-full bg-blue-500 py-4 px-10 font-bold container transition fs-3 text-white shadow hover:bg-blue-600">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </x-layout>
