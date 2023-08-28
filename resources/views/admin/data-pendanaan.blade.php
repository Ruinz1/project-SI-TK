@section('title', 'Data pendanaan')
@section('pages', 'Data pendanaan')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data pendanaan</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pemasukan Orang Tua</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tindakan apa yang harus dilakukan agar menu makanan yang diberikan pada anak-anak tetap stabil</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alasan untuk mengatasi masalah kenaikan harga bahan pokok</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendanaan->pemasukan_ortu }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendanaan->kenaikan_konsumsi }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendanaan->infaq }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendanaan->status }}</td>
                    <td>
                        @if($item->pendanaan->status == "Pending")
                        <a href="{{ url('admin/verifikasi-pendanaan/'.$item->pendanaan->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
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

