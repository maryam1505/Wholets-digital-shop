<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCustomers extends Model
{
    use HasFactory;
    protected $table = 'users_customers';
    protected $primary_key = 'users_customers_id'; 
}
