<?php

namespace App\Models\Tenant;

use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'log_name',
        'description',
        'subject_type',
        'subject_id',
        'causer_type',
        'causer_id',
        'properties',
        'batch_uuid',
    ];

    protected $casts = [
        'properties' => 'collection',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function subject()
    {
        return $this->morphTo();
    }

    public function causer()
    {
        return $this->morphTo();
    }

    public function scopeForSubject($query, $subject)
    {
        return $query->where('subject_type', get_class($subject))
            ->where('subject_id', $subject->id);
    }

    public function scopeCausedBy($query, $causer)
    {
        return $query->where('causer_type', get_class($causer))
            ->where('causer_id', $causer->id);
    }
}
