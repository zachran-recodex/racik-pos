<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'domain',
        'subdomain',
        'database_name',
        'status',
        'subscription_plan',
        'subscription_expires_at',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
        'subscription_expires_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function notifications()
    {
        return $this->hasMany(SystemNotification::class);
    }
}
