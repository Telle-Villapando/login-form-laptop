<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'role',
        'password',
        'avatar',
        'bio',
        'provider',
        'provider_id',
        'provider_token',
        'admin_token', // Add the admin_token to fillable attributes
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'admin_token', // Consider hiding admin_token if sensitive
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role === 'admin'; // Check if the user is an admin
    }

    /**
     * Validate the admin token.
     *
     * @param string $token
     * @return bool
     */
    public function validateAdminToken($token)
    {
        // Assuming you store the admin token in a .env or another secure way
        return $token === env('ADMIN_TOKEN'); 
    }
}
