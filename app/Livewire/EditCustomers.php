<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomers extends Component
{
    public $customer ;
    public $name ;
    public $email ;
    public $phone ;
    public $id ;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->id = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function render()
    {
        return view('livewire.edit-customers');
    }

    public function update(Customer $customer)
    {
        $validate = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers,email,'.$customer->email,
            'phone' => 'required|max:255|unique:customers,phone,'.$customer->phone,
        ]);
        Customer::updateOrCreate(
            [
                'id' => $this->id,
            ],
            [
               'name' => $this->name,
               'email' => $this->email,
               'phone' => $this->phone,
            ]
        );
        session()->flash('message', 'Customer successfully updated.');
        return $this->redirect('/',navigate:true);
    }
}
