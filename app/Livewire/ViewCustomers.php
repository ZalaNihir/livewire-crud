<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class ViewCustomers extends Component
{
    public $customer = [];

    public function mount($customer)
    {
        $this->customer = Customer::where('id',$customer)->first();
    }

    public function render()
    {
        return view('livewire.view-customers');
    }
}
