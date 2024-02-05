<x-layout>
    <div class="row mt-3 text-center p-2">
        <h1 class="display-5">Current booked flights for the user {{ $user->name }}</h1>
        <div class=" md:grid lg:grid-cols-3 gap-2
        space-y-2 md:space-y-0  mt-3">
            @unless (count($flights ?? []) == 0)
                @foreach ($flights as $flight)
                    <x-user-flight-card :flight="$flight" />
                @endforeach
            @else
                <div class="lc-block p-4">
                    <p class="display-6 pb-2">User currently has no flights booked.</p>
                    <a href="{{ route('flights.index') }}"
                        class="btn fs-2 shadow-lg bg-sky-500 hover:bg-sky-600 focus:bg-sky-600 text-white">Book one now!</a>
                </div>
            @endunless
        </div>
    </div>
</x-layout>
