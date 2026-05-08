@extends('master')

@section('title', 'Edit Retail')

@section('main-content')

<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    Edit Retail
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">

                    <form action="{{ route('retail.update')}}" method="POST">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="retail_id" value="{{ $retail->id }}">

                        <!-- Retail Name -->
                        <div class="mb-3">
                            <label class="form-label">Retail Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $retail->name }}" placeholder="Enter retail name" required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $retail->address }}" required>
                        </div>

                        <!-- Contact -->
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{ $retail->contact }}" placeholder="Enter contact number" required>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-success w-100">
                            Save Retail
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
