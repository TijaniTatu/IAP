<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return a JSON response with the users
        return response()->json(['users' => $users]);
    }

    public function show($id)
    {
        // Fetch a specific user by ID from the database
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Return a JSON response with the user
        return response()->json(['user' => $user]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // Add more validation rules as needed
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // Set other attributes as needed

        // Save the user to the database
        $user->save();

        // Return a JSON response indicating success
        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            // Add more validation rules as needed
        ]);

        // Fetch the user by ID from the database
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Update the user attributes
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Save the updated user to the database
        $user->save();

        // Return a JSON response indicating success
        return response()->json(['message' => 'User updated successfully']);
    }
    public function gender(){
        $male = User::where('gender', 'male')->count();
        $female = User::where('gender', 'female')->count();
    
        return response()->json([
            'male' => $male,
            'female' => $female,
        ]);
    }
    public function time(){
        $users = User::orderBy('created_at', 'asc')->get();
    
        return response()->json($users);
    }
    


    public function destroy($id)
    {
        // Fetch the user by ID from the database
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Delete the user from the database
        $user->delete();

        // Return a JSON response indicating success
        return response()->json(['message' => 'User deleted successfully']);
    }
}
