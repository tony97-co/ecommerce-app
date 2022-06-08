@extends('layouts.index')
@section('content')
<div class="row" style="margin: 30px 10px 30px 100px">
    <div class="col-md-9">
        <div class="card">
            <form class="form-horizontal" action="/categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title" style="color: #27a9e3">Add New Category </h4>
                    <div class="form-group row">
                        <label for="title"
                            class="col-sm-3 text-end control-label col-form-label"> Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="fname"
                                placeholder=" category title Here">
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
                            class="col-sm-3 text-end control-label col-form-label">Summary</label>
                        <div class="col-sm-9">
                            <textarea name="summary" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger text-white">Cancel</button>
                    </div>
                </div>
            </form>
        </div>

@endsection
