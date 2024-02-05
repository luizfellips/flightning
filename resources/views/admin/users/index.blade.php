<x-layout>
    <div class="container mt-5">
        <h1 class="display-6">Users</h1>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    @unless (count($users) === 0)
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Permission Level</th>
                        <th scope="col">Actions</th>

                    @else
                        <th> </th>
                    @endunless

                </tr>
            </thead>
            <tbody>
                @unless (count($users) === 0)
                    @foreach ($users as $user)
                        <tr class=" cursor-default">
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ strtoupper($user->name) }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                            <td>
                                <a class="btn bg-sky-600 text-white hover:bg-sky-700" href="{{route('admin.users.show', ['user' => $user->id])}}">Booked Flights</a>
                                <a class="btn bg-green-600 text-white hover:bg-green-700" href="{{route('admin.users.edit', ['user' => $user->id])}}">Set Permission Level</a>
                                <a class="btn bg-red-600 text-white hover:bg-red-700" href="{{route('admin.users.delete.confirm', ['user' => $user->id])}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th> No users were found.
                        </th>
                    </tr>
                @endunless


            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</x-layout>
