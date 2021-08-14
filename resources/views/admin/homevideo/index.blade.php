@extends('layouts.app')

@section('title','Home Video')


@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endpush


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.backend.msg')
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Select Home Video</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table" style="width:100%">
                                <thead class="text-primary">
                                    
                                    <th class="text-center">Title Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Click For Show</th>

                                </thead>
                                <tbody>
                                    @foreach ($videos as $key=>$video)
                                        <tr>
                                            <td class="text-center">{{ $video->name }}</td>
                                            
                                            <td class="text-center">
                                                @if ($video->status == true)
                                                    <span class="btn btn-success"><strong>Showing on the Homepage</strong></span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($video->status == false)
                                                    <form action="{{ route('homevideo.update', $video->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-info btn-sm"><i class="material-icons">done</i></button>
                                                    </form>
                                                @endif
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