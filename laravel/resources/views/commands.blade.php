@extends('layouts.commands')

@section('content')
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-md-8 offset-md-2">
            <form method="GET" action="{{ url('/commands') }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search commands..." value="{{ request()->input('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="list-group">
                @forelse($commands as $command)
                    <div class="list-group-item command-item">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <h5 class="mb-1">{{ $command['name'] }}</h5>
                            <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#details-{{ $loop->index }}" aria-expanded="false" aria-controls="details-{{ $loop->index }}">
                                Details
                            </button>
                        </div>
                        <p class="mb-1">{{ $command['description'] }}</p>
                        <div class="collapse" id="details-{{ $loop->index }}">
                            <div class="mt-3">
                                <strong>Usage:</strong>
                                <p class="usage-txt">{{ $command['usage'] ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="list-group-item">
                        <p class="mb-1">No commands found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
