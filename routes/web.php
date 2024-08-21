<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});






//INVENTORY
//INVENTORY


use App\Livewire\Inventory\ItemList;
use App\Livewire\Inventory\ItemForm;
use App\Livewire\Inventory\CategoryList;
use App\Livewire\Inventory\CategoryForm;
use App\Livewire\Inventory\SupplierList;
use App\Livewire\Inventory\SupplierForm;
use App\Livewire\Inventory\InventoryTransactionList;
use App\Livewire\Inventory\InventoryTransactionForm;
use App\Livewire\Inventory\ItemLocationList;
use App\Livewire\Inventory\ItemLocationForm;
use App\Livewire\HelloWorld;

Route::get('/inventory/items', ItemList::class)->name('item.list');
Route::get('/inventory/items/create', ItemForm::class)->name('item.create');
Route::get('/inventory/items/{id}/edit', ItemForm::class)->name('item.edit');

Route::get('/inventory/categories', CategoryList::class)->name('category.list');
Route::get('/inventory/categories/create', CategoryForm::class)->name('category.create');
Route::get('/inventory/categories/{id}/edit', CategoryForm::class)->name('category.edit');

Route::get('/inventory/suppliers', SupplierList::class)->name('supplier.list');
Route::get('/inventory/suppliers/create', SupplierForm::class)->name('supplier.create');
Route::get('/inventory/suppliers/{id}/edit', SupplierForm::class)->name('supplier.edit');

Route::get('/inventory/transactions', InventoryTransactionList::class)->name('transaction.list');
Route::get('/inventory/transactions/create', InventoryTransactionForm::class)->name('transaction.create');
Route::get('/inventory/transactions/{id}/edit', InventoryTransactionForm::class)->name('transaction.edit');

Route::get('/inventory/locations', ItemLocationList::class)->name('item-location.list');
Route::get('/inventory/locations/create', ItemLocationForm::class)->name('item-location.create');
Route::get('/inventory/locations/{id}/edit', ItemLocationForm::class)->name('item-location.edit');
Route::get('/h', HelloWorld::class);

use App\Livewire\Inventory\ItemAssignmentForm;
use App\Livewire\Inventory\ItemAssignmentList;

// Route to list item assignments
Route::get('/inventory/item-assignments', ItemAssignmentList::class)->name('item.assignments.list');

// Route to show the item assignment form (create or edit)
Route::get('/inventory/item-assignments/form/{id?}', ItemAssignmentForm::class)->name('item.assignments.form');


//END INVENTORY
//END INVENTORY