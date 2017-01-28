@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Patients List</div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif
                            @if(Session::has('message_failure'))
                                <div class="alert alert-danger">
                                    {{ Session::get('message_failure') }}
                                </div>
                            @endif
                        </div>
                        <table class="table table-bordered data-table" id="patients">
                            <thead>
                            <tr>
                                <th>Patient Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function () {
        $('#patients').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('patients.data') !!}',
            columns: [
                {data: 'patient_id', name: 'patient_id'},
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush