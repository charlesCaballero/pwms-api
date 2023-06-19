<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ReturnRequest extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'return_requests';
    protected $fillable = [
        'form_no',
        'user_id',
        'office_id',
        'inventory_id',
        'withdrawal_id',
        'status',
        'remarks',
        'date_returned'
    ];

    public function inventory()
    {
        return $this->hasOne(Inventory::class, 'id', 'inventory_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function office () {
        return $this->hasOne(Office::class, 'id', 'office_id');
    }

    public function withdrawal () {
        return $this->hasOne(WithdrawalRequest::class, 'inventory_id', 'inventory_id');
    }
}
