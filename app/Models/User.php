<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'role_id',
        'name',
        'last_name',
        'last_name2',
        'email',
        'password',
        'phone',
        'statu_id',
        'created_at',
        'deleted_at',
        'updated_at'
    ];

    protected $guarded = ['id'];

    protected $hidden = [
        'password'
    ];

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = app('hash')->make($password);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo( Role::class );
    }
}
