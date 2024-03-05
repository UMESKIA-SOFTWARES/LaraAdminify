@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Current Version</h4>
            </div>
            <div class="card-body">
                <p>LaraAdminify Version: {{ $currentVersion }}</p> <!-- Display current version -->
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Latest Version</h4>
            </div>
            <div class="card-body">
                <p>LaraAdminify Latest Version: {{ $latestVersion }}</p> <!-- Display latest version -->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update LaraAdminify</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
