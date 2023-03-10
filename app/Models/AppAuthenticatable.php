<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class AppAuthenticatable extends AppModel {
    use HasApiTokens;
    use HasFactory; 
    use Notifiable;    
    use HasRoles; 
}