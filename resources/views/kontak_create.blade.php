@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Data</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama: </label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nik">NIK: <i>5 digit</i></label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir: </label>
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="form-group">
                    <label for="lahir">Tanggal Lahir: <i>Y-m-d</i></label>
                    <textarea class="form-control" id="lahir" name="lahir"></textarea>
                </div>
                <div class="form-group">
                    <label for="umur">Umur: </label>
                    <textarea class="form-control" id="umur" name="umur"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat: </label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection