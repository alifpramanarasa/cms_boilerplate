<?php

namespace App\Models;

use Spatie\Permission\Models\Role as BaseRole;
use Illuminate\Support\Str;

class Role extends BaseRole
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function (self $model): void {            
            $model->keyType = 'string';
            $model->incrementing = false;
            $model->{$model->getKeyName()} = Str::uuid()->toString();            
        });
    }    

    /**
     * The attributes that should be primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot'
    ];

    protected $fillable = [        
        'name',
        'guard_name'
    ];

    public function getIncrementing()
    {
        return false;
    }
    
    public function getKeyType()
    {
        return 'string';
    }
}
