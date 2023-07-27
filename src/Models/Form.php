<?php

// namespace YourVendor\YourPackage\Models;
namespace HassanAamir\LaravelFormSdk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name'];
}