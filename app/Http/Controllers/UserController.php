<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        // Pass the users to the Blade view
        return view('welcome', compact('users'));
    }

    public function healthCheck()
    {
        try {
            // Check database connection
            DB::connection()->getPdo();
            
            // If database is working, return a healthy response
            return response()->json([
                'status' => 'ok',
                'message' => 'Service is up and running',
                'database' => 'connected',
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            // If the database connection fails
            return response()->json([
                'status' => 'error',
                'message' => 'Service is down',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users, 200);
    }
}
