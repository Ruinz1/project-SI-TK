@extends('layouts.app')
@section('title', 'Visi  Misi TKTI AL-QOLAM')
@section('content')
        <!--=====================================-->
        <!--=      Project Brief  Area Start    =-->
        <!--=====================================-->
        <section class="section-padding case-study-brief">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000">
                        <div class="case-study-featured-thumb">
                            <img class="paralax-image" src="{{ asset('assets/front-app/media/others/halaman.png')}}"  alt="Case Study">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <h2 class="title">Sarana Prasarana TKIT Al-Qolam</h2>
                                <p>Sebagai upaya meningkatkan kualitas, dan mutu pembelajaran, di TKIT Al-Qolam telah memiliki beberapa fasilitas pendidikan yang dapat mendukung kegiatan belajar dan mengajar, baik akademik maupun non akademik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding case-study-brief bg-color-mercury">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <h2 class="title">Ruang Kelas</h2>
                                <p>Ruang kelas merupakan salah satu fasilitas yang wajib dimiliki oleh bangunan sekolah tak terkecuali dengan TK. Ruang kelas yang nyaman akan memberikan perasaan nyaman juga bagi peserta didik didalamnya.</p>
                                <p>TKIT AL QOLAM sendiri memiliki 4 ruang kelas, yakni 1 kelas untuk kelas A, dan 3 kelas untuk kelas B. Masing-masing kelas tersebut dilengkapi dengan fasilitas pendukung pembelajaran dan juga suasana kelas yang nyaman dan indah dengan berbagai hiasan yang tak hanya berfungsi untuk memperindah ruangan namun juga dapat menjadi pendukung aktifitas belajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000">
                        <div class="case-study-featured-thumb">
                            <img class="paralax-image" src="{{ asset('assets/front-app/media/others/ruangkelas.png')}}" alt="Case Study">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <h2 class="title">DETAIL FASILITAS TKIT AL QOLAM</h2>
                    <p>dibawah ini adalah beberapa fasilitas yang ada di TKIT AL QOLAM</p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src= "{{ asset('assets/front-app/media/others/rak.png')}}" alt="Thumbnail">
                        
                    </div>
                    <div class="content">
                        <div class="section-heading heading-left">
                            <h3 class="title">Rak Siswa</h3>
                             <p>Rak ini merupakan tempat menyimpan barang-barang siswa TKIT AL QOLAM. Masing-masing rak memiliki nama setiap siswa. Rak ini juga terdapat disetiap kelas. Rak ini berguna untuk memisahkan barang antara siswa satu dan yang lain. serta melatih siswa untuk bertanggung jawab terhadap barang miliknya sendiri.</p>
                        </div>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/front-app/media/others/aula.png')}}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <div class="section-heading heading-left">
                            <h3 class="title">Aula Sekolah</h3>
                            <p>TKIT AL QOLAM memiliki satu ruang Aula yang berguna sebagai tempat siswa berkumpul sebelum masuk kelas, sebagai tempat sholat bersama, ataupun jika ada pertemuan kecil dengan wali murid.</p>
                        </div>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/front-app/media/others/tempatwudhu.png')}}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <div class="section-heading heading-left">
                            <h3 class="title">Tempat Wudhu</h3>
                            <p>TKIT AL QOLAM juga memiliki tempat wudhu yang bersih dan digunakan para siswa ketika belajar mengambil air wudhu.</p>
                        </div>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/front-app/media/others/bermain.png')}}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <div class="section-heading heading-left">
                            <h3 class="title">Tempat Bermain</h3>
                            <p>Pada halaman sekolah terdapat berbagai jenis fasilitas bermain anak seperti ayunan, jungkat-jungkit, seluncuran dan komidi putar. Fasilitas bermain sangat berperan untuk mengembangkan kemampuan motorik anak.</p>
                        </div>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="{{ asset('assets/front-app/media/others/toilet.png')}}" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <div class="section-heading heading-left">
                            <h3 class="title">Toilet</h3>
                            <p>Toilet di TKIT AL QOLAM yang digunakan oleh para siswa dan guru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-24.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-23.png" alt="Bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-4"><img src="assets/media/others/line-5.png" alt="Line"></li>
                <li class="shape shape-5"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-6"><img src="assets/media/others/line-5.png" alt="Line"></li>
            </ul>
        </section>
     <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
          
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/">Mitra Global Techno</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
@endsection