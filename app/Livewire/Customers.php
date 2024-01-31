<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    // public $customers=[];
    public $customer;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if (!$this->search) {
            $this->customers = Customer::paginate(2);
        } else {
            $this->customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        }
        return view('livewire.customers', [
            'customers' => $this->customers,
        ]);
    }


    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('message', 'Customer successfully deleted.');
        return $this->redirect('/', navigate: true);
    }
}
