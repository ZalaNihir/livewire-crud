<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validate = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers',
            'phone' => 'required|max:255|unique:customers',
        ]);
        Customer::create($validate);
        session()->flash('message', 'Customer successfully updated.');
        return $this->redirect('/',navigate:true);
    }
}
