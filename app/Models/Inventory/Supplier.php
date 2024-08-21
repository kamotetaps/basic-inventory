<?php
namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'inv_suppliers';

    protected $fillable = [
        'name',
        'contact',
        'phone',
        'email',
        'address',
    ];

    public function inventoryTransactions()
    {
        return $this->hasMany(InventoryTransaction::class, 'supplier_id');
    }
}
