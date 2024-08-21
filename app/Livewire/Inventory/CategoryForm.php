<?php

namespace App\Livewire\Inventory;

use Livewire\Component;
use App\Models\Inventory\Category;

class CategoryForm extends Component
{
    public $category;
    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
    ];

    public function mount($categoryId = null)
    {
        if ($categoryId) {
            $this->category = Category::find($categoryId);
            $this->name = $this->category->name;
            $this->description = $this->category->description;
        } else {
            $this->category = new Category();
            $this->name = '';
            $this->description = '';
        }
    }

    public function save()
    {
        $this->validate();

        // Update or create category
        $this->category->name = $this->name;
        $this->category->description = $this->description;
        $this->category->save();

        session()->flash('message', 'Category saved successfully.');
    }

    public function render()
    {
        return view('livewire.inventory.category-form')->layout('layouts.app');
    }
}
