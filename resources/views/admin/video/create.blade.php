@extends('layouts.app')

@section('title','Video Catelog')


@push('css')
    
@endpush


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.backend.msg')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Add New Catelog</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Title Name</label>
                                    <input type="text" class="form-control" name="title_name">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Content</label>
                                    <input type="text" class="form-control" name="content">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">Image</label><br>
                                    <input type="file" name="picture">
                                </div>
                            </div>
                            <a href="{{ route('video.index') }}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush