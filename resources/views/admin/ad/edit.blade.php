@extends('layouts.admin')

@section('content')
    <style>
        .card-ad-edit {
            box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
        }
    </style>

    <div class="container py-4">
        <div class="card-ad-edit row bg-white" style="border-radius: 1rem">
            <div class="table-header d-flex justify-content-between py-3">
                <h4 class="m-0 align-self-center fw-bold">Edit Ad</h4>
            </div>
            <div class="py-3 px-5">
                <form action="{{ route('admin.ad.update', ['id' => $ad->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3 row justify-content-center">
                        <label for="name" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Please Enter Name..." value="{{ $ad->name }}">
                            @if ($errors->has('name'))
                                <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label for="description" class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-6">
                            <input type="text" name="description" class="form-control" placeholder="Please Enter Description......"  value="{{ $ad->description }}">
                            @if ($errors->has('description'))
                                <span class="help-block text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label for="url" class="col-sm-2 col-form-label">URL:</label>
                        <div class="col-sm-6">
                            <input type="text" name="url" class="form-control" placeholder="Please Enter URL..."  value="{{ $ad->url }}">
                            @if ($errors->has('url'))
                                <span class="help-block text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label for="image" class="col-sm-2 col-form-label">Image:</label>
                        <div class="col-sm-6">
                            <input type="file" name="image" class="form-control" placeholder="Please Enter Image...">
                            @if ($errors->has('image'))
                                <span class="help-block text-danger">{{ $errors->first('image') }}</span>
                            @endif
                            <img src="{{ asset('uploads/Ad/' . $ad->image) }}" width="70px" height="70px"
                            alt="Image">
                        </div>
                    </div>

                    <div class="mb-3 row justify-content-center">
                        <label class="col-sm-2 col-form-label">Active:</label>
                        <div class="col-sm-6">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" type="radio" id="active"
                                    name="active" {{ $ad->active == 1 ? 'checked' : '' }}>
                                <label for="active" class="custom-control-label">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="0" type="radio" id="no_active"
                                    name="active" {{ $ad->active == 0 ? 'checked' : '' }}>
                                <label for="no_active" class="custom-control-label">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mt-5 row d-flex">
                        <div class="col-sm offset-sm-2">
                            <a href="{{ route('admin.ad.index') }}" class="btn btn-light border">Back</a>
                        </div>

                        <div class="col-sm offset-sm-2">
                            <button type="submit" class="btn btn-dark text-white">Update Ad</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
