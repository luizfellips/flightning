<x-layout>
    <div class="row mt-3 text-center p-2">
        <h1 class="display-5">Are you sure you want to delete the following flight?</h1>

        <div class="row text-center bg-white rounded-3xl p-4">
            <h2 class="fs-1 m-4 text-start border-b-2 border-gray-100 p-2">Company: {{ $flight->company }}</h2>
            <div class="col">
                <h2 class="fs-1 m-4 text-start p-2">Plane: {{ $flight->plane }}</h2>
                <h2 class="fs-1 m-4 text-start p-2">From: {{ $flight->from }}</h2>
                <h2 class="fs-1 m-4 text-start p-2">To: {{ $flight->to }}</h2>
                <h2 class="fs-1 m-4 text-start p-2">Ticket Price: ${{ $flight->ticket_price }}</h2>
                <form action="{{route('admin.flights.destroy', ['flight' => $flight->id])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit"
                    class="rounded-full bg-red-500 py-4 px-10 font-bold fs-3 text-white shadow hover:bg-red-600 hover:scale-x-110 transition">DESTROY</button></form>
            </div>
        </div>
    </div>
</x-layout>
