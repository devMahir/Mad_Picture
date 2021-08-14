@extends('layouts.app')

@section('title','Quotes')


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
                        <h4 class="card-title ">All Quotes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table" style="width:100%">
                                <thead class="text-primary">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Job TItle</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">Division</th>
                                    <th class="text-center">Budget Ranged</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Updated At</th>
                                    <th class="text-center">Notification</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $key=>$quote)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="text-center">{{ $quote->name }}</td>
                                            <td class="text-center">{{ $quote->jobTitle }}</td>
                                            <td class="text-center">{{ $quote->email }}</td>
                                            <td class="text-center">{{ $quote->phone }}</td>
                                            <td class="text-center">{{ $quote->companyName }}</td>
                                            <td class="text-center">{{ $quote->devision }}</td>
                                            <td class="text-center">{{ $quote->budgetRange }}</td>
                                            <td class="text-center">{{ $quote->created_at }}</td>
                                            <td class="text-center">{{ $quote->updated_at }}</td>
                                            <td class="text-center">
                                                @if ($quote->status == true)
                                                    <span style="background: #5CB85C; color: white; padding: 6px; border-radius: 6px;">Seen</span>
                                                @else
                                                    <span style="background: #F0AD4E; color: white; padding: 6px; border-radius: 6px;">Have a new message</span>
                                                @endif
                                            </td>


                                            <td class="text-center">
                                                @if (  $quote->status  == false )   
                                                    {{--  <a href="" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a> --}}
                                                    <form action="{{ route('quote.update', $quote->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-info btn-sm"><i class="material-icons">done</i></button>
                                                    </form>                    
                                                @endif
                                                <form id="delete-form-{{ $quote->id }}" action="{{ route('quote.destroy',  $quote->id ) }}" method="POST">
                                                    {{ csrf_field() }}
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