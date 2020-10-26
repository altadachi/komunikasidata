@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:70px">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Data Gagal di input.
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('tgskomdat.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <br>
                            <input type="text" name="judul" class="form-control form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <br>
                            <input type="text" name="kategori" class="form-control form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <br>
                            <textarea name="keterangan" id="comment" class="form-control form-control"
                                rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Pilih Gambar</label>
                            <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                            <img id="previewImg" alt="Gambar" style="max-width: 130px;margin-top:20px;">
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Simpan">
                        <a href="{{url('/view-data')}}" type="button" class="btn btn-danger float-right">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>


</div>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file)
        {
            var reader = new FileReader();
            reader.onload =function(){
                $("#previewImg").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
