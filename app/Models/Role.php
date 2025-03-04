<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
