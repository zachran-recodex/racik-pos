<?php

namespace App\Models\Tenant;

use App\Models\Central\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'user_id',
        'session_date',
        'opening_balance',
        'closing_balance',
        'expected_balance',
        'difference_amount',
        'total_sales',
        'total_transactions',
        'status',
        'notes',
    ];

    protected $casts = [
        'opening_balance' => 'decimal:2',
        'closing_balance' => 'decimal:2',
        'expected_balance' => 'decimal:2',
        'difference_amount' => 'decimal:2',
        'total_sales' => 'decimal:2',
        'session_date' => 'date',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOpen($query)
    {
        return $query->where('status', 'open');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    public function close($closingBalance, $notes = null)
    {
        $this->update([
            'closing_balance' => $closingBalance,
            'expected_balance' => $this->opening_balance + $this->total_sales,
            'difference_amount' => $closingBalance - ($this->opening_balance + $this->total_sales),
            'status' => 'closed',
            'closed_at' => now(),
            'notes' => $notes,
        ]);
    }
}
