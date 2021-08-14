@extends('layouts.app')

@section('title','Videos')


@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endpush


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('video.create') }}" class="btn btn-info">Add New Catelog</a>
                @include('layouts.partials.backend.msg')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">All Videos</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table" style="width:100%">
                                <thead class="text-primary">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Title Name</th>
                                    <th class="text-center">Content</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Click For Hide</th>
                                    <th class="text-center">Click For Show</th>
                                    <th class="text-center">Delete</th>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $key=>$video)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="text-center">{{ $video->title_name }}</td>
                                            <td class="text-center">{{ $video->content }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('uploads/videoCatelog/'.$video->picture ) }}" style="height: 100px; width: 150px" alt="{{ $video->image }}">
                                            </td>
                                            <td class="text-center">
                                                @if ($video->status == true)
                                                    <form action="{{ route('video.update', $video->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">cancel</i></button>
                                                    </form>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($video->status == false)
                                                    <form action="{{ route('video.update', $video->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-info btn-sm"><i class="material-icons">done</i></button>
                                                    </form>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('video.destroy',  $video->id ) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                                </form>
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
</div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush