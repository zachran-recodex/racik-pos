<?php

namespace App\Models\Tenant;

use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'product_id',
        'movement_type',
        'quantity_change',
        'stock_before',
        'stock_after',
        'reference_type',
        'reference_id',
        'notes',
        'created_by',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function reference()
    {
        return $this->morphTo('reference');
    }

    public function scopeIncreases($query)
    {
        return $query->whereIn('movement_type', ['purchase', 'return'])
            ->orWhere('quantity_change', '>', 0);
    }

    public function scopeDecreases($query)
    {
        return $query->whereIn('movement_type', ['sale', 'adjustment'])
            ->orWhere('quantity_change', '<', 0);
    }
}
