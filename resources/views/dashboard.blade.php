<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 fs-4 text-center">
                    {{ __('Welcome, ') }}
                    {{ ucfirst(auth()->user()->name) }}!
                </div>
                <div class="row p-2 justify-center items-center">
                    <div class="col text-center p-6 pb-0 text-gray-900 fs-4">
                        {{ __('Your Booked Flights') }}
                        <div class="p-6 pt-0 pl-2">
                            <a href="{{ route('user.flights') }}"
                                class="btn bg-sky-400 text-white w-40 focus:bg-sky-500 hover:bg-sky-500">Booked
                                Flights</a>
                        </div>
                    </div>
                    <div class="col text-center p-6 pb-0 text-gray-900 fs-4">
                        {{ __('Your Preferences') }}
                        <div class="p-6 pt-0 pl-2">
                            <a href="#"
                                class="btn bg-sky-400 text-white w-40 focus:bg-sky-500 hover:bg-sky-500">Preferences</a>
                        </div>
                    </div>
                    <div class="col text-center p-6 pb-0 text-gray-900 fs-4">
                        {{ __('Your Profile') }}
                        <div class="p-6 pt-0 pr-0 pl-0">
                            <a href="{{ route('profile.edit') }}"
                                class="btn bg-sky-400 text-white w-28 focus:bg-sky-500 hover:bg-sky-500">Profile</a>
                        </div>
                    </div>
                </div>
                @if (auth()->user()->is_admin)
                <div class="row p-2 justify-center items-center">
                    <div class="col text-center p-6 pb-0 text-gray-900 fs-4">
                        {{ __('Admin Panel') }}
                        <div class="p-6 pt-0 pl-2">
                            <a href="{{ route('admin.index') }}"
                                class="btn bg-green-500 text-white w-40 focus:bg-green-600 hover:bg-green-600">Admin Panel</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
