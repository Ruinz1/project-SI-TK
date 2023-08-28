@section('title', 'Data Peserta')
@section('pages', 'Data Peserta')
@extends('layouts.admin.admin-app')
@section('content')
 @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
  @endif
 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data Peserta </h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat & Tanggal Lahir</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Panggilan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berat Badan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tinggi Badan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Saudara kandung</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Saudara tiri</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Anak ke -</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Saudara dan Usia</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alergi yang diderita</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penyakit yang diderita</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Informasi Tambahan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pindahana dari</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pindah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Diterima</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelompok</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                   
                    <td class="text-sm font-weight-normal">{{ $item->nama_lengkap }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->agama }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->jenis_kelamin }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->tempat_lahir }} , {{ \Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('Do MMMM YYYY')}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->alamat }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->nama_panggilan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->berat_badan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->tinggi_badan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->jumlah_saudara_kandung }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->jumlah_saudara_tiri }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->urutan_lahir }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->nama_saudara_dan_usia }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->alergi }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->penyakit }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->informasi }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->kategori_peserta }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pindahan_tk }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->tanggal_pindahan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->tanggal_diterima }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->kelompok }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->status_all }}</td>
                    <td class="text-sm font-weight-normal">
                      @if($item->keluarga->ayah->status == "Active" && $item->keluarga->ibu->status == "Active" 
                      && $item->pendahuluan->status == "Active" && $item->pribadi->status == "Active"
                      && $item->survei->status == "Active" && $item->pendanaan->status == "Active" OR 
                      $item->keluarga->ayah->status == "Active" && $item->keluarga->ibu->status == "Active" && $item->keluarga->wali->status == "Active"  
                      && $item->pendahuluan->status == "Active" && $item->pribadi->status == "Active"
                      && $item->survei->status == "Active" && $item->pendanaan->status == "Active")
                        @if($item->status_all == "Pending")
                        <a href="{{ url('admin/verifikasi-peserta/'.$item->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
                        @endif
                      @endif
                      <a href="{{ url('admin/delete-peserta/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                      <a href="{{ url('admin/edit-peserta/'.$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection

