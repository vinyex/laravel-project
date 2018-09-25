@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Data Warga</h1>
            <br />
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <form action="{{url('kontak/import')}}" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    {{csrf_field()}}
                                    <input type="file" name="imported-file"/>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" type="submit">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <form action="{{url('kontak/export')}}" enctype="multipart/form-data">
                            <button class="btn btn-success" type="submit">Export</button>
                         </form>
                    </div>
                </div>

            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tempat</th>
                    <th>Lahir</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->nik }}</td>
                        <td>{{ $datas->tempat }}</td>
                        <td>{{ $datas->lahir }}</td>
                        <td>{{ $datas->umur }}</td>
                        <td>{{ $datas->alamat }}</td>
                        <td>
                            <form action="{{ route('kontak.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kontak.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection