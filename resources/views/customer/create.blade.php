@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create</h3>

            <div class="card-tools">
                <a href="{{ route('customers.index') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    BACK
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <h1>Customer List</h1>
        </div>
    </div>
@endsection
