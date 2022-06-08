
@extends('layouts.index')
@section('content')
<!-- Button trigger modal -->
<button type="button" style="margin-left : 950px;" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add Banner <i class=" fas fa-plus-circle"></i>
</button>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Sub Categories</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>Title</th>
                          <th>Description</th>
                          <th>Slug</th>
                          <th>Status</th>
                          <th>Image</th>
                        
                          <th >Action</th> 
                        </tr>
                    </thead>
                    <tbody>

                          @foreach ($banners as $banner)


                          <tr>
                            
                              <td>{{$banner->title}}</td>

                              <td>{{$banner->description}}</td>
                              <td>{{$banner->slug}}</td>
                              <td>{{$banner->status}}</td>
                              <td><img src="{{asset('storage/banners/'.$banner->photo)}}" height="50px" width="100px"></td>
                              <td><a class="pr-2" href="/banners/{{$banner->id}}/delete"><i class="fas fa-trash " style="color: #eb0f3f" > </i></a><a href="/banners/{{$banner->id}}/edit" style="margin-left:10px"><i class="fas fa-edit" style="color: #1e0feb"></i></a></td>
                        
                        </tr>

                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Title</th>
                          <th>Description</th>
                          <th>Slug</th>
                          <th>Image</th>
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Banner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="/banners" method="POST" enctype="multipart/form-data">
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
                            class="col-sm-3 text-end control-label col-form-label">image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1"
                            class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control"></textarea>
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
