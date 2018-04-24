@extends ('layouts.master')
@section('content')

    <h1>Product</h1>

    <form method="POST" action="/product">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="name">Price:</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
            {{--<button type="submit" class="btn btn_primary">Register</button>--}}
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

        <div class="form-group">
            {{--<button type="submit" class="btn btn_primary">Register</button>--}}
            <a class="btn btn-primary" href="http://newlaravel.test/urun" >All Products</a>
        </div>
    </form>



@endsection
