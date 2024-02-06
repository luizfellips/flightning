<x-layout>
    <div class="container mt-5">
        <h1 class="display-6">{{ $title }}</h1>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    @unless (count($flights) === 0)
                        <th scope="col">Flight ID</th>
                        <th scope="col">Plane</th>
                        <th scope="col">Ticket Price</th>
                        <th scope="col">To</th>
                    @else
                        <th> </th>
                    @endunless

                </tr>
            </thead>
            <tbody>
                @unless (count($flights) === 0)
                    @foreach ($flights as $flight)
                        <tr class=" cursor-pointer" onclick="window.location='{{ route($targetRoute, ['flight' => $flight->id]) }}';">
                            <th scope="row">{{ $flight->id }}</th>
                            <td>{{ strtoupper($flight->plane) }}</td>
                            <td>${{ number_format($flight->ticket_price) }}</td>
                            <td>{{ $flight->locations->to }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th> No flights were found.
                        </th>
                    </tr>
                @endunless
            </tbody>
        </table>
        {{ $flights->links() }}
    </div>
</x-layout>
