<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function displayData()
    {
        $response = Http::get('http://62.129.149.138:8099/api/get-kay');
        $data = $response['data']['kay'];
        $users = count($data);
        return view('auth.dashboard', compact('data', 'users'));
    }

    public function index()
    {
        $response = Http::get('http://62.129.149.138:8099/api/get-kay');
        $data = $response['data']['kay'];
        return view('auth.users', compact('data'));
    }

    public function getOrders()
    {
        $response = Http::get('http://62.129.149.138:8099/api/get-orders');
        $data = $response['data']['orders'];
        return view('auth.revenue', compact('data'));
    }

    public function dashboard()
    {
        $getOrders = Http::get('http://62.129.149.138:8099/api/get-orders');
        $getUsers = Http::get('http://62.129.149.138:8099/api/get-kay');
        $users = count($getUsers['data']['kay']);
        $orders = count($getOrders['data']['orders']);
        return view('auth.dashboard', compact('users', 'orders'));
    }
    // public function table()
    // {
    //     // $clients = DB::table('dentsu_table')->get();
    //     // return view('auth.table', compact('clients'));

    //     $response = Http::get('http://62.129.149.138:8099/api/get-kay');
    //     $tables = $response->json();
    //     return view('auth.table', ['data' => $tables]);
    // }

    // public function create(UserRequest $req)
    // {
    //     $data = $req->validated();

    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role' => $data['role'],
    //         'password' => Hash::make($data['password']),
    //         'email_verified_at' => now(),
    //         'remember_token' => Str::random(10),
    //     ]);

    //     return redirect()->back()->with("success", "Congratulations");
    // }
}
