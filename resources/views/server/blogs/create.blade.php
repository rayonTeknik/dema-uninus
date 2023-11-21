@extends('masterServer')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Card Example -->
                <div class="card mb-12">
                    <div class="card-header">
                        Edit Homepage
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title">
                            </div>


                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                            <div class="">
                                <input type="file" class="form-control mb-3" name="img">
                            </div>

                            <label class="form-label my-3 mb-3">Paragraf Utama</label>
                            <div class="w-12">
                                <textarea id="editor" placeholder="Enter the Description" rows="3" name="content"></textarea>
                            </div>

                            <label class="form-label my-3">Kategory Postingan</label>
                            <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                <option selected disabled>=== Pilih Kategory === </option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>


                            <label class="form-label my-3">Hastag Postingan</label>
                            <div class="form-check mb-3">
                                @foreach ($tags as $item)
                                    <div>
                                        <input class="form-check-input mb-3" type="checkbox" value="{{ $item->id }}"
                                            name="tags">
                                        <label class="form-check-label">{{ $item->title }}</label>
                                    </div>
                                @endforeach
                            </div>

                            <label class="form-label my-3">Status Postingan</label>
                            <div class="form-check form-switch m-3">
                                <input class="form-check-input mb-3" type="checkbox" role="switch" name="status"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Aktifkan Postingan</label>
                            </div>

                            <div class="my-3">
                                <label class="form-label">Penulis</label>
                                <input type="text" class="form-control mb-3" name="user_id">
                            </div>

                            <div class="text-center">
                                <a href="{{ route('index.post') }}"
                                    class="btn btn-warning my-4 mb-2">Kembali</a>
                                <button type="sumbit" class="btn btn-success w-30 my-4 mb-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#editor' ),{
    
        })
        .catch( error => {
                
        });
    </script>
@endsection
