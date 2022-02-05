<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;
    protected $table = "users";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'id';

    public function getUser($id){
        return DB::table('users')
        ->where('users.id', '=', $id)
        ->first();
    }

    public function deleteUser($id){
        return DB::table('users')->where('id','=',$id)->delete();
    }
}
