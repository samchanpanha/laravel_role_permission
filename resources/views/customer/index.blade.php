@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer</h3>

            <div class="card-tools">
                <a href="{{ route('customers.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Create new Customer
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            {{-- table responsive --}}
            <table class="table table-hover text-nowrap table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-success"><i
                                        class="fas fa-eye"></i></a>
                                <a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

        </div>
    </div>
@endsection
