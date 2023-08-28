@section('title', 'Data detail pribadi')
@section('pages', 'Data detail pribadi')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data pribadi : {{$peserta->nama_lengkap}}</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rumah atau tempat tinggal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah penghuni dewasa di rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah penghuni anak-anak di rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Halaman tempat bermain disekitar rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kesempatan bergaul dengan teman sebaya</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Selera makan pada umumnya</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hubungan anak sama ayah pada umumnya</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hubungan anak sama ibu pada umumnya</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hubungan anak sama saudara pada umumnya</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pada waktu buang air besar dan buang air kecil pada umumnya masih harus ditolong</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kebiasaan tidur malam pada umumnya pukul</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kebiasaan bangun pagi pada umumnya pukul</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kebiasaan tidur siang pada umumnya pukul</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Masih kencing/ngompol pada waktu tidur</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hal-hal yang perlu dicatat atau dikemukakan pada waktu tidur anak</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kepatuhan anak dengan orang tua di rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hal-hal mengenai tingkah laku anak di rumah yang perlu dikemukakan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Anak mudah bergaul dengan orang yang baru dikenal</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sifat baik anak</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sifat buruk anak</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pembantu rumah tangga</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peralatan elektronik yang dimiliki di rumah</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->tinggal_bersama }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->jumlah_penghuni_dewasa }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->jumlah_penghuni_anak }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->halaman_bermain }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kesempatan_bergaul }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->selera_makan }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->hubungan_ayah }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->hubungan_ibu }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->hubungan_saudara }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kemampuan_buang_air }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kebiasan_tidur_malam }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kebiasan_bangun_pagi }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kebiasan_tidur_siang }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kebiasaan_ngompol }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->hal_penting_waktu_tidur }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->kepatuhan_anak }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->hal_penting_tingkahlaku_anak }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->mudah_bergaul }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->sifat_baik }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->sifat_buruk }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->pembantu_rumah_tangga }}</td>
                    <td class="text-sm font-weight-normal">{{ $peserta->pribadi->informasi->peralatan_elektronik }}</td>
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection

