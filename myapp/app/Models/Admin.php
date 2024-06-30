<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='Admin';
    protected $fillable=[
        'ID',
        'AdminID',
        'AdminName',
        'AdminPhoneNumber',
        'AdminPhoneNumber',
        'AdminPassword',
        'created_at',
        'updated_at',
        'IsActive',
        ];
}
