<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Edit Car</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="carMake">Car Make</label>
                      <input type="text" name="make" id="carMake" class="form-control @error('make') is-invalid @enderror" placeholder="Enter car make" value="{{ old('make', $car->make) }}" >
                      @error('make')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="carModel">Car Model</label>
                      <input type="text" name="model" id="carModel" class="form-control @error('model') is-invalid @enderror" placeholder="Enter car model" value="{{ old('model', $car->model) }}" >
                      @error('model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
              
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="carYear">Year</label>
                      <input type="number" name="year" id="carYear" class="form-control @error('year') is-invalid @enderror" placeholder="Enter car year" value="{{ old('year', $car->year) }}" >
                      @error('year')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="carColour">Colour</label>
                      <input type="text" name="colour" id="carColour" class="form-control @error('colour') is-invalid @enderror" placeholder="Enter car colour" value="{{ old('colour', $car->colour) }}" >
                      @error('colour')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="carPrice">Price</label>
                      <input type="number" name="price" id="carPrice" class="form-control @error('price') is-invalid @enderror" placeholder="Enter car price" value="{{ old('price', $car->price) }}" >
                      @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
              
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="dealer">Dealer</label>
                      <select name="dealer_id" id="dealer" class="form-control @error('dealer_id') is-invalid @enderror" >
                        <option value="" disabled>Choose a dealer...</option>
                        @foreach($dealers as $id => $name)
                          <option value="{{ $id }}" {{ old('dealer_id', $car->dealer_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                      </select>
                      @error('dealer_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
              
                  <div class="d-flex ">
                    <button type="submit" class="btn btn-primary zoom-effect">Submit</button>
                    <a href="{{ route('cars.index') }}" style="margin-left:20px" class="btn btn-md btn-dark zoom-effect">Cancel</a>
                  </div>
            </div>
        </div>
    </div>
</div>
