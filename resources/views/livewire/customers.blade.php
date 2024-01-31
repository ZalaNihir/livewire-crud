<div class="card">
    <div class="card-body">
        <div class="card-header">
            <h3 class="card-title">Customer Table</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input wire:model.live.debounce.150ms="search" type="text" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <button wire:navigate href="{{ route('create') }}" class="btn btn-success float-end">Create</button>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <th scope="row">{{ $customer->id }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <button wire:navigate href="{{ route('view', $customer) }}"
                                    class="btn btn-sm btn-primary">View</button>
                                <button wire:navigate href="{{ route('edit', $customer) }}"
                                    class="btn btn-sm btn-secondary">Edit</button>
                                <button wire:click="deleteCustomer({{ $customer }})"
                                    class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                {{ $customers->links() }}
            </div>
        </div>

    </div>
</div>
