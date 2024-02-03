<x-layout>

    @include('partials._hero')
    @include('partials._search')
    <div class=" md:grid lg:grid-cols-3 gap-2
    space-y-2 md:space-y-0  mt-3">
        @unless (count($flights) == 0)
            @foreach ($flights as $flight)
                <x-flight-card :flight="$flight" />
            @endforeach
        @else
            <p> No flights found </p>
        @endunless
    </div>

</x-layout>
