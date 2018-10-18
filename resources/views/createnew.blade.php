@extends("baselayout")

@section("content")

    <form action="/saveproduct" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">gambar barang</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">nama barang</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="nama barang">

                        <label for="exampleFormControlInput1">harga barang</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="harga barang dalam rupiah">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">detail produk</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="detail"></textarea>
            </div>
        </div>
    </div>
        <div class="form-group">
            <p>tekan tombol submit untuk memasang iklan</p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


@endsection