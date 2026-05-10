<div class="sidebar d-flex flex-column align-items-center">
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('company.show') }}">Companies</a>
    <a href="{{ route('retail.show') }}">Retails</a>
    <a href="{{ route('printLabel') }}">Print Label</a>

    <form method="POST" action="{{ route('logout') }}" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">
            Log Out
        </button>
    </form>
</div>