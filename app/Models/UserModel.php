<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    // Relasi Many to One ke LevelModel
    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}