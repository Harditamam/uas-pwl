@extends('template')

@section('menu5', 'active')

@section('judul', 'Edit Nilai')

@section('konten')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Nilai</h3>
        </div>
        <div class="card-body">
            <form action="/admin/update_nilai/{{ $nilai->id }}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Dropdown Siswa -->
                <div class="form-group">
                    <label>Siswa</label>
                    <select name="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
                        <option value="" disabled>Pilih Siswa</option>
                        @foreach($siswa as $item)
                        <option value="{{ $item->id }}" {{ $nilai->user_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nis }} - {{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Dropdown Guru -->
                <div class="form-group">
                    <label>Guru</label>
                    <select name="guru_id" class="form-control @error('guru_id') is-invalid @enderror">
                        <option value="" disabled>Pilih Guru</option>
                        @foreach($guru as $item)
                        <option value="{{ $item->id }}" {{ $nilai->guru_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                        @endforeach
                    </select>
                    @error('guru_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Dropdown Mata Pelajaran -->
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <select name="mapel_id" class="form-control @error('mapel_id') is-invalid @enderror">
                        <option value="" disabled>Pilih Mata Pelajaran</option>
                        @foreach($mapel as $item)
                        <option value="{{ $item->id }}" {{ $nilai->mapel_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                        @endforeach
                    </select>
                    @error('mapel_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input Nilai -->
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="number" name="nilai" value="{{ $nilai->nilai }}" class="form-control @error('nilai') is-invalid @enderror">
                    @error('nilai')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/admin/nilai" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
