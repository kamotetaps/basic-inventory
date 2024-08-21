<?php
namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Category;

class CategoryList extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.inventory.category-list')->layout('layouts.app');
    }
}
