<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Inventory extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'inventory';
    protected $fillable = [
        'office_id',
        'box_code',
        'box_details',
        'remarks',
        'disposal_date',
        'location',
        'status',
    ];

    public function storage()
    {
        return $this->hasOne(StorageRequest::class, 'inventory_id', 'id');
    }
    public function withdrawal()
    {
        return $this->hasOne(WithdrawalRequest::class, 'inventory_id', 'id');
    }
    public function return()
    {
        return $this->hasOne(ReturnRequest::class, 'inventory_id', 'id');
    }
    public function disposal()
    {
        return $this->hasOne(DisposalRequest::class, 'inventory_id', 'id');
    }
}
