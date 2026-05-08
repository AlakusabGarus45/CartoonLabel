@extends('master')

@section('title', 'Edit Company')

@section('main-content')

<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    Edit Company
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">

                    <form action="{{ route('company.update')}}" method="POST">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="company_id" value="{{ $company->id }}">

                        <!-- Retail Name -->
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $company->address }}" required>

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
