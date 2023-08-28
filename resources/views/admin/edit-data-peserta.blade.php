@section('title', 'Edit Data')
@section('pages', 'Edit Data')
@extends('layouts.admin.admin-app')
@section('content')

<div class="container-fluid py-4">
    <h2>Edit data : {{ $peserta->nama_lengkap }}</h2>
    <div class="row">
        <div class="col-12">
          <div class="multisteps-form">
            <div class="row">
              <div class="col-12 col-lg-10 mx-auto mt-4 mb-sm-5 mb-3">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                    <span>Keterangan Peserta Didik</span>
                  </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Media"> Keterangan Orangtua/Wali</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Socials"> Pendahuluan</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Pricing"> Keterangan Pribadi Murid</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Pricing">Survei Tata Tertib</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Pricing">Lain-lain</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Pricing"> Pendanaan</button>
                </div>
              </div>
            </div>
            <!--form panels-->
            <div class="row">
              <div class="col-12 col-lg-10 m-auto">
                <form class="multisteps-form__form mb-8" method="POST" action="{{ url('admin/update-peserta/'.$peserta->id) }}"> 
                 @csrf
                 @method('PUT')
                  <!--single form panel-->
                   <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Keterangan Peserta Didik</h5>
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->nama_lengkap}}" name="nama_peserta" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Nama Panggilan</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->nama_panggilan}}" name="nama_panggilan" type="text" placeholder="eg. Off-White" s="Harus isi" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin" >
                            <?php $kategori = ['laki-laki','perempuan'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->jenis_kelamin == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Tempat Lahir</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->tempat_lahir }}" name="tempat_lahir_peserta" type="text" placeholder="Palu, 7 Juli 2013"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Tanggal Lahir</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->tanggal_lahir }}" name="tanggal_lahir_peserta" type="date" placeholder="Palu, 7 Juli 2013"  />
                          </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Agama</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->agama }}" name="agama_peserta" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-12 col-sm-6">
                          <label>Jumlah Saudara Kandung</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->jumlah_saudara_kandung }}" name="jumlah_saudara_kandung" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Jumlah saudara tiri-</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->jumlah_saudara_tiri }}" name="jumlah_saudara_tiri" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Sebutkan nama saudara yang dimiliki serta usianya</label>
                          <textarea class="multisteps-form__input form-control" name="nama_saudara_dan_usia" rows="5" cols="5" placeholder="eg. Off-White" required="required">{{ $peserta->nama_saudara_dan_usia }}</textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Alamat Tempat Tinggal</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->alamat }}" name="alamat" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-12 col-sm-6">
                          <label>berat badan (dalam kg)</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->berat_badan }}" name="berat_badan" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tinggi Badan (dalam cm)</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->tinggi_badan }}" name="tinggi_badan" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Anak ke -</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->urutan_lahir }}" name="urutan_lahir" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Informasi Penting berkenaan dengan putra/i bpk/ibu</label>
                            <textarea class="multisteps-form__input form-control" name="informasi" rows="5" cols="5" placeholder="kemampuan buang air secara mandiri, dan informasi lainnya" required="required">{{ $peserta->informasi }}</textarea>
                        </div>
              
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Alergi yang diderita</label>
                          <textarea class="multisteps-form__input form-control" rows="5" name="alergi" cols="5" placeholder="alergi makanan, bunga, atau debu" required="required">{{ $peserta->alergi }}</textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Penyakit yang diderita</label>
                            <textarea class="multisteps-form__input form-control" name="penyakit" rows="5" cols="5" placeholder="sebutkan perawatan dan pantangannya" required="required">{{ $peserta->penyakit }}</textarea>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Keterangan Orangtua/Wali</h5>
                    <div class="multisteps-form__content">
                    <h6 class="font-weight-bolder">Ayah</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->nama_lengkap }}" value="{{ $peserta->jumlah_saudara_tiri }}" name="nama_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->tanggal_lahir }}" name="tanggal_lahir_ayah" type="date" placeholder=" 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->tempat_lahir }}" name="tempat_lahir_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->pekerjaan }}" name="pekerjaan_ayah" type="text" placeholder="eg. Off-White"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->agama }}" name="agama_ayah" type="text" placeholder="Islam"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->pendidikan }}" name="pendidikan_ayah" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->alamat }}" name="alamat_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{$peserta->keluarga->ayah->alamat_kantor }}" name="alamat_kantor_ayah" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->nomor_telepon_rumah }}" name="nomor_telepon_rumah_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->nomor_telepon_kantor }}" name="nomor_telepon_kantor_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor WhatsApp</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ayah->no_whatsapp }}" name="no_whatsapp_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Ibu</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->nama_lengkap }}" name="nama_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->tanggal_lahir }}" name="tanggal_lahir_ibu" type="date" placeholder="Palu, 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->tempat_lahir }}" name="tempat_lahir_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan/usaha</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->pekerjaan }}" name="pekerjaan_ibu" type="text" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->agama }}" name="agama_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->pendidikan }}" name="pendidikan_ibu" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->alamat }}" name="alamat_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->alamat_kantor }}" name="alamat_kantor_ibu" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->nomor_telepon_rumah }}" name="nomor_telepon_rumah_ibu" type="text" placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->nomor_telepon_kantor }}" name="nomor_telepon_kantor_ibu" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor Whatsapp</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->ibu->no_whatsapp }}" name="no_whatsapp_ibu" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Wali (Diisi jika anak bersama orang tua)</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->nama_lengkap }}" name="nama_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->tanggal_lahir }}" name="tanggal_lahir_wali" type="date" placeholder="Palu, 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->tempat_lahir }}" name="tempat_lahir_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan/usaha</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->pekerjaan }}" name="pekerjaan_wali" type="text" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->agama }}" name="agama_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->pendidikan }}" name="pendidikan_wali" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali-> alamat}}" name="alamat_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->alamat_kantor }}" name="alamat_kantor_wali" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->nomor_telepon_rumah }}" name="nomor_telepon_rumah_wali" type="text" placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->nomor_telepon_kantor }}" name="nomor_telepon_kantor_wali" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor Whatsapp</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->keluarga->wali->no_whatsapp }}" name="no_whatsapp_wali" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Asal Mula Anak</h6>
                      <div class="row mt-3">
                      <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Masuk TK ini sebagai</label>
                          <?php $kategori = ['murid baru','pindahan'] ?>
                          <select class="form-control" name="kategori_peserta">
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->kategori == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Pindahan dari TK</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->pindahan_tk }}" name="pindahan_tk" type="text" placeholder="Tk Harapan"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tanggal Pindahan</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->tanggal_pindahan }}" name="tanggal_pindahan" type="date" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Tanggal diterima di TKIT AL-Qolam</label>
                            <input class="multisteps-form__input form-control" value="{{ $peserta->tanggal_diterima }}" name="tanggal_diterima" type="date" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Dikelompok</label>
                          <input class="multisteps-form__input form-control" value="{{ $peserta->kelompok }}" name="kelompok" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                   <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Pendahuluan</h5>
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3">
                          <label>Apakah latar belakang Bapak/Ibu memasukan putra-putri ke TKIT AL-Qolam </label>
                          <textarea class="multisteps-form__input form-control" name="latar_belakang" rows="5" cols="5" >{{ $peserta->pendahuluan->latar_belakang }} </textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam di bidang Keislaman</label>
                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan_agama" rows="5" cols="5" >{{ $peserta->pendahuluan->harapan_keilmuan_agama }} </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Keilmuann</label>
                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan" rows="5" cols="5" >{{ $peserta->pendahuluan->harapan_keilmuan }} </textarea>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Sosial Emosional</label>
                          <textarea class="multisteps-form__input form-control"  name="harapan_keilmuan_sosial" rows="5" cols="5" >{{ $peserta->pendahuluan->harapan_keilmuan_sosial }}</textarea>
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Melihat usia dan kemampuan putra putri,Berapa tahun Bapak/Ibu menginginkan untuk belajar di TKIT AL-Qolam?</label>
                          <select class="form-control" name="jangka_waktu_belajar">
                            <?php $kategori = ['satu tahun','dua tahun','tiga tahun'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->kategori_peserta == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                   </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Keterangan Tentang Pribadi Murid</h5>
                    <div class="multisteps-form__content">
                      <h6>Informasi tentang kemampuan anak sebelum sekolah (untuk mengetahui sejauh mana materi yang akan diajarkan nanti secara klasikal dan individu)</h5>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan anak membaca huruf latin:</label>
                          <select class="form-control" name="kemampuan_membaca_latin" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah bisa membaca'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_membaca_latin == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Judul buku yang dipakai untuk mengajarkan anak membaca latin</label>
                          <textarea class="multisteps-form__input form-control" name="judul_buku_latin" rows="4" cols="2" >{{ $peserta->pribadi->judul_buku_latin }}</textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan anak membaca huruf hijaiyah:</label>
                          <select class="form-control" name="kemampuan_membaca_hijaiyah" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah bisa membaca'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_membaca_hijaiyah == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan anak menulis:</label>
                          <select class="form-control" name="kemampuan_menulis" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_menulis == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>                      
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mampu menggambar:</label>
                          <select class="form-control" name="kemampuan_menggambar">
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_menggambar == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal angka:</label>
                          <select class="form-control" name="kemampuan_angka" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_angka == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                     </div>  
                     <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan berhitung sederhana:</label>
                          <select class="form-control" name="kemampuan_berhitung" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->kemampuan_berhitung == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal tata cara wudhu:</label>
                          <select class="form-control" name="tata_cara_berwudhu" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->tata_cara_berwudhu == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah hafal doa-doa harian:</label>
                          <select class="form-control" name="hafalan_doa">
                            <?php $kategori = ['Belum','Sedikit','Banyak'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->hafalan_doa == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal tata cara solat:</label>
                          <select class="form-control" name="tata_cara_solat" >
                            <?php $kategori = ['Belum bisa','Sedikit-sedikit','Sudah mampu'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->tata_cara_solat == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Anak sudah hafal sedikit-sedikit juz'amma yaitu surat </label>
                          <textarea class="multisteps-form__input form-control" name="hafalan_juzamma" rows="5" cols="5" placeholder="sebutkan nama suratnya" > {{ $peserta->pribadi->hafalan_juzamma }} </textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Sebutkan doa harian yang sudah dihafal</label>
                            <textarea class="multisteps-form__input form-control" name="doa_harian_hafal" rows="5" cols="5" placeholder="sebutkan nama suratnya" >{{ $peserta->pribadi->doa_harian_hafal }} </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Kesukaan atau hobi anak pada bidang atau kegiatan tertentu</label>
                            <textarea class="multisteps-form__input form-control" name="hobi" rows="5" cols="5" placeholder="sebutkan nama suratnya" >{{ $peserta->pribadi->hobi }} </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Dirumah anak mendengarkan murrotal Al-Qur'an atau Juz Amma:</label>
                          <select class="form-control" name="hafal_murotal">
                            <?php $kategori = ['Tidak','Kadang-kadang','Sering'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->hafal_murotal == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Dirumah dibacakan atau berlangganan majalah anak-anak:</label>
                          <select class="form-control" name="berlangganan_majalah">
                            <?php $kategori = ['Ya','Tidak'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->berlangganan_majalah == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <h6 row-6>Informasi tentang keadaan anak dalam keluarga pada saat anak pertama masuk sekolah:</h6>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Rumah atau tempat tinggal</label>
                          <select class="form-control" name="tinggal_bersama">
                            <?php $kategori = ['Keluarga sendiri','Bersama keluarga lain'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->tinggal_bersama == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="mt-2">Jumlah penghuni dewasa di rumah</label>
                            <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->jumlah_penghuni_dewasa}}" name="jumlah_penghuni_dewasa" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div> 
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label class="mt-2">Jumlah penghuni anak-anak di rumah</label>
                            <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->jumlah_penghuni_anak}}"  name="jumlah_penghuni_anak" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Halaman tempat bermain disekitar rumah</label>
                          <select class="form-control" name="halaman_bermain">
                            <?php $kategori = ['Ada','Tidak'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->halaman_bermain == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div> 
                      <div class="row mt-3">
                       <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kesempatan bergaul dengan teman sebaya</label>
                          <select class="form-control" name="kesempatan_bergaul">
                            <?php $kategori = ['Banyak','Cukup','Sama sekali tidak ada'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->kesempatan_bergaul == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Selera makan pada umumnya</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->selera_makan}}" name="selera_makan" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak sama ayah pada umumnya</label>
                          <select class="form-control" name="hubungan_ayah">
                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->hubungan_ayah == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak dengan Ibu pada umumnya</label>
                          <select class="form-control" name="hubungan_ibu">
                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->hubungan_ibu == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Pada waktu buang air besar dan buang air kecil pada umumnya masih harus ditolong</label>
                          <select class="form-control" name="kemampuan_buang_air">
                            <?php $kategori = ['Ya','Tidak','Kadang-kadang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->kemampuan_buang_air == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak dengan saudara pada umumnya</label>
                          <select class="form-control" name="hubungan_saudara">
                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->hubungan_saudara == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Kebiasaan tidur malam pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->kebiasan_tidur_malam}}"  name="kebiasan_tidur_malam" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Kebiasaan bangun pagi pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->kebiasan_bangun_pagi}}"  name="kebiasan_bangun_pagi" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Kebiasaan tidur siang pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->kebiasan_tidur_siang}}"  name="kebiasan_tidur_siang" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Masih kencing/ngompol pada waktu tidur</label>
                          <select class="form-control" name="kebiasaan_ngompol">
                            <?php $kategori = ['Sering','Jarang','Tidak'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->kebiasaan_ngompol == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Hal-hal yang perlu dicatat atau dikemukakan pada waktu tidur anak</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->hal_penting_waktu_tidur}}"  name="hal_penting_waktu_tidur" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kepatuhan anak dengan orang tua di rumah</label>
                          <select class="form-control" name="kepatuhan_anak">
                            <?php $kategori = ['Baik','Cukup','Kurang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->kepatuhan_anak == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Hal-hal mengenai tingkah laku anak di rumah yang perlu dikemukakan</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->hal_penting_tingkahlaku_anak}}" name="hal_penting_tingkahlaku_anak" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak mudah bergaul dengan orang yang baru dikenal</label>
                          <select class="form-control" name="mudah_bergaul">
                            <?php $kategori = ['Ya','Tidak','Kadang-kadang'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->mudah_bergaul == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Sifat baik anak</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->sifat_baik}}" name="sifat_baik" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Sifat buruk anak</label>
                          <input class="multisteps-form__input form-control" value="{{$peserta->pribadi->informasi->sifat_buruk}}" name="sifat_buruk" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Pembantu rumah tangga</label>
                          <select class="form-control" name="pembantu_rumah_tangga">
                            <?php $kategori = ['Ada','Tidak'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->pembantu_rumah_tangga == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-4 form-label">Peralatan elektronik yang dimiliki di rumah</label>
                          <select class="form-control" name="peralatan_elektronik" id="choices-tags" multiple>
                            <?php $kategori = ['TV','Radio','Komputer','Handphone'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pribadi->informasi->peralatan_elektronik == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                          
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Mengenal tata tertib peserta didik dan dan orangtua/wali TKIT Al-Qolam</h5>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju, peserta didik tidak boleh ditunggu orang tua/wali/baby sitster kecuali awal masuk maksimal 2 pekan (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="tidak_boleh_ditunggu" rows="5" cols="5" >{{ $peserta->survei->tidak_boleh_ditunggu }} </textarea>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, peserta didik dilarang memakai perhiasan kecuali anting atau giwang (Berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="larangan_berpakaian_perhiasan" rows="5" cols="5" >{{ $peserta->survei->larangan_berpakaian_perhiasan }} </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju,orang tua wajib berpakaian Islami Ketika berada di lingkungan TKIT AL-Qolam (bagi ibu/penjemput putri di usahakan memakai jilbab). (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="berpakaian_islami" rows="5" cols="5" > {{ $peserta->survei->berpakaian_islami }}</textarea>
                    </div>
                    <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Lain-lain</h5>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju,menghadiri pertemuan wali murid 2 bulan sekali (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="kehadiran_dua_bulan" rows="5" cols="5" > {{  $peserta->survei->kehadiran_dua_bulan }}</textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, p2.	Mengontrol perkembangan putra-putri baik secara langsung maupun tidak langsung (lewat buku komunikasi) (berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="kontrol_pengembangan" rows="5" cols="5" >{{  $peserta->survei->kontrol_pengembangan }} </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju,demi kesehatan bersama, selama berada di lingkungan TKIT AL-Qolam diusahakan tidak merokok (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="tatib_merokok" rows="5" cols="5" >{{  $peserta->survei->tatib_merokok }}</textarea>
                        </div>  
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, kami pengelola TKIT AL-Qolam tidak dapat bekerja sama dalam pelaksanaan acara-acara di luar sekolah yang kurang islami (berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="kerja_sama" rows="5" cols="5" >{{  $peserta->survei->kerja_sama }} </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju, kami mengelola TKIT AL-Qolam akan menjadwalkan atau menggilir jadwal pemberian gizi sehat kepada wali murid sebagai bentuk pemberian infak dan shodaqoh(berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="gizi_sehat" rows="5" cols="5" >{{  $peserta->survei->gizi_sehat }} </textarea>
                      </div>  
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Pendanaan </h5>
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Pemasukan rata-rata Ayah dan Ibu perbulan</label>
                          <select class="form-control" name="pemasukan_ortu">
                            <?php $kategori = ['kurang dari 1 juta','1 juta - 3 juta','lebih dari 3 juta'] ?>
                            @foreach($kategori as $kat)
                            <option value="{{$kat}}" {{ $peserta->pendanaan->pemasukan_ortu == $kat ? 'selected':'' }}>{{$kat}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Apabila ditengah perjalanan kegiatan belajar mengajar (KBM) terjadi kenaikan harga bahan pokok yang berimbas pada biaya operasional terutama konsumsi, maka Tindakan apa yang harus dilakukan agar menu makanan yang diberikan pada anak-anak tetap stabil (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="kenaikan_konsumsi" rows="5" cols="5" > {{ $peserta->pendanaan->kenaikan_konsumsi }}</textarea>
                        </div>  
                        <div class="col-12 col-sm-6 mt-4 mt-sm-4">
                          <label for="">Untuk mengatasi masalah kenaikan harga bahan pokok, bagaimana apabila orang tua/ wali murid yang mempunyai kelebihan rezeki untuk menyisihkan hartanya/ berinfaq secara sukarela?(berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="infaq" rows="5" cols="5" > {{ $peserta->pendanaan->infaq }}</textarea>
                        </div>
                    </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Send">Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
     
@endsection
