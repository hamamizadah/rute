@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Selamat datang di Website Pencinta Alam</h1>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Filter Rute</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="form-group">
                                <label for="region">Filter wilayah:</label>
                                <select name="region" id="region" class="form-control">
                                    <option value="">Semua Wilayah</option>
                                    <option value="gunung">Gunung</option>
                                    <option value="lembah">Lembah</option>
                                    <option value="hutan">Hutan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="level">Filter level:</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="">Semua Level</option>
                                    <option value="mudah">Mudah</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="sulit">Sulit</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Rute</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Wilayah</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($rutes as $rute) --}}
                                        <tr>
                                            {{-- <td>{{ $rute->name }}</td> --}}
                                            <td>Jalur A</td>
                                            {{-- <td>{{ $rute->region }}</td> --}}
                                            <td>Gunung</td>
                                            {{-- <td>{{ $rute->level }}</td> --}}
                                            <td>Mudah</td>
                                            <td>
                                                {{-- <a href="{{ route('rute.show', $rute) }}" class="btn btn-primary btn-sm">Lihat Detail</a> --}}
                                                <a href="" class="btn btn-primary btn-sm">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jalur B</td>
                                            <td>Gunung</td>
                                            <td>Mudah</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">Lihat Detail</a>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>

    <script>
        // Kode JavaScript untuk menampilkan peta menggunakan Leaflet
        var map = L.map('map').setView([-6.2088, 106.8456], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
    </script>
@endsection
