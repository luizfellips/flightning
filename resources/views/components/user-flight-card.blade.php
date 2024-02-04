@props(['flight'])

<div class="card border-0 rounded-4">
    <div class="card-header bg-slate-200 border-0 display-6">
        {{ $flight->to }}
    </div>
    <div class="card-body bg-slate-100">
        <h5 class="card-title"><strong>Company: </strong>{{ $flight->company }}</h5>
        <h5 class="card-title"><strong>Departure time: </strong>{{ $flight->departure }}</h5>
        <h5 class="card-title fs-2">US$ {{ number_format($flight->ticket_price, 2) }}</h5>
        <form action="{{ route('user.flights.destroy', ['flight' => $flight->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn bg-red-500 hover:bg-red-600 text-white">Unbook Flight</button>
        </form>
    </div>
</div>
