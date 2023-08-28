<?php

namespace App\Http\Controllers\admin;

use App\Models\ibu;
use App\Models\ayah;
use App\Models\role;
use App\Models\User;
use App\Models\wali;
use App\Mail\MailSend;
use App\Models\peserta;
use App\Models\keluarga;
use App\Models\pendanaan;
use App\Models\pendahuluan;
use App\Models\surveitatib;
use Illuminate\Http\Request;
use App\Models\informasipribadi;
use App\Models\keteranganpribadi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class dashboard extends Controller
{
    public function dashboard()
    
        {
            $alluser = User::count();
            $allverified = peserta::where('status_all', 'Active')->count();
            $role = role::all();
            $user = User::all();
            $peserta = peserta::where('status_all', 'Pending')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
            $pds = ayah::get()->take(2);
            $userId = Auth::user()->id;
            

            
            
            return view('admin.dashboard', compact('alluser','allverified','user','pds','peserta','role'));
        }

    public function peserta(){
            
            $peserta = peserta::all();
            $call = Auth::user()->id;
            return view('admin.data-peserta', compact('peserta','call'));
        }

    public function create(){
            return view('admin.admin-create-all');
        }

    public function edit($id){

            $peserta = peserta::find($id);
            return view('admin.edit-data-peserta', compact('peserta'));
        }

    public function ayah(){
            
               $peserta = peserta::all();
    
                return view('admin.data-ayah', compact('peserta'));
            }
    public function ibu(){
        
           $peserta = peserta::all();

            return view('admin.data-ibu', compact('peserta'));
        }
    public function wali(){
        
           $peserta = peserta::all();

            return view('admin.data-wali', compact('peserta'));
        }
    public function pendahuluan(){
        
           $peserta = peserta::all();

            return view('admin.data-pendahuluan', compact('peserta'));
        }
    public function pribadi(){
        
           $peserta = peserta::all();

            return view('admin.data-pribadi', compact('peserta'));
        }

    public function detail($id){
        
            $peserta = peserta::find($id);
            return view('admin.data-detail-pribadi', compact('peserta'));
        }
    public function survei(){
        
           $peserta = peserta::all();

            return view('admin.data-survei', compact('peserta'));
        }
    public function pendanaan(){
        
           $peserta = peserta::all();

            return view('admin.data-pendanaan', compact('peserta'));
        }


    public function store(Request $request){
        $this->validate($request, [

        // Peserta
        'nama_peserta' => 'required',
        'agama_peserta' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_lahir_peserta' => 'required',
        'tanggal_lahir_peserta' => 'required',
        'nama_panggilan' => 'required',
        'berat_badan' => 'required',
        'tinggi_badan' => 'required',
        'jumlah_saudara_kandung' => 'required',
        'jumlah_saudara_tiri' => 'nullable',
        'urutan_lahir' => 'required',
        'nama_saudara_dan_usia' => 'required',
        'alamat' => 'required',
        'alergi' => 'required',
        'penyakit' => 'required',
        'informasi' => 'required',
        'kategori_peserta' => 'required',
        'pindahan_tk' => 'nullable',
        'tanggal_pindahan' => 'nullable',
        'tanggal_diterima' => 'nullable',
        'kelompok' => 'nullable',

        // Ayah 
        'nama_ayah' => 'required',
        'agama_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'tanggal_lahir_ayah' => 'required',
        'tempat_lahir_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'alamat_ayah' => 'required',
        'alamat_kantor_ayah' => 'required',
        'nomor_telepon_rumah_ayah' => 'required',
        'nomor_telepon_kantor_ayah' => 'required',
        'no_whatsapp_ayah' => 'required',

        // Ibu
        'nama_ibu' => 'required',
        'agama_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'tanggal_lahir_ibu' => 'required',
        'tempat_lahir_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'alamat_ibu' => 'required',
        'alamat_kantor_ibu' => 'required',
        'nomor_telepon_rumah_ibu' => 'required',
        'nomor_telepon_kantor_ibu' => 'required',
        'no_whatsapp_ibu' => 'required',

        // Wali Opsional
        'nama_wali' => 'nullable',
        'agama_wali' => 'nullable',
        'pendidikan_wali' => 'nullable',
        'tanggal_lahir_wali' => 'nullable',
        'tempat_lahir_wali' => 'nullable',
        'pekerjaan_wali' => 'nullable',
        'alamat_wali' => 'nullable',
        'alamat_kantor_wali' => 'nullable',
        'nomor_telepon_rumah_wali' => 'nullable',
        'nomor_telepon_kantor_wali' => 'nullable',
        'no_whatsapp_wali' => 'nullable',

        // pendahuluan
        'latar_belakang' => 'required',
        'harapan_keilmuan' => 'required',
        'harapan_keilmuan_agama' => 'required',
        'harapan_keilmuan_sosial' => 'required',
        'jangka_waktu_belajar' => 'required',

        // pribadi
        'kemampuan_membaca_latin' => 'required',
        'kemampuan_membaca_hijaiyah' => 'required',
        'kemampuan_menggambar' => 'required',
        'kemampuan_angka' => 'required',
        'judul_buku_latin' => 'required',
        'kemampuan_menulis' => 'required',
        'kemampuan_berhitung' => 'required',
        'tata_cara_berwudhu' => 'required',
        'tata_cara_solat' => 'required',
        'hafalan_juzamma' => 'required',
        'hafalan_doa' => 'required',
        'doa_harian_hafal' => 'required',
        'hobi' => 'required',
        'hafal_murotal' => 'required',
        'berlangganan_majalah' => 'required',

        'tinggal_bersama' => 'required',
        'jumlah_penghuni_dewasa' => 'required',
        'jumlah_penghuni_anak' => 'required',
        'halaman_bermain' => 'required',
        'kesempatan_bergaul' => 'required',
        'selera_makan' => 'required',
        'hubungan_ayah' => 'required',
        'hubungan_ibu' => 'required',
        'hubungan_saudara' => 'required',
        'kemampuan_buang_air' => 'required',
        'kebiasan_tidur_malam' => 'required',
        'kebiasan_bangun_pagi' => 'required',
        'kebiasaan_ngompol' => 'required',
        'hal_penting_waktu_tidur' => 'required',
        'kepatuhan_anak' => 'required',
        'hal_penting_tingkahlaku_anak' => 'required',
        'mudah_bergaul' => 'required',
        'sifat_baik' => 'required',
        'sifat_buruk' => 'required',
        'pembantu_rumah_tangga' => 'required',
        'peralatan_elektronik' => 'required',

        // Survei
        'tidak_boleh_ditunggu' => 'required',
        'berpakaian_islami' => 'required',
        'larangan_berpakaian_perhiasan' => 'required',
        'kehadiran_dua_bulan' => 'required',
        'tatib_merokok' => 'required',
        'gizi_sehat' => 'required',
        'kontrol_pengembangan' => 'required',
        'kerja_sama' => 'required',

        // pendanaan
        'pemasukan_ortu' => 'required',
        'kenaikan_konsumsi' => 'required',
        'infaq' => 'required'
        
        
        ]);


        //Keluarga (ayah)
            $ayah = new ayah();
            $ayah->nama_lengkap = $request->nama_ayah;
            $ayah->agama = $request->agama_ayah;
            $ayah->pendidikan = $request->pendidikan_ayah;
            $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
            $ayah->tempat_lahir = $request->tempat_lahir_ayah;
            $ayah->pekerjaan = $request->pekerjaan_ayah;
            $ayah->alamat = $request->alamat_ayah;
            $ayah->alamat_kantor = $request->alamat_kantor_ayah;
            $ayah->nomor_telepon_rumah = $request->nomor_telepon_rumah_ayah;
            $ayah->nomor_telepon_kantor = $request->nomor_telepon_kantor_ayah;
            $ayah->no_whatsapp = $request->no_whatsapp_ayah;
            $ayah->status = "Pending";

        $ayah->save();

        //Keluarga (ibu)
            $ibu = new ibu();
            $ibu->nama_lengkap = $request->nama_ibu;
            $ibu->agama = $request->agama_ibu;
            $ibu->pendidikan = $request->pendidikan_ibu;
            $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
            $ibu->tempat_lahir = $request->tempat_lahir_ibu;
            $ibu->pekerjaan = $request->pekerjaan_ibu;
            $ibu->alamat = $request->alamat_ibu;
            $ibu->alamat_kantor = $request->alamat_kantor_ibu;
            $ibu->nomor_telepon_rumah = $request->nomor_telepon_rumah_ibu;
            $ibu->nomor_telepon_kantor = $request->nomor_telepon_kantor_ibu;
            $ibu->no_whatsapp = $request->no_whatsapp_ibu;
            $ibu->status = "Pending";

        $ibu->save();

        //Keluarga (wali)
            $wali = new wali();
            $wali->nama_lengkap = $request->nama_wali;
            $wali->agama = $request->agama_wali;
            $wali->pendidikan = $request->pendidikan_wali;
            $wali->tanggal_lahir = $request->tanggal_lahir_wali;
            $wali->tempat_lahir = $request->tempat_lahir_wali;
            $wali->pekerjaan = $request->pekerjaan_wali;
            $wali->alamat = $request->alamat_wali;
            $wali->alamat_kantor = $request->alamat_kantor_wali;
            $wali->nomor_telepon_rumah = $request->nomor_telepon_rumah_wali;
            $wali->nomor_telepon_kantor = $request->nomor_telepon_kantor_wali;
            $wali->no_whatsapp = $request->no_whatsapp_wali;
            if (
                !$request->nama_wali &&
                !$request->agama_wali &&
                !$request->pendidikan_wali &&
                !$request->tanggal_lahir_wali &&
                !$request->tempat_lahir_wali &&
                !$request->pekerjaan_wali &&
                !$request->alamat_wali &&
                !$request->alamat_kantor_wali &&
                !$request->nomor_telepon_rumah_wali &&
                !$request->nomor_telepon_kantor_wali &&
                !$request->no_whatsapp_wali
            ) {
                $wali->status = ""; // Kosongkan status jika semua data kosong
            } else {
                $wali->status = "Pending";
            }

            $wali->save();

        //Keluarga
            $keluarga = new keluarga();
            $keluarga->id_ayah = $ayah->id;
            $keluarga->id_ibu = $ibu->id;
            $keluarga->id_wali = $wali->id;

        $keluarga->save();

        //Pendahuluan

            $pendahuluan = new pendahuluan();
            $pendahuluan->latar_belakang = $request->latar_belakang;
            $pendahuluan->harapan_keilmuan = $request->harapan_keilmuan;
            $pendahuluan->harapan_keilmuan_agama = $request->harapan_keilmuan_agama;
            $pendahuluan->harapan_keilmuan_sosial = $request->harapan_keilmuan_sosial;
            $pendahuluan->jangka_waktu_belajar = $request->jangka_waktu_belajar;
            $pendahuluan->status = "Pending";

        $pendahuluan->save();

        //Pribadi

            $pribadi = new keteranganpribadi();
            $pribadi->kemampuan_membaca_latin = $request->kemampuan_membaca_latin;
            $pribadi->kemampuan_membaca_hijaiyah = $request->kemampuan_membaca_hijaiyah;
            $pribadi->kemampuan_menggambar = $request->kemampuan_menggambar;
            $pribadi->kemampuan_angka = $request->kemampuan_angka;
            $pribadi->judul_buku_latin = $request->judul_buku_latin;
            $pribadi->kemampuan_menulis = $request->kemampuan_menulis;
            $pribadi->kemampuan_berhitung = $request->kemampuan_berhitung;
            $pribadi->tata_cara_berwudhu = $request->tata_cara_berwudhu;
            $pribadi->tata_cara_solat = $request->tata_cara_solat;
            $pribadi->hafalan_juzamma = $request->hafalan_juzamma;
            $pribadi->hafalan_doa = $request->hafalan_doa;
            $pribadi->doa_harian_hafal = $request->doa_harian_hafal;
            $pribadi->hobi = $request->hobi;
            $pribadi->hafal_murotal = $request->hafal_murotal;
            $pribadi->berlangganan_majalah = $request->berlangganan_majalah;
            $pribadi->status = "Pending";

        $pribadi->save();

            $informasi = new informasipribadi();
            $informasi->id_pribadi = $pribadi->id;
            $informasi->tinggal_bersama = $request->tinggal_bersama;
            $informasi->jumlah_penghuni_dewasa = $request->jumlah_penghuni_dewasa;
            $informasi->jumlah_penghuni_anak = $request->jumlah_penghuni_anak;
            $informasi->halaman_bermain = $request->halaman_bermain;
            $informasi->kesempatan_bergaul = $request->kesempatan_bergaul;
            $informasi->selera_makan = $request->selera_makan;
            $informasi->hubungan_ayah = $request->hubungan_ayah;
            $informasi->hubungan_ibu = $request->hubungan_ibu;
            $informasi->hubungan_saudara = $request->hubungan_saudara;
            $informasi->kemampuan_buang_air = $request->kemampuan_buang_air;
            $informasi->kebiasan_tidur_malam = $request->kebiasan_tidur_malam;
            $informasi->kebiasan_bangun_pagi = $request->kebiasan_bangun_pagi;
            $informasi->kebiasan_tidur_siang = $request->kebiasan_tidur_siang;
            $informasi->kebiasaan_ngompol = $request->kebiasaan_ngompol;
            $informasi->hal_penting_waktu_tidur = $request->hal_penting_waktu_tidur;
            $informasi->kepatuhan_anak = $request->kepatuhan_anak;
            $informasi->hal_penting_tingkahlaku_anak = $request->hal_penting_tingkahlaku_anak;
            $informasi->mudah_bergaul = $request->mudah_bergaul;
            $informasi->sifat_baik = $request->sifat_baik;
            $informasi->sifat_buruk = $request->sifat_buruk;
            $informasi->pembantu_rumah_tangga = $request->pembantu_rumah_tangga;
            $informasi->peralatan_elektronik = $request->peralatan_elektronik;

        $informasi->save();
        
        //Survei
            $survei = new surveitatib();
            $survei->tidak_boleh_ditunggu = $request->tidak_boleh_ditunggu;
            $survei->berpakaian_islami = $request->berpakaian_islami;
            $survei->larangan_berpakaian_perhiasan = $request->larangan_berpakaian_perhiasan;
            $survei->kehadiran_dua_bulan = $request->kehadiran_dua_bulan;
            $survei->tatib_merokok = $request->tatib_merokok;
            $survei->gizi_sehat = $request->gizi_sehat;
            $survei->kontrol_pengembangan = $request->kontrol_pengembangan;
            $survei->kerja_sama = $request->kerja_sama;
            $survei->status = "Pending";
        
        $survei->save();

        //Pendanaan

            $pendanaan = new pendanaan();
            $pendanaan->pemasukan_ortu =  $request->pemasukan_ortu;
            $pendanaan->kenaikan_konsumsi =  $request->kenaikan_konsumsi;
            $pendanaan->infaq =  $request->infaq;
            $pendanaan->status =  "Pending";

        $pendanaan->save();

        //Peserta
            $peserta = new peserta();
            $peserta->id_user = Auth::user()->id;
            $peserta->id_keluarga =$keluarga->id;
            $peserta->id_pribadi =$pribadi->id;
            $peserta->id_survei =$survei->id;
            $peserta->id_pendahuluan =$pendahuluan->id;
            $peserta->id_pendanaan =$pendanaan->id;
            $peserta->nama_lengkap = $request->nama_peserta;
            $peserta->agama = $request->agama_peserta;
            $peserta->jenis_kelamin = $request->jenis_kelamin;
            $peserta->tempat_lahir = $request->tempat_lahir_peserta;
            $peserta->tanggal_lahir = $request->tanggal_lahir_peserta;
            $peserta->nama_panggilan = $request->nama_panggilan;
            $peserta->berat_badan = $request->berat_badan;
            $peserta->tinggi_badan = $request->tinggi_badan;
            $peserta->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
            $peserta->jumlah_saudara_tiri = $request->jumlah_saudara_tiri;
            $peserta->urutan_lahir = $request->urutan_lahir;
            $peserta->nama_saudara_dan_usia = $request->nama_saudara_dan_usia;
            $peserta->alamat = $request->alamat;
            $peserta->alergi = $request->alergi;
            $peserta->penyakit = $request->penyakit;
            $peserta->informasi = $request->informasi;
            $peserta->kategori_peserta = $request->kategori_peserta;
            $peserta->pindahan_tk = $request->pindahan_tk;
            $peserta->tanggal_pindahan = $request->tanggal_pindahan;
            $peserta->tanggal_diterima = $request->tanggal_diterima;
            $peserta->kelompok = $request->kelompok;
            $peserta->status_all = "Pending";

        $peserta->save();

        return redirect('admin/data-peserta')->with('message', 'Add Success');
        }

    public function update(Request $request, $id){
        $this->validate($request, [

        // Peserta
            'nama_peserta' => 'required',
            'agama_peserta' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir_peserta' => 'required',
            'tanggal_lahir_peserta' => 'required',
            'nama_panggilan' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'jumlah_saudara_tiri' => 'nullable',
            'urutan_lahir' => 'required',
            'nama_saudara_dan_usia' => 'required',
            'alamat' => 'required',
            'alergi' => 'required',
            'penyakit' => 'required',
            'informasi' => 'required',
            'kategori_peserta' => 'required',
            'pindahan_tk' => 'nullable',
            'tanggal_pindahan' => 'nullable',
            'tanggal_diterima' => 'nullable',
            'kelompok' => 'nullable',

        // Ayah 
        'nama_ayah' => 'required',
        'agama_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'tanggal_lahir_ayah' => 'required',
        'tempat_lahir_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'alamat_ayah' => 'required',
        'alamat_kantor_ayah' => 'required',
        'nomor_telepon_rumah_ayah' => 'required',
        'nomor_telepon_kantor_ayah' => 'required',
        'no_whatsapp_ayah' => 'required',

        // Ibu
        'nama_ibu' => 'required',
        'agama_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'tanggal_lahir_ibu' => 'required',
        'tempat_lahir_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'alamat_ibu' => 'required',
        'alamat_kantor_ibu' => 'required',
        'nomor_telepon_rumah_ibu' => 'required',
        'nomor_telepon_kantor_ibu' => 'required',
        'no_whatsapp_ibu' => 'required',

        // Wali Opsional
        'nama_wali' => 'nullable',
        'agama_wali' => 'nullable',
        'pendidikan_wali' => 'nullable',
        'tanggal_lahir_wali' => 'nullable',
        'tempat_lahir_wali' => 'nullable',
        'pekerjaan_wali' => 'nullable',
        'alamat_wali' => 'nullable',
        'alamat_kantor_wali' => 'nullable',
        'nomor_telepon_rumah_wali' => 'nullable',
        'nomor_telepon_kantor_wali' => 'nullable',
        'no_whatsapp_wali' => 'nullable',

        // pendahuluan
            'latar_belakang' => 'required',
            'harapan_keilmuan' => 'required',
            'harapan_keilmuan_agama' => 'required',
            'harapan_keilmuan_sosial' => 'required',
            'jangka_waktu_belajar' => 'required',

        // pribadi
            'kemampuan_membaca_latin' => 'required',
            'kemampuan_membaca_hijaiyah' => 'required',
            'kemampuan_menggambar' => 'required',
            'kemampuan_angka' => 'required',
            'judul_buku_latin' => 'required',
            'kemampuan_menulis' => 'required',
            'kemampuan_berhitung' => 'required',
            'tata_cara_berwudhu' => 'required',
            'tata_cara_solat' => 'required',
            'hafalan_juzamma' => 'required',
            'hafalan_doa' => 'required',
            'doa_harian_hafal' => 'required',
            'hobi' => 'required',
            'hafal_murotal' => 'required',
            'berlangganan_majalah' => 'required',

            'tinggal_bersama' => 'required',
            'jumlah_penghuni_dewasa' => 'required',
            'jumlah_penghuni_anak' => 'required',
            'halaman_bermain' => 'required',
            'kesempatan_bergaul' => 'required',
            'selera_makan' => 'required',
            'hubungan_ayah' => 'required',
            'hubungan_ibu' => 'required',
            'hubungan_saudara' => 'required',
            'kemampuan_buang_air' => 'required',
            'kebiasan_tidur_malam' => 'required',
            'kebiasan_bangun_pagi' => 'required',
            'kebiasaan_ngompol' => 'required',
            'hal_penting_waktu_tidur' => 'required',
            'kepatuhan_anak' => 'required',
            'hal_penting_tingkahlaku_anak' => 'required',
            'mudah_bergaul' => 'required',
            'sifat_baik' => 'required',
            'sifat_buruk' => 'required',
            'pembantu_rumah_tangga' => 'required',
            'peralatan_elektronik' => 'required',

        // Survei
            'tidak_boleh_ditunggu' => 'required',
            'berpakaian_islami' => 'required',
            'larangan_berpakaian_perhiasan' => 'required',
            'kehadiran_dua_bulan' => 'required',
            'tatib_merokok' => 'required',
            'gizi_sehat' => 'required',
            'kontrol_pengembangan' => 'required',
            'kerja_sama' => 'required',

        // pendanaan
            'pemasukan_ortu' => 'required',
            'kenaikan_konsumsi' => 'required',
            'infaq' => 'required'
        
        
        ]);

        $peserta = peserta::find($id);
        if($peserta){
            //get id
            $idk = $peserta->id_keluarga;
            $idpendahuluan = $peserta->id_pendahuluan;
            $idpribadi = $peserta->id_pribadi;
            $idsurvei = $peserta->id_survei;
            $idpendanaan = $peserta->id_pendanaan;
            //find by id
            $keluarga = keluarga::find($idk);
            $pendahuluan = pendahuluan::find($idpendahuluan);
            $pribadi = keteranganpribadi::find($idpribadi);
            $survei = surveitatib::find($idsurvei);
            $pendanaan = pendanaan::find($idpendanaan);

            if($keluarga)
            {
                $ayah = ayah::find($idk);
                $ibu = ibu::find($idk);
                $wali = wali::find($idk);

                //Keluarga (ayah)
                
                $ayah->nama_lengkap = $request->nama_ayah;
                $ayah->agama = $request->agama_ayah;
                $ayah->pendidikan = $request->pendidikan_ayah;
                $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
                $ayah->tempat_lahir = $request->tempat_lahir_ayah;
                $ayah->pekerjaan = $request->pekerjaan_ayah;
                $ayah->alamat = $request->alamat_ayah;
                $ayah->alamat_kantor = $request->alamat_kantor_ayah;
                $ayah->nomor_telepon_rumah = $request->nomor_telepon_rumah_ayah;
                $ayah->nomor_telepon_kantor = $request->nomor_telepon_kantor_ayah;
                $ayah->no_whatsapp = $request->no_whatsapp_ayah;

                $ayah->update();

                //Keluarga (ibu)
                $ibu->nama_lengkap = $request->nama_ibu;
                $ibu->agama = $request->agama_ibu;
                $ibu->pendidikan = $request->pendidikan_ibu;
                $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
                $ibu->tempat_lahir = $request->tempat_lahir_ibu;
                $ibu->pekerjaan = $request->pekerjaan_ibu;
                $ibu->alamat = $request->alamat_ibu;
                $ibu->alamat_kantor = $request->alamat_kantor_ibu;
                $ibu->nomor_telepon_rumah = $request->nomor_telepon_rumah_ibu;
                $ibu->nomor_telepon_kantor = $request->nomor_telepon_kantor_ibu;
                $ibu->no_whatsapp = $request->no_whatsapp_ibu;

                $ibu->update();

                //Keluarga (wali)
                $wali->nama_lengkap = $request->nama_wali;
                $wali->agama = $request->agama_wali;
                $wali->pendidikan = $request->pendidikan_wali;
                $wali->tanggal_lahir = $request->tanggal_lahir_wali;
                $wali->tempat_lahir = $request->tempat_lahir_wali;
                $wali->pekerjaan = $request->pekerjaan_wali;
                $wali->alamat = $request->alamat_wali;
                $wali->alamat_kantor = $request->alamat_kantor_wali;
                $wali->nomor_telepon_rumah = $request->nomor_telepon_rumah_wali;
                $wali->nomor_telepon_kantor = $request->nomor_telepon_kantor_wali;
                $wali->no_whatsapp = $request->no_whatsapp_wali;

                $wali->update();
            }

            //Pendahuluan

                $pendahuluan->latar_belakang = $request->latar_belakang;
                $pendahuluan->harapan_keilmuan = $request->harapan_keilmuan;
                $pendahuluan->harapan_keilmuan_agama = $request->harapan_keilmuan_agama;
                $pendahuluan->harapan_keilmuan_sosial = $request->harapan_keilmuan_sosial;
                $pendahuluan->jangka_waktu_belajar = $request->jangka_waktu_belajar;

                

            //Pribadi
                $pribadi->kemampuan_membaca_latin = $request->kemampuan_membaca_latin;
                $pribadi->kemampuan_membaca_hijaiyah = $request->kemampuan_membaca_hijaiyah;
                $pribadi->kemampuan_menggambar = $request->kemampuan_menggambar;
                $pribadi->kemampuan_angka = $request->kemampuan_angka;
                $pribadi->judul_buku_latin = $request->judul_buku_latin;
                $pribadi->kemampuan_menulis = $request->kemampuan_menulis;
                $pribadi->kemampuan_berhitung = $request->kemampuan_berhitung;
                $pribadi->tata_cara_berwudhu = $request->tata_cara_berwudhu;
                $pribadi->tata_cara_solat = $request->tata_cara_solat;
                $pribadi->hafalan_juzamma = $request->hafalan_juzamma;
                $pribadi->hafalan_doa = $request->hafalan_doa;
                $pribadi->doa_harian_hafal = $request->doa_harian_hafal;
                $pribadi->hobi = $request->hobi;
                $pribadi->hafal_murotal = $request->hafal_murotal;
                $pribadi->berlangganan_majalah = $request->berlangganan_majalah;
                if($pribadi)
                {
                    $informasi = informasipribadi::find($idpribadi);

                    $informasi->id_pribadi = $pribadi->id;
                    $informasi->tinggal_bersama = $request->tinggal_bersama;
                    $informasi->jumlah_penghuni_dewasa = $request->jumlah_penghuni_dewasa;
                    $informasi->jumlah_penghuni_anak = $request->jumlah_penghuni_anak;
                    $informasi->halaman_bermain = $request->halaman_bermain;
                    $informasi->kesempatan_bergaul = $request->kesempatan_bergaul;
                    $informasi->selera_makan = $request->selera_makan;
                    $informasi->hubungan_ayah = $request->hubungan_ayah;
                    $informasi->hubungan_ibu = $request->hubungan_ibu;
                    $informasi->hubungan_saudara = $request->hubungan_saudara;
                    $informasi->kemampuan_buang_air = $request->kemampuan_buang_air;
                    $informasi->kebiasan_tidur_malam = $request->kebiasan_tidur_malam;
                    $informasi->kebiasan_bangun_pagi = $request->kebiasan_bangun_pagi;
                    $informasi->kebiasan_tidur_siang = $request->kebiasan_tidur_siang;
                    $informasi->kebiasaan_ngompol = $request->kebiasaan_ngompol;
                    $informasi->hal_penting_waktu_tidur = $request->hal_penting_waktu_tidur;
                    $informasi->kepatuhan_anak = $request->kepatuhan_anak;
                    $informasi->hal_penting_tingkahlaku_anak = $request->hal_penting_tingkahlaku_anak;
                    $informasi->mudah_bergaul = $request->mudah_bergaul;
                    $informasi->sifat_baik = $request->sifat_baik;
                    $informasi->sifat_buruk = $request->sifat_buruk;
                    $informasi->pembantu_rumah_tangga = $request->pembantu_rumah_tangga;
                    $informasi->peralatan_elektronik = $request->peralatan_elektronik;

                    $informasi->update();
                }
            

            //Survei
                $survei->tidak_boleh_ditunggu = $request->tidak_boleh_ditunggu;
                $survei->berpakaian_islami = $request->berpakaian_islami;
                $survei->larangan_berpakaian_perhiasan = $request->larangan_berpakaian_perhiasan;
                $survei->kehadiran_dua_bulan = $request->kehadiran_dua_bulan;
                $survei->tatib_merokok = $request->tatib_merokok;
                $survei->gizi_sehat = $request->gizi_sehat;
                $survei->kontrol_pengembangan = $request->kontrol_pengembangan;
                $survei->kerja_sama = $request->kerja_sama;
        
                

            //Pendanaan
                $pendanaan->pemasukan_ortu =  $request->pemasukan_ortu;
                $pendanaan->kenaikan_konsumsi =  $request->kenaikan_konsumsi;
                $pendanaan->infaq =  $request->infaq;

                

            //Peserta
                $peserta->nama_lengkap = $request->nama_peserta;
                $peserta->agama = $request->agama_peserta;
                $peserta->jenis_kelamin = $request->jenis_kelamin;
                $peserta->tempat_lahir = $request->tempat_lahir_peserta;
                $peserta->tanggal_lahir = $request->tanggal_lahir_peserta;
                $peserta->nama_panggilan = $request->nama_panggilan;
                $peserta->berat_badan = $request->berat_badan;
                $peserta->tinggi_badan = $request->tinggi_badan;
                $peserta->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
                $peserta->jumlah_saudara_tiri = $request->jumlah_saudara_tiri;
                $peserta->urutan_lahir = $request->urutan_lahir;
                $peserta->nama_saudara_dan_usia = $request->nama_saudara_dan_usia;
                $peserta->alamat = $request->alamat;
                $peserta->alergi = $request->alergi;
                $peserta->penyakit = $request->penyakit;
                $peserta->informasi = $request->informasi;
                $peserta->kategori_peserta = $request->kategori_peserta;
                $peserta->pindahan_tk = $request->pindahan_tk;
                $peserta->tanggal_pindahan = $request->tanggal_pindahan;
                $peserta->tanggal_diterima = $request->tanggal_diterima;
                $peserta->kelompok = $request->kelompok;

                $pendahuluan->update();
                $pribadi->update();
                $survei->update();
                $pendanaan->update();
                $peserta->update();
        }

        return redirect('admin/data-peserta')->with('message', 'Edit Success');
        }

    
    
        



        
    public function destroy($id){
        $peserta = peserta::find($id);
        if($peserta)
            {
                $idk = $peserta->id_keluarga;
                $idpendahuluan = $peserta->id_pendahuluan;
                $idpribadi = $peserta->id_pribadi;
                $idsurvei = $peserta->id_survei;
                $idpendanaan = $peserta->id_pendanaan;


                $keluarga = keluarga::find($idk);
                $pendahuluan = pendahuluan::find($idpendahuluan);
                $pribadi = keteranganpribadi::find($idpribadi);
                $survei = surveitatib::find($idsurvei);
                $pendanaan = pendanaan::find($idpendanaan);
                if($keluarga)
                {
                    $ayah = ayah::find($idk);
                    $ibu = ibu::find($idk);
                    $wali = wali::find($idk);

                    $ayah->delete();
                    $ibu->delete();
                    $wali->delete();
                }
                if($pribadi){
                    $informasi = informasipribadi::find($idpribadi);

                    $informasi->delete();
                }
                $keluarga->delete();
                $pendahuluan->delete();
                $pribadi->delete();
                $survei->delete();
                $pendanaan->delete();   
            }

        $peserta->delete();

            return redirect('admin/data-peserta')->with('message', 'Delete Success');
        }

    public function verifikasipeserta($id, Request $request){
        $peserta = peserta::find($id);
        $peserta->status_all = "Active";

        $peserta->update();

          $details = [
            'nama' => $peserta->nama_lengkap,
            'email' => $peserta->user->email,
        ];
         
        Mail::to($peserta->user->email)->send(new MailSend($details));

        
        return redirect('admin/data-peserta')->with('message', 'Verified Success');
    }

    public function verifikasiayah($id, Request $request){
       
        $keluarga = keluarga::find($id);
        $idayah = $keluarga->id_ayah;
        if($keluarga)
                {
                    $ayah = ayah::find($idayah);
                    $ayah->status = "Active";
                    $ayah->update();         
                }
        return redirect('admin/data-ayah')->with('message', 'Verified Success');
    }

    public function verifikasiibu($id, Request $request){
        $keluarga = keluarga::find($id);
        $idibu = $keluarga->id_ibu;
        if($keluarga)
                {
                    $ibu = ibu::find($idibu);
                    $ibu->status = "Active";
                    $ibu->update();         
                }
        
        return redirect('admin/data-ibu')->with('message', 'Verified Success');
    }

    public function verifikasiwali($id, Request $request){
        $keluarga = keluarga::find($id);
        $idwali = $keluarga->id_wali;
        if($keluarga)
                {
                    $wali = wali::find($idwali);
                    $wali->status = "Active";
                    $wali->update();         
                }
        return redirect('admin/data-wali')->with('message', 'Verified Success');
    }

    public function verifikasipendahuluan($id, Request $request){
        
                    $pendahuluan = pendahuluan::find($id);
                    $pendahuluan->status = "Active";
                    $pendahuluan->update();         
        return redirect('admin/data-pendahuluan')->with('message', 'Verified Success');
    }

    public function verifikasipribadi($id, Request $request){
        
                    $pribadi = keteranganpribadi::find($id);
                    $pribadi->status = "Active";
                    $pribadi->update();         
        return redirect('admin/data-pribadi')->with('message', 'Verified Success');
    }

    public function verifikasisurvei($id, Request $request){
        
                    $pribadi = surveitatib::find($id);
                    $pribadi->status = "Active";
                    $pribadi->update();         
        return redirect('admin/data-survei')->with('message', 'Verified Success');
    }

    public function verifikasipendanaan($id, Request $request){
        
                    $pribadi = pendanaan::find($id);
                    $pribadi->status = "Active";
                    $pribadi->update();         
        return redirect('admin/data-pendanaan')->with('message', 'Verified Success');
    }

    


    
    
}
