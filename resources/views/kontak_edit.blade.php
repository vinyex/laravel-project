@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Data</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('kontak.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="nik">NIK: <i>5 digit</i></label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ $datas->nik }}">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir: </label>
                    <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $datas->tempat }}">
                </div>
                <div class="form-group">
                    <label for="lahir">Tanggal Lahir: <i>Y-m-d</i></label>
                    <input type="text" class="form-control" id="lahir" name="lahir" value="{{ $datas->lahir }}">
                </div>
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="text" class="form-control" id="umur" name="umur" value="{{ $datas->umur }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection