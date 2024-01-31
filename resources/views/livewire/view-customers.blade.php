<div class="card offset-3 col-6">
    <div class="card-header">
        View Customer
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" disabled>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" disabled> 
            </div>
            <div class="mb-3 form-group">
                <label for="Phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="Phone" class="form-control" value="{{ $customer->phone }}" disabled>
            </div>
            <div class="mb-3">
                {{-- <button class="btn btn-primary" type="submit">Save</button> --}}
                <button wire:navigate href="{{ route('index') }}" class="btn btn-dark float-end">Back</button>
            </div>
        </form>
    </div>
</div>
