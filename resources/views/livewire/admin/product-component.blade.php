<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Basic Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        
      
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product table</h4>
              
              <div class="table-responsive">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Image </th>
                      <th> Product name </th>
                      <th> Price </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($product as $products)
                    <tr>
                        <td> {{$products->id}} </td>
                        <td> <img src="{{ asset('/images/product') }}/{{ $products->image }}"
                            class="img-fluid" alt="" width="120"></td>
                        <td> {{$products->name}}</td>
                        <td> {{$products->price}}</td>  
                        <td><a class="badge badge-success" href="{{ route('admin.edit-product', ['product_slug' => $products->slug]) }}">Edit</a>
                        <a wire:click.prevent="remove({{ $products->id }})" class="badge badge-danger">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>