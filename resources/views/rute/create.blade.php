@extends('layouts.app')

@section('content')
    <h1>Tambah Rute</h1>

    {{-- <form action="{{ route('tambah_rute') }}" method="POST"> --}}
    <form action="" method="POST">    
        @csrf
        <div class="form-group">
            <label for="nama">Nama Rute</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="wilayah">Wilayah</label>
            <select type="text" class="form-control" id="wilayah" name="wilayah" required>
                <option value="">-- Pilih Wilayah --</option>
                <option value="Gunung">Gunung</option>
                <option value="Lembah">Lembah</option>
                <option value="Hutan">Hutan</option> 
            </select>
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select class="form-control" id="level" name="level" required>
                <option value="">-- Pilih Level --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Ahli">Ahli</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
