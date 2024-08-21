<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
class ItemAssignment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'inv_item_assignments';

    protected $fillable = [
        'item_id',
        'user_id',
        'serial_number',
        'assigned_at',
        'status',
        'picture',
    ];

    protected $casts = [
        'assigned_at' => 'datetime',
    ];

    // Relationships

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Correctly reference User model
    }
}
