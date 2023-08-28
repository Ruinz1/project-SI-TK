@section('title', 'Data wali')
@section('pages', 'Data wali')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data wali</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat & Tanggal Lahir</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Kantor</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon Rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon Kantor</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Whatsapp</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->nama_lengkap }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->agama }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->tempat_lahir }} , {{ \Carbon\Carbon::parse($item->keluarga->wali->tanggal_lahir)->isoFormat('Do MMMM YYYY')}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->pekerjaan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->alamat }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->alamat_kantor }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->nomor_telepon_rumah }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->nomor_telepon_kantor }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->no_whatsapp }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->wali->status }}</td>
                    <td>
                        @if($item->keluarga->wali->status == "Pending")
                        <a href="{{ url('admin/verifikasi-wali/'.$item->keluarga->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
                        @else
                        
                        @endif
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

