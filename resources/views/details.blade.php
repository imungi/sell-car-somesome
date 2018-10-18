@extends("baselayout")

@section("content")

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img-top" src="/storage/images/{{$product->photo}}" alt="gambar">
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->price}}</p>
                            {{--useless button, pengennya sih ketika ditekan trus nampilin nomor hp--}}
                            <a href="#" class="btn btn-primary btn-block" data-toggle="button">Beli</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <p class="card-text">{{$product->detail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="/storage/images/{{$product->user->photo}}" alt="gambar penjual">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">{{$product->user->name}}</p>
                            {{--karena tombol di atas ga bisa ditekan pakenya yg ini aja--}}
                            <p class="card-text">{{$product->user->phone}}</p>
                            <p class="card-text">{{$product->user->location}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection