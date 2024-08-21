<?php
namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLocation extends Model
{
    use HasFactory;

    protected $table = 'inv_item_locations';

    protected $fillable = [
        'item_id',
        'location',
        'quantity',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
