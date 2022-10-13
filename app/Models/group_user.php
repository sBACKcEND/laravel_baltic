<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group_user extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

    protected $table='group_users';

    public function students() {
        return $this->belongsToMany(User::class, 'group_users');
    }
    public function groups() {
        return $this->belongsToMany(Group::class, 'group_users');
    }


}
