@props(['flight'])

<div class="card border-0 rounded-4">
    <div class="card-header bg-slate-200 border-0 display-6">
        {{$flight->locations->to}}
    </div>
    <div class="card-body bg-slate-100">
      <h5 class="card-title"><strong>Company: </strong>{{$flight->company}}</h5>
      <h5 class="card-title"><strong>Departure time: </strong>{{$flight->details->departure}}</h5>
      <h5 class="card-title fs-2">US$ {{number_format($flight->ticket_price, 2)}}</h5>
      <a href="{{route('flights.show', ['flight' => $flight->id])}}" class="btn bg-sky-500 hover:bg-sky-600 text-white">BOOK NOW</a>
    </div>
  </div>
