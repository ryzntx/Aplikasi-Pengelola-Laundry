@extends('layouts.master')
@section('title', 'Manajemen Pelanggan')
@section('header_title', 'Manajemen Pelanggan')

@section('content')
    <div class="main-content">
        <section class="section" style="margin-top: 0px">
            <div class="section-header">
                <h1>Manajemen Pelanggan</h1>
            </div>

            <a href="{{url('manajemen_pelanggan/create')}}" class="btn btn-icon icon-left btn-primary mb-4"><i class="fas fa-plus"></i>Tambah member baru</a>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body table-responsive-sm">
                            <table id="class-table" class="table table-bordered" width="100%" collspacing="0">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telepon</th>
                                </tr>
                                </thead>
                                {{-- <tbody>
                                    @forelse ($kelas as $kls)
                                    <tr>
                                        <td>{{ $kls->id}} </td>
                                        <td>{{ $kls->class}} </td>
                                    </tr>

                                    @empty

                                    @endforelse
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('addon-script')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush