<?php

namespace App\Models\Tenant;

use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'category_id',
        'sku',
        'barcode',
        'name',
        'description',
        'price',
        'cost_price',
        'stock_quantity',
        'min_stock_level',
        'image_path',
        'is_active',
        'track_stock',
        'allow_decimal',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'is_active' => 'boolean',
        'track_stock' => 'boolean',
        'allow_decimal' => 'boolean',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stockMovements()
    {
        return $this->hasMany(StockMovement::class);
    }

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeLowStock($query)
    {
        return $query->where('track_stock', true)
            ->whereColumn('stock_quantity', '<=', 'min_stock_level');
    }

    public function getProfitAttribute()
    {
        return $this->price - $this->cost_price;
    }

    public function getProfitMarginAttribute()
    {
        if ($this->price == 0) return 0;
        return ($this->profit / $this->price) * 100;
    }
}
