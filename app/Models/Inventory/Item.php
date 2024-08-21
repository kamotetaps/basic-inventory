<?php
namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'inv_items';

    protected $fillable = [
        'name',
        'code',
        'description',
        'quantity',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function inventoryTransactions()
    {
        return $this->hasMany(InventoryTransaction::class, 'item_id');
    }

    public function itemLocations()
    {
        return $this->hasMany(ItemLocation::class, 'item_id');
    }
}
