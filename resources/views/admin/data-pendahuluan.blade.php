@section('title', 'Data pendahuluan')
@section('pages', 'Data pendahuluan')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data pendahuluan</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Latar Belakang</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harapan bidang Keilmuann</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harapan bidang Keilmuann Agama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harapan bidang Keilmuann Sosial</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jangka Waktu Belajar di TKIT AL-Qolam</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->latar_belakang }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->harapan_keilmuan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->harapan_keilmuan_agama }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->harapan_keilmuan_sosial }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->jangka_waktu_belajar }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pendahuluan->status }}</td>
                    <td>
                        @if($item->pendahuluan->status == "Pending")
                        <a href="{{ url('admin/verifikasi-pendahuluan/'.$item->pendahuluan->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
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

