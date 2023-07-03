@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">Dashboard</h2>
        
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Rute Berdasarkan Kategori</h6>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" id="mudah-tab" data-toggle="pill" href="#mudah" role="tab" aria-controls="mudah" aria-selected="true">Mudah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sedang-tab" data-toggle="pill" href="#sedang" role="tab" aria-controls="sedang" aria-selected="false">Sedang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sulit-tab" data-toggle="pill" href="#sulit" role="tab" aria-controls="sulit" aria-selected="false">Sulit</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="mudah" role="tabpanel" aria-labelledby="mudah-tab">
                                <div class="card-deck">
                                    <!-- Daftar rute kategori mudah -->
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 1</h5>
                                            <p class="card-text">Deskripsi rute 1</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 2</h5>
                                            <p class="card-text">Deskripsi rute 2</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sedang" role="tabpanel" aria-labelledby="sedang-tab">
                                <div class="card-deck">
                                    <!-- Daftar rute kategori sedang -->
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 3</h5>
                                            <p class="card-text">Deskripsi rute 3</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 4</h5>
                                            <p class="card-text">Deskripsi rute 4</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sulit" role="tabpanel" aria-labelledby="sulit-tab">
                                <div class="card-deck">
                                    <!-- Daftar rute kategori sulit -->
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 5">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 5</h5>
                                            <p class="card-text">Deskripsi rute 5</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Rute 6">
                                        <div class="card-body">
                                            <h5 class="card-title">Rute 6</h5>
                                            <p class="card-text">Deskripsi rute 6</p>
                                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="dashboard-links">
                    <a href="{{ route('rute.create') }}" class="btn btn-primary">Tambah Rute</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Kode JavaScript
    </script>
@endsection
