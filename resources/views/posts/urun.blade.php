@extends ('layouts.master')
@section('content')

    <h1>Urun</h1>

    <a class="btn btn-primary" href="http://newlaravel.test/urun?gor=urun" >See the products</a>
   {{-- <a href="/urun?gor=urun">Urun Gor</a>--}}

    @if(request('gor') == "urun")
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection
