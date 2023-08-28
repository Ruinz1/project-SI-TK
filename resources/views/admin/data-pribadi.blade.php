@section('title', 'Data pribadi')
@section('pages', 'Data pribadi')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data pribadi </h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Membaca Latin</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Membaca Hijaiyah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Menggambar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Angka</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Buku Latin yang sering dibacakan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Menulis</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Berhitung</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Berwudhu</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Tata Cara Solat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Hafalan Juz Am'ma</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Hafalan Doa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doa Harian yang sudah hafal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hobi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kemampuan Hafalan Murotal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berlangganan Majalah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_membaca_latin }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_membaca_hijaiyah }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_menggambar }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_angka }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->judul_buku_latin }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_menulis }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->kemampuan_berhitung }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->tata_cara_berwudhu }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->tata_cara_solat }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->hafalan_juzamma }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->hafalan_doa }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->doa_harian_hafal }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->hobi }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->hafal_murotal }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->berlangganan_majalah }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->pribadi->status }}</td>
                    <td>
                        @if($item->pribadi->status == "Pending")
                        <a href="{{ url('admin/verifikasi-pribadi/'.$item->pribadi->id) }}" class="btn btn-info btn-sm">Verifikasi</a>
                        @endif
                        <a href="{{ url('admin/data-detail-pribadi/'.$item->id) }}" class="btn btn-success btn-sm">Lihat detail</a>
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

