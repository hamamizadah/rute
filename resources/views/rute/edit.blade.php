<!-- resources/views/rute/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Edit Rute</h2>
            
            <form action="{{ route('rute.update', $rute) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Rute:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $rute->name }}" required>
                </div>
                <div class="form-group">
                    <label for="region">Wilayah:</label>
                    <input type="text" name="region" id="region" class="form-control" value="{{ $rute->region }}" required>
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                    <select name="level" id="level" class="form-control" required>
                        <option value="mudah" {{ $rute->level === 'mudah' ? 'selected' : '' }}>Mudah</option>
                        <option value="sedang" {{ $rute->level === 'sedang' ? 'selected' : '' }}>Sedang</option>
                        <option value="sulit" {{ $rute->level === 'sulit' ? 'selected' : '' }}>Sulit</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
