@extends('template')

@section('menu5', 'active')

@section('judul', 'Tambah Nilai')

@section('konten')
<div class="col-lg-12">
    <div class="card">
        <div class="card-close">
            <div class="dropdown">
                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow">
                    <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                    <a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                </div>
            </div>
        </div>
        <div class="card-header d-flex align-items-center">
            <h3 class="h4">Form Tambah Nilai</h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="post" action="/admin/store_nilai">
                @csrf
                <!-- Dropdown Siswa -->
                <div class="form-group">
                    <label class="col-sm-3 form-control-label">Siswa</label>
                    <div class="col-sm-9">
                        <select name="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
                            <option value="" selected disabled>Pilih Siswa</option>
                            @foreach($siswa as $item)
                                <option value="{{ $item->id }}" {{ old('siswa_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nis }} - {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('siswa_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Dropdown Guru -->
                <div class="form-group">
                    <label class="col-sm-3 form-control-label">Guru</label>
                    <div class="col-sm-9">
                        <select name="guru_id" class="form-control @error('guru_id') is-invalid @enderror">
                            <option value="" selected disabled>Pilih Guru</option>
                            @foreach($guru as $item)
                                <option value="{{ $item->id }}" {{ old('guru_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('guru_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Dropdown Mata Pelajaran -->
                <div class="form-group">
                    <label class="col-sm-3 form-control-label">Mata Pelajaran</label>
                    <div class="col-sm-9">
                        <select name="mapel_id" class="form-control @error('mapel_id') is-invalid @enderror">
                            <option value="" selected disabled>Pilih Mata Pelajaran</option>
                            @foreach($mapel as $item)
                                <option value="{{ $item->id }}" {{ old('mapel_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('mapel_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Input Nilai -->
                <div class="form-group">
                    <label class="col-sm-3 form-control-label">Nilai</label>
                    <div class="col-sm-9">
                        <input type="number" name="nilai" placeholder="Masukkan Nilai" autocomplete="off" class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai') }}">
                        @error('nilai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-3">
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
