<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query();

        $users = $users->paginate(10);
        return view('admin.users.index', compact('users'));
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $flights = Flight::whereHas('bookedFlights', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('admin.users.show', [
            'flights' => $flights,
            'user' => $user,
        ]);
    }

    public function delete(User $user) {
        return view('admin.users.delete', compact('user'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('admin.users.index')->with('message', 'User deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.users.index')->with('message', 'User could not be deleted.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function update(Request $request, User $user)
    {

        try {
            $user->update([
                'is_admin' => $request->input('is_admin'),
            ]);

            return redirect()->route('admin.users.index')->with('message', 'User permission updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.users.index')->with('message', 'User permission could not be updated.');
        }
    }
}
