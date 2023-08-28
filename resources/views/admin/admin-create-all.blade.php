@section('title', 'Dashboard Admin')
@section('pages', 'Add Data')
@extends('layouts.admin.admin-app')
@section('content')

<div class="container-fluid py-4">
    <h2>Tambah data pendaftaran</h2>
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
              <form class="multisteps-form__form mb-8" method="POST" action="{{ url('admin/add-data') }}">
                  
                @csrf
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Keterangan Peserta Didik</h5>
                    <div class="multisteps-form__content">
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" value="" name="nama_peserta" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Nama Panggilan</label>
                          <input class="multisteps-form__input form-control" name="nama_panggilan" type="text" placeholder="eg. Off-White" s="Harus isi" />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin" >
                            <option selected="selected">Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Tempat Lahir</label>
                            <input class="multisteps-form__input form-control" name="tempat_lahir_peserta" type="text" placeholder="Palu, 7 Juli 2013"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label>Tanggal Lahir</label>
                            <input class="multisteps-form__input form-control" name="tanggal_lahir_peserta" type="date" placeholder="Palu, 7 Juli 2013"  />
                          </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Agama</label>
                            <input class="multisteps-form__input form-control" name="agama_peserta" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-12 col-sm-6">
                          <label>Jumlah Saudara Kandung</label>
                          <input class="multisteps-form__input form-control" name="jumlah_saudara_kandung" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Jumlah saudara tiri-</label>
                            <input class="multisteps-form__input form-control" name="jumlah_saudara_tiri" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Sebutkan nama saudara yang dimiliki serta usianya</label>
                          <textarea class="multisteps-form__input form-control" name="nama_saudara_dan_usia" rows="5" cols="5" placeholder="eg. Off-White" required="required"></textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Alamat Tempat Tinggal</label>
                          <input class="multisteps-form__input form-control" name="alamat" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-12 col-sm-6">
                          <label>berat badan (dalam kg)</label>
                          <input class="multisteps-form__input form-control" name="berat_badan" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tinggi Badan (dalam cm)</label>
                          <input class="multisteps-form__input form-control" name="tinggi_badan" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Anak ke -</label>
                            <input class="multisteps-form__input form-control" name="urutan_lahir" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Informasi Penting berkenaan dengan putra/i bpk/ibu</label>
                            <textarea class="multisteps-form__input form-control" name="informasi" rows="5" cols="5" placeholder="kemampuan buang air secara mandiri, dan informasi lainnya" required="required"></textarea>
                        </div>
              
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Alergi yang diderita</label>
                          <textarea class="multisteps-form__input form-control" rows="5" name="alergi" cols="5" placeholder="alergi makanan, bunga, atau debu" required="required"></textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label class="mt-2">Penyakit yang diderita</label>
                            <textarea class="multisteps-form__input form-control" name="penyakit" rows="5" cols="5" placeholder="sebutkan perawatan dan pantangannya" required="required"></textarea>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="card multisteps-form__panel p-3 border-radius-xl bg-white " data-animation="FadeIn">
                    <h5 class="font-weight-bolder">Keterangan Orangtua/Wali</h5>
                    <div class="multisteps-form__content">
                    <h6 class="font-weight-bolder">Ayah</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" name="nama_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" name="tanggal_lahir_ayah" type="date" placeholder=" 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" name="tempat_lahir_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan</label>
                            <input class="multisteps-form__input form-control" name="pekerjaan_ayah" type="text" placeholder="eg. Off-White"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" name="agama_ayah" type="text" placeholder="Islam"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" name="pendidikan_ayah" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" name="alamat_ayah" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" name="alamat_kantor_ayah" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_rumah_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_kantor_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor WhatsApp</label>
                            <input class="multisteps-form__input form-control" name="no_whatsapp_ayah" type="text"  placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Ibu</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" name="nama_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" name="tanggal_lahir_ibu" type="date" placeholder="Palu, 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" name="tempat_lahir_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan/usaha</label>
                            <input class="multisteps-form__input form-control" name="pekerjaan_ibu" type="text" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" name="agama_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" name="pendidikan_ibu" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" name="alamat_ibu" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" name="alamat_kantor_ibu" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_rumah_ibu" type="text" placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_kantor_ibu" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor Whatsapp</label>
                            <input class="multisteps-form__input form-control" name="no_whatsapp_ibu" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Wali (Diisi jika anak bersama orang tua)</h6>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Nama lengkap</label>
                          <input class="multisteps-form__input form-control" name="nama_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Tanggal Lahir</label>
                          <input class="multisteps-form__input form-control" name="tanggal_lahir_wali" type="date" placeholder="Palu, 7 Juli 1980"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tempat Lahir</label>
                          <input class="multisteps-form__input form-control" name="tempat_lahir_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pekerjaan/usaha</label>
                            <input class="multisteps-form__input form-control" name="pekerjaan_wali" type="text" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Agama</label>
                          <input class="multisteps-form__input form-control" name="agama_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Pendidikan terakhir</label>
                            <input class="multisteps-form__input form-control" name="pendidikan_wali" type="text" placeholder="Jl. Tombolotutu"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Alamat Rumah</label>
                          <input class="multisteps-form__input form-control" name="alamat_wali" type="text" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Alamat Kantor</label>
                            <input class="multisteps-form__input form-control" name="alamat_kantor_wali" type="text" placeholder="no telepon"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Rumah</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_rumah_wali" type="text" placeholder="no telepon"  />
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor telepon Kantor</label>
                            <input class="multisteps-form__input form-control" name="nomor_telepon_kantor_wali" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Nomor Whatsapp</label>
                            <input class="multisteps-form__input form-control" name="no_whatsapp_wali" type="text" placeholder="no telepon"  />
                        </div>
                      </div>
                      <p></p>
                      <h6 class="font-weight-bolder">Asal Mula Anak</h6>
                      <div class="row mt-3">
                      <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Masuk TK ini sebagai</label>
                          <select class="form-control" name="kategori_peserta">
                            <option selected="selected">Pilih Kategori</option>
                            <option value="murid baru">Murid Baru</option>
                            <option value="pindahan">Pindahan</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Pindahan dari TK</label>
                          <input class="multisteps-form__input form-control" name="pindahan_tk" type="text" placeholder="Tk Harapan"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Tanggal Pindahan</label>
                          <input class="multisteps-form__input form-control" name="tanggal_pindahan" type="date" placeholder="eg. Off-White"  />
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Tanggal diterima di TKIT AL-Qolam</label>
                            <input class="multisteps-form__input form-control" name="tanggal_diterima" type="date" placeholder="Islam"  />
                          </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Dikelompok</label>
                          <input class="multisteps-form__input form-control" name="kelompok" type="text" placeholder="eg. Off-White"  />
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
                          <textarea class="multisteps-form__input form-control" name="latar_belakang" rows="5" cols="5" > </textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam di bidang Keislaman</label>
                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan_agama" rows="5" cols="5" > </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Keilmuann</label>
                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan" rows="5" cols="5" > </textarea>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Apa harapan konkret untuk putra-putri Bapak/Ibu pendidikan TKIT AL-Qolam bidang Sosial Emosional</label>
                          <textarea class="multisteps-form__input form-control" name="harapan_keilmuan_sosial" rows="5" cols="5" > </textarea>
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Melihat usia dan kemampuan putra putri,Berapa tahun Bapak/Ibu menginginkan untuk belajar di TKIT AL-Qolam?</label>
                          <select class="form-control" name="jangka_waktu_belajar">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="satu tahun">Satu tahun</option>
                            <option value="dua tahun">Dua tahun</option>
                            <option value="tiga tahun">Tiga tahun</option>
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
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah bisa membaca">Sudah bisa membaca</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Judul buku yang dipakai untuk mengajarkan anak membaca latin</label>
                          <textarea class="multisteps-form__input form-control" name="judul_buku_latin" rows="4" cols="2" > </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan anak membaca huruf hijaiyah:</label>
                          <select class="form-control" name="kemampuan_membaca_hijaiyah" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah bisa membaca">Sudah bisa membaca</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan anak menulis:</label>
                          <select class="form-control" name="kemampuan_menulis" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>                      
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mampu menggambar:</label>
                          <select class="form-control" name="kemampuan_menggambar">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal angka:</label>
                          <select class="form-control" name="kemampuan_angka" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>
                     </div>  
                     <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kemampuan berhitung sederhana:</label>
                          <select class="form-control" name="kemampuan_berhitung" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal tata cara wudhu:</label>
                          <select class="form-control" name="tata_cara_berwudhu" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                       <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah hafal doa-doa harian:</label>
                          <select class="form-control" name="hafalan_doa">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum">Belum</option>
                            <option value="Sedikit">Sedikit</option>
                            <option value="Banyak">Banyak</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak sudah mengenal tata cara solat:</label>
                          <select class="form-control" name="tata_cara_solat" >
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Belum bisa">Belum bisa</option>
                            <option value="Sedikit-sedikit">Sedikit-sedikit</option>
                            <option value="Sudah mampu">Sudah mampu</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Anak sudah hafal sedikit-sedikit juz'amma yaitu surat </label>
                          <textarea class="multisteps-form__input form-control" name="hafalan_juzamma" rows="5" cols="5" placeholder="sebutkan nama suratnya" > </textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Sebutkan doa harian yang sudah dihafal</label>
                            <textarea class="multisteps-form__input form-control" name="doa_harian_hafal" rows="5" cols="5" placeholder="sebutkan nama suratnya" > </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                            <label>Kesukaan atau hobi anak pada bidang atau kegiatan tertentu</label>
                            <textarea class="multisteps-form__input form-control" name="hobi" rows="5" cols="5" placeholder="sebutkan nama suratnya" > </textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Dirumah anak mendengarkan murrotal Al-Qur'an atau Juz Amma:</label>
                          <select class="form-control" name="hafal_murotal">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Tidak">Tidak</option>
                            <option value="Kadang-kadang">Kadang-kadang</option>
                            <option value="Sering">Sering</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Dirumah dibacakan atau berlangganan majalah anak-anak:</label>
                          <select class="form-control" name="berlangganan_majalah">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <h6 row-6>Informasi tentang keadaan anak dalam keluarga pada saat anak pertama masuk sekolah:</h6>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Rumah atau tempat tinggal</label>
                          <select class="form-control" name="tinggal_bersama">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Keluarga sendiri">Keluarga sendiri</option>
                            <option value="Bersama keluarga lain">Bersama keluarga lain</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="mt-2">Jumlah penghuni dewasa di rumah</label>
                            <input class="multisteps-form__input form-control" name="jumlah_penghuni_dewasa" type="number" placeholder="eg. Off-White"  />
                        </div>
                      </div> 
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                            <label class="mt-2">Jumlah penghuni anak-anak di rumah</label>
                            <input class="multisteps-form__input form-control" name="jumlah_penghuni_anak" type="number" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Halaman tempat bermain disekitar rumah</label>
                          <select class="form-control" name="halaman_bermain">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div> 
                      <div class="row mt-3">
                       <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kesempatan bergaul dengan teman sebaya</label>
                          <select class="form-control" name="kesempatan_bergaul">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Banyak">Banyak</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Sama sekali tidak ada">Sama sekali tidak ada</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Selera makan pada umumnya</label>
                          <input class="multisteps-form__input form-control" name="selera_makan" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak sama ayah pada umumnya</label>
                          <select class="form-control" name="hubungan_ayah">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak dengan Ibu pada umumnya</label>
                          <select class="form-control" name="hubungan_ibu">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Pada waktu buang air besar dan buang air kecil pada umumnya masih harus ditolong</label>
                          <select class="form-control" name="kemampuan_buang_air">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            <option value="Kadang-kadang">Kadang-kadang</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Hubungan anak dengan saudara pada umumnya</label>
                          <select class="form-control" name="hubungan_saudara">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Kebiasaan tidur malam pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" name="kebiasan_tidur_malam" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                      <div class="col-12 col-sm-6">
                          <label>Kebiasaan bangun pagi pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" name="kebiasan_bangun_pagi" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Kebiasaan tidur siang pada umumnya pukul</label>
                          <input class="multisteps-form__input form-control" name="kebiasan_tidur_siang" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Masih kencing/ngompol pada waktu tidur</label>
                          <select class="form-control" name="kebiasaan_ngompol">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Sering">Sering</option>
                            <option value="Jarang">Jarang</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Hal-hal yang perlu dicatat atau dikemukakan pada waktu tidur anak</label>
                          <input class="multisteps-form__input form-control" name="hal_penting_waktu_tidur" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Kepatuhan anak dengan orang tua di rumah</label>
                          <select class="form-control" name="kepatuhan_anak">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Hal-hal mengenai tingkah laku anak di rumah yang perlu dikemukakan</label>
                          <input class="multisteps-form__input form-control" name="hal_penting_tingkahlaku_anak" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Anak mudah bergaul dengan orang yang baru dikenal</label>
                          <select class="form-control" name="mudah_bergaul">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            <option value="Kadang-kadang">Kadang-kadang</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                          <label>Sifat baik anak</label>
                          <input class="multisteps-form__input form-control" name="sifat_baik" type="text" placeholder="eg. Off-White"  />
                        </div>
                        <div class="col-12 col-sm-6">
                          <label>Sifat buruk anak</label>
                          <input class="multisteps-form__input form-control" name="sifat_buruk" type="text" placeholder="eg. Off-White"  />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-2">Pembantu rumah tangga</label>
                          <select class="form-control" name="pembantu_rumah_tangga">
                            <option selected="selected">Pilih salah satu</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label class="mt-4 form-label">Peralatan elektronik yang dimiliki di rumah</label>
                          <select class="form-control" name="peralatan_elektronik" id="choices-tags" multiple>
                            <option value="TV">TV</option>
                            <option value="Radio">Radio</option>
                            <option value="Komputer">Komputer</option>
                            <option value="Handphone">Handphone</option>
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
                          <label for="">Setuju atau tidak setuju, peserta didik tidak boleh ditunggu orrang tua/wali/baby sitster kecuali awal masuk maksimal 2 pekan (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="tidak_boleh_ditunggu" rows="5" cols="5" > </textarea>
                        </div>
                          <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, peserta didik dilarang memakai perhiasan kecuali anting atau giwang (Berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="larangan_berpakaian_perhiasan" rows="5" cols="5" > </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju,orang tua wajib berpakaian Islami Ketika berada di lingkungan TKIT AL-Qolam (bagi ibu/penjemput putri di usahakan memakai jilbab). (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="berpakaian_islami" rows="5" cols="5" > </textarea>
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
                          <textarea class="multisteps-form__input form-control" name="kehadiran_dua_bulan" rows="5" cols="5" > </textarea>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, p2.	Mengontrol perkembangan putra-putri baik secara langsung maupun tidak langsung (lewat buku komunikasi) (berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="kontrol_pengembangan" rows="5" cols="5" > </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju,demi kesehatan bersama, selama berada di lingkungan TKIT AL-Qolam diusahakan tidak merokok (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="tatib_merokok" rows="5" cols="5" > </textarea>
                        </div>  
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label for="">Setuju atau tidak setuju, kami pengelola TKIT AL-Qolam tidak dapat bekerja sama dalam pelaksanaan acara-acara di luar sekolah yang kurang islami (berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="kerja_sama" rows="5" cols="5" > </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Setuju atau tidak setuju, kami mengelola TKIT AL-Qolam akan menjadwalkan atau menggilir jadwal pemberian gizi sehat kepada wali murid sebagai bentuk pemberian infak dan shodaqoh(berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="gizi_sehat" rows="5" cols="5" > </textarea>
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
                            <option selected="selected">Pilih salah satu</option>
                            <option value="kurang dari 1 juta"> < Rp. 1.000.000,00 </option>
                            <option value="1 juta - 3 juta"> Rp. 1.000.000,00 - Rp. 3.000.000,00 </option>
                            <option value="lebih dari 3 juta"> > Rp. 3.000.000,00 </option>
                          </select>
                        </div>
                        <div class="row mt-3">
                        <div class="col-sm-6 mt-sm-0 mt-4">
                          <label for="">Apabila ditengah perjalanan kegiatan belajar mengajar (KBM) terjadi kenaikan harga bahan pokok yang berimbas pada biaya operasional terutama konsumsi, maka Tindakan apa yang harus dilakukan agar menu makanan yang diberikan pada anak-anak tetap stabil (berikan alasan) </label>
                          <textarea class="multisteps-form__input form-control" name="kenaikan_konsumsi" rows="5" cols="5" > </textarea>
                        </div>  
                        <div class="col-12 col-sm-6 mt-4 mt-sm-4">
                          <label for="">Untuk mengatasi masalah kenaikan harga bahan pokok, bagaimana apabila orang tua/ wali murid yang mempunya kelebihan rezeki untuk menyisihkan hartanya/ berinfaq secara sukarela?(berikan alasan)</label>
                          <textarea class="multisteps-form__input form-control" name="infaq" rows="5" cols="5" > </textarea>
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
