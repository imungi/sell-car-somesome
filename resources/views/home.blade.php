@extends("baselayout")

@section("content")

    <div class="row">
        @foreach($products as $product)
            @if($product->is_sold==false)
                <div class="col-md-4">
                    <div class="card text-center">
                        <a href="/details/{{$product->id}}"><img class="card-img-top img-thumbnail" src="/storage/images/{{$product->photo}}" alt="gambar"></a>
                        <div class="card-body">
                            <a href="/details/{{$product->id}}"><h5 class="card-title">{{$product->name}}</h5></a>
                            <p class="card-text">Rp.{{$product->price}},-</p>
                            <a href="/details/{{$product->id}}" class="btn btn-primary">Lengkapnya...</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection