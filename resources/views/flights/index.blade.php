@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <h1 class="display-6">{{$title}}</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Flight ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Plane</th>
                    <th scope="col">Ticket Price</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <th scope="row">{{ $flight->id }}</th>
                        <td>{{ $flight->company }}</td>
                        <td>{{ strtoupper($flight->plane) }}</td>
                        <td>${{ number_format($flight->ticket_price) }}</td>
                        <td>{{ $flight->from }}</td>
                        <td>{{ $flight->to }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $flights->links() }}
    </div>
@endsection
