<div class="card offset-3 col-6">
    <div class="card-header">
        Edit Customer
    </div>
    <div class="card-body">
        <form wire:submit="update">
            <input type="hidden" name="id" id="id" value="{{ $customer->id }}" wire:model="id">
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">email</label>
                <input wire:model="email" type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>    
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="Phone" class="form-label">Phone</label>
                <input wire:model="phone" type="text" name="phone" id="Phone" class="form-control" value="{{ $customer->phone }}">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button wire:navigate href="{{ route('index') }}" class="btn btn-dark">Back</button>
                <button class="btn btn-primary float-end" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
