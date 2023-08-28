@section('title', 'Data survei')
@section('pages', 'Data survei')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data survei</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peserta didik tidak boleh ditunggu orrang tua/wali/baby sitster</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Orang tua wajib berpakaian Islami Ketika berada di lingkungan TKIT AL-Qolam</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peserta didik dilarang memakai perhiasan kecuali anting atau giwang</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setuju,menghadiri pertemuan wali murid 2 bulan sekali</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Selama berada di lingkungan TKIT AL-Qolam diusahakan tidak merokok</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengelola TKIT AL-Qolam akan menjadwalkan atau menggilir jadwal pemberian gizi sehat kepada wali murid sebagai bentuk pemberian infak dan shodaqohk</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mengontrol perkembangan putra-putri baik secara langsung maupun tidak langsung</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengelola TKIT AL-Qolam tidak dapat bekerja sama dalam pelaksanaan acara-acara di luar sekolah yang kurang islami</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->tidak_boleh_ditunggu }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->berpakaian_islami }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->larangan_berpakaian_perhiasan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->kehadiran_dua_bulan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->tatib_merokok}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->gizi_sehat}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->kontrol_pengembangan}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->kerja_sama}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->survei->status }}</td>
                    <td>
                        @if($item->survei->status == "Pending")
                        <a href="{{ url('admin/verifikasi-survei/'.$item->survei->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
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

