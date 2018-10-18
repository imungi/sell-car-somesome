@extends("baselayout")

@section("content")


    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<div class="card">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-9">--}}
                        {{--<div class="card-body">--}}
                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-md-8">
            {{--list barang--}}
            @foreach($user->products as $product)
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-2">
                        <a href="/details/{{$product->id}}"><img class="card-img-top" src="/storage/images/{{$product->photo}}" alt="barang"></a>
                    </div>
                    <div class="col-md-5">
                        <a class="card-text" href="/details/{{$product->id}}">{{$product->name}}</a>
                    </div>
                    <div class="col-md-2">
                        @if($product->is_sold == true)<a href="/marksold/{{$product->id}}" class="btn btn-success">sudah terjual</a>
                        @else<a href="/marksold/{{$product->id}}" class="btn btn-info">tandai terjual</a>
                        @endif
                    </div>
                    <div class="col-md-1">
                        <a href="/editproduct/{{$product->id}}" class="btn btn-warning">ubah</a>
                    </div>
                    <div class="col-md-1">
                        <a href="/deleteproduct/{{$product->id}}" class="btn btn-danger">hapus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="/storage/images/{{$user->photo}}" alt="gambar penjual">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">{{$user->name}}</p>
                            <p class="card-text">{{$user->phone}}</p>
                            <p class="card-text">{{$user->location}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection