<div class="row">
              
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic form elements</h4>
          <p class="card-description"> Basic form elements </p>
          <form class="forms-sample" wire:submit.prevent="updateProduct">
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model="name" wire:keyup="generateslug">
                @error('name') <span class="error">{{ $message }}</span> @enderror
              </div>
            <div class="form-group">
                <label for="exampleInputName1">Slug</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="slug" wire:model="slug">
            
              </div>
            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Price" wire:model="price">
                @error('price') <span class="error">{{ $message }}</span> @enderror
              </div>
            <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" wire:model="description"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror
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
        
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
        </div>
      </div>
    </div>
    
    
      
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Select 2</h4>
          <div class="form-group">
            <label>Single select box using select 2</label>
            <select class="js-example-basic-single" style="width:100%">
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
              <option value="AM">America</option>
              <option value="CA">Canada</option>
              <option value="RU">Russia</option>
            </select>
          </div>
          <div class="form-group">
            <label>Multiple select using select 2</label>
            <select class="js-example-basic-multiple" multiple="multiple" style="width:100%">
              <option value="AL">Alabama</option>
              <option value="WY">Wyoming</option>
              <option value="AM">America</option>
              <option value="CA">Canada</option>
              <option value="RU">Russia</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Typeahead</h4>
          <p class="card-description"> A simple suggestion engine </p>
          <div class="form-group row">
            <div class="col">
              <label>Basic</label>
              <div id="the-basics">
                <input class="typeahead" type="text" placeholder="States of USA">
              </div>
            </div>
            <div class="col">
              <label>Bloodhound</label>
              <div id="bloodhound">
                <input class="typeahead" type="text" placeholder="States of USA">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>