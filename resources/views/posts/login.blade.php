@extends ('layouts.master')
@section('content')

    <h1>Sign In</h1>

    <form method="POST" action="/login">
        {{csrf_field()}}

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            {{--<button type="submit" class="btn btn_primary">Register</button>--}}
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
       {{-- <div class="form-group">
            --}}{{--<button type="submit" class="btn btn_primary">Register</button>--}}{{--
            <button type="submit" class="btn btn-primary" href="http://newlaravel.test/product">Create Product</button>
        </div>--}}
    </form>

@endsection
