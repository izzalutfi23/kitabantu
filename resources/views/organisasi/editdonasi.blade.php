@extends('organisasi/layout/main')
@section('title', 'Edit Donasi | Organisasi')
@section('container')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Edit Donasi</h2>
                            <p class="mb-md-0">Silahkan ubah data jika ada data yang ingin diubah!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" enctype="multipart/form-data" action="{{url('/organisasi/updatedonasi/'.$donasi->id)}}" method="POST">
                        @csrf
                        @method('patch')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="hidden" name="id_user" value="{{Auth()->user()->id}}">
                                <input type="text" class="form-control" value="{{$donasi->judul}}" name="judul">
                                @error('judul')
                                <small class="form-text text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto">
                                @error('foto')
                                <small class="form-text text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="4">{{$donasi->keterangan}}</textarea>
                                @error('keterangan')
                                <small class="form-text text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Target (Rp)</label>
                                <input type="number" class="form-control" name="target" value="{{$donasi->target}}" placeholder="Cth : 100000">
                                @error('target')
                                <small class="form-text text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Batas Waktu</label>
                                <input type="date" class="form-control" name="batas_waktu" value="{{$donasi->batas_waktu}}">
                                @error('batas_waktu')
                                <small class="form-text text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Edit</button>
                            <button type="reset" class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a>
                from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection()
