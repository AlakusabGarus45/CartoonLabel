@extends('master')

@section('title', 'Show Retail')

@section('main-content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Retail List</h5>
                
            <a href="{{ route('retail.add') }}" class="btn btn-primary btn-sm">
                Add Retail
            </a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">

                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $sn = 1; @endphp

                        @foreach($retails as $retail)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $retail->name }}</td>
                                <td>{{ $retail->address }}</td>
                                <td>{{ $retail->contact }}</td>
                                <td>
                                    <a href="{{ route('retail.edit', $retail->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('retail.delete', $retail->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
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

@endsection
