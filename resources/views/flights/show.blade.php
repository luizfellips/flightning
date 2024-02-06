<x-layout>
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    @endpush
    {{-- determine whether to go back to current url or to home page(incase user goes directly to show page) --}}
    @php
        $previousUrl = url()->previous();
        $currentUrl = url()->current();
    @endphp

    <x-flight-detail>
        <a href="{{ $previousUrl !== $currentUrl ? $previousUrl : route('/') }}">

            <button class="btn btn-success flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-arrow-left-circle mr-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                </svg>Back</button>

        </a>
        <div class="flex items-center pb-2">
            <h1 class="display-6"> {{ $flight->company }}</h1>
            <h1 class="display-6 text-muted">({{ $flight->plane }})</h1>
        </div>
        <div class="flex">
            <img class="w-5/12 rounded-lg desktop-only"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Vue_de_nuit_de_la_Place_Stanislas_%C3%A0_Nancy.jpg/1200px-Vue_de_nuit_de_la_Place_Stanislas_%C3%A0_Nancy.jpg"
                alt="">
            <div class="p-3">
                <h1 class="fs-3 pb-3">From: <strong>{{ $flight->locations->from }}</strong></h1>
                <h1 class="fs-3 py-3">To: <strong>{{ $flight->locations->to }}</strong></h1>
                <h1 class="fs-3 py-3">Boarding time: <strong>{{ $flight->details->boarding }}</strong></h1>
                <h1 class="fs-3 py-3">Departure time: <strong>{{ $flight->details->departure }}</strong></h1>
                <h1 class="fs-3 py-3">Approximated arrival time: <strong>{{ $flight->details->arrival }}</strong></h1>
                <h1
                    class="display-5 p-3 text-white shadow-lg bg-sky-600 rounded-2xl bg-gradient-to-r from-blue-500 via-purple-500 to-blue-600">
                    Ticket Price: <strong>US$ {{ number_format($flight->ticket_price, 2) }}</strong></h1>
                <form action="{{ route('user.flights.store', ['flight' => $flight->id]) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="btn bg-gradient-to-r from-green-500 via-green-700 to-green-600 text-white fs-3 rounded-xl shadow-xl mt-4">Book
                        Now</button>
                </form>
            </div>
        </div>


    </x-flight-detail>

</x-layout>
