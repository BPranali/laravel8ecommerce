<div class="row">
              
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic form elements</h4>
          <p class="card-description"> Basic form elements </p>
          <form class="forms-sample" wire:submit.prevent="updateProduct">
            <div class="form-group">
                <label for="exampleInputName1">Name  <span style="color: red">*</span></label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model="name" wire:keyup="generateslug">
                @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror
              </div>
            <div class="form-group">
                <label for="exampleInputName1">Slug</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="slug" wire:model="slug">
            
              </div>
            <div class="form-group">
                <label for="exampleInputName1">Price  <span style="color: red">*</span></label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" wire:model="price">
                @error('price') <span class="error" style="color: red">{{ $message }}</span> @enderror
              </div>
            <div class="form-group">
                <label for="exampleTextarea1">Description <span style="color: red">*</span></label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" wire:model="description"></textarea>
                @error('description') <span class="error" style="color: red">{{ $message }}</span> @enderror
              </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="input-submit" class="form-label"> Images </label>
                <input class="form-control" type="file" wire:model="newimage" id="input-file">
                @if ($newimage)
                   <img src="{{ $newimage->temporaryUrl() }}" width="120" />
               @else
                   <img src="{{ asset('/images/product') }}/{{ $image }}" width="120" alt="">
               @endif
            </div>
        
            <button type="submit" class="btn btn-primary mr-2 mt-2">Submit</button>
            
        </form>
        </div>
      </div>
    </div>
    
    
      
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Select 2</h4>
          
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Typeahead</h4>
          <p class="card-description"> A simple suggestion engine </p>
          
        </div>
      </div>
    </div>
  </div>