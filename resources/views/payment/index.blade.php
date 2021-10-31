@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Payment</h3>

            <div class="card-tools">
                <a href="{{ route('payments.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Create new Payment
                </a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <h1>Payment List</h1>
        </div>
    </div>
@endsection
