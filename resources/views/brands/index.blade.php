
@extends('layouts.index')
@section('content')

<div class="page-breadcrumb">
          <div class="row mb-3">
            <div class="col-12 d-flex no-block align-items-center">
            
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home <i class="mdi mdi-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Brands
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>


<!-- Button trigger modal -->
<button type="button" style="margin-left : 900px;" class="btn btn-primary mb-1 " data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Brand <i class=" fas fa-plus-circle"></i>
</button>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Brands</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>Title</th>
                       
                          <th>Slug</th>
                          <th>Status</th>
                          <th>Logo</th>
                        
                          <th >Action</th> 
                        </tr>
                    </thead>
                    <tbody>

                          @foreach ($brands as $brand)


                          <tr>
                            
                              <td>{{$brand->title}}</td>
                              <td>{{$brand->slug}}</td>
                              <td>{{$brand->status}}</td>
                              <td><img src="{{asset('storage/brands/'.$brand->logo)}}" height="50px" width="100px"></td>
                              <td><a class="pr-2" href="/brands/{{$brand->id}}/delete"><i class="fas fa-trash " style="color: #eb0f3f" > </i></a><a href="/brands/{{$brand->id}}/edit" style="margin-left:10px"><i class="fas fa-edit" style="color: #1e0feb"></i></a></td>
                        
                        </tr>

                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Title</th>
                       
                          <th>Slug</th>
                          <th>Logo</th>
                          <th>Status</th>
                          <th >Action</th> 
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" style="color: #f5f5f5" id="exampleModalLabel">Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="/brands" method="POST" enctype="multipart/form-data">
                @csrf

      <div class="form-group row">
                        <label for="title"
                            class="col-sm-3 text-end control-label col-form-label"> Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="fname"
                                placeholder=" banner title Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="slug"
                            class="col-sm-3 text-end control-label col-form-label"> Slug </label>
                        <div class="col-sm-9">
                            <input type="text" name="slug" class="form-control" id="fname"
                                placeholder=" custom url">
                        </div>
                    </div>

                    </div>
                    <div class="form-group row">
                        <label for="image"
                            class="col-sm-3 text-end control-label col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save </button>
                </form>
      </div>
    
      
      </div>
   
    </div>
  </div>
</div>
@endsection
