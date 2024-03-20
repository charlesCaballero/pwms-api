<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DisposalRequest extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'disposal_requests';
    protected $fillable = [
        'form_no',
        'user_id',
        'office_id',
        'inventory_id',
        'status',
        'remarks',
        'date_disposed'
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
}
