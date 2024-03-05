@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome,  <?php
                        use App\Models\User;
                        $user_id = session()->get('user_id');
                        $user = User::where('user_id', $user_id)->first();
                        //GET USER NAME
                        echo  $user->username;
                        ?></h4>
                </div>
                <div class="card-body">
                    <p>Here you can manage your application efficiently using the LaraAdminify control panel.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
