<?php

namespace App\Models;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    //
    protected $fillable = [
        'invoice_number',
        'user_id',
        'customer_name',
        'total_price',
        'status',
        'payment_url',
        'paid_at',
    ];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
