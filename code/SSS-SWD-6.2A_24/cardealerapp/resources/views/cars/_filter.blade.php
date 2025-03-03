<form method="GET" action="{{ route('cars.index') }}">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <select id="filter_dealer_id" name="dealer_id" class="custom-select" onchange="this.form.submit()">
                            <option value="" {{ request('dealer_id') == '' ? 'selected' : '' }}>All Dealerships</option>
                            @foreach($dealers as $id => $name)
                                <option value="{{ $id }}" {{ request('dealer_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="ml-2">
                            <a href="{{ route('cars.create') }}" class="btn btn-success">Add Car</a>
                            <a href="{{ route('dealers.create') }}" class="btn btn-info">Add Dealership</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
