<?php

namespace App\Models;

use App\Scopes\UserisActiveScope;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    //backlist
    protected $guarded = ['isAdmin'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function booted()
    {
        static::addGlobalScope(new UserisActiveScope);
    }
    public function scopeIsAdmin($query)
    {
        $isAdmin = 1;
        $query->where('isAdmin', $isAdmin);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name . ' ' . $this->last_name
        );
    }
    protected function userName(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Str::slug($value, '-')
        );
    }
}
