<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class StorageRequest extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'storage_requests';
    protected $fillable = [
        'form_no',
        'user_id',
        'office_id',
        'inventory_id',
        'status',
        'remarks',
        'date_stored'
    ];
}
