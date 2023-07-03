<!-- resources/views/rute/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Detail Rute</h2>
            
            <div class="rute-details">
                <h3>Nama Rute: {{ $rute->name }}</h3>
                <p>Wilayah: {{ $rute->region }}</p>
                <p>Level: {{ $rute->level }}</p>
                
                <div id="map" style="height: 400px;"></div>
                
                <div class="rute-photos">
                    <h4>Galeri Foto</h4>
                    @foreach ($rute->photos as $photo)
                        <img src="{{ asset('storage/photos/' . $photo->image) }}" alt="{{ $photo->caption }}" class="img-thumbnail">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        // Inisialisasi peta menggunakan Leaflet dan tampilkan rute
        var map = L.map('map').setView([{{ $rute->latitude }}, {{ $rute->longitude }}], 10);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
        var rute = L.geoJSON({!! $rute->route !!}).addTo(map);
        map.fitBounds(rute.getBounds());
    </script>
@endsection
