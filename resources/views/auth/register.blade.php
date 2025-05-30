@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Enter your name" class="form-control mb-2" required>

                    <input type="text" name="email" placeholder="Enter your email" class="form-control mb-2" required>

                    <input type="password" name="password" placeholder="Enter your password" class="form-control mb-2" required>
                    
                    <button class="btn btn-primary w-100" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
