@extends('layouts.master')
@section('title', 'Manajemen Produk')

@section('content')

<div class="main-content">
    <section class="section" style="margin-top: 0px">
        <div class="section-header">
            <h1>Tambah produk baru</h1>
        </div>

        <a href="{{ route('manajemen_produk.index')}}" class="btn btn-icon icon-left btn-primary mb-4"><i
            class="fas fa-arrow-left"></i>Kembali</a>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form action="{{ route('manajemen_produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="nama_paket" value="{{ $produk->nama_paket }}">
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Produk</label>
                                <select class="form-control select2" name="jenis" value="{{ $produk->jenis }}" >
                                    <option value="kiloan">Kiloan</option>
                                    <option value="selimut">Selimut</option>
                                    <option value="bed_cover">Bed Cover</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="lain">Lain-lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cabang Toko</label>
                                <select class="form-control select2" name="id_outlet" value="{{ $produk->toko['nama'] }}">
                                    @foreach ($toko as $tk)
                                    <option value="{{$tk->id}}">{{$tk->nama}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
