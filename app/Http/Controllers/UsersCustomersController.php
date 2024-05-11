<?php

namespace App\Http\Controllers;

use App\Models\UsersCustomers;
use Illuminate\Http\Request;

class UsersCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UsersCustomers $usersCustomers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsersCustomers $usersCustomers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsersCustomers $usersCustomers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsersCustomers $usersCustomers)
    {
        //
    }
}
