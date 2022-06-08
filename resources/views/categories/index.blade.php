@extends('layouts.index')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                          <th>Title</th>
                          <th>Summrey</th>
                          <th>Slug</th>
                          <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>

                          @foreach ($categories as $category)


                          <tr>
                              <td>{{$category->title}}</td>

                              <td>{{$category->summary}}</td>
                              <td>{{$category->slug}}</td>
                              <td><img src="{{asset('storage/categories/'.$category->photo)}}" height="50px" width="100px"></td>

                        </tr>

                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Title</th>
                          <th>Summrey</th>
                          <th>Slug</th>
                          <th>Image</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    </div>
  </div>
@endsection
