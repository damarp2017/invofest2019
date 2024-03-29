@extends('template.member_depan.master')
@section('mycss')
    <style>
        #narasumber img {
            transition: transform .2s;
        }
        #narasumber img:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
    </style>
@endsection

@section('content')
    @include('member.partials._navbar')

    <div class="wrapper">

        <!-- section beranda -->
        <div id="beranda" class="page-header page-header-small">
            <div id="page-header-image" class="page-header-image" style="z-index:-1;background-image: url('{{ url('img/bg_sm2.jpg') }}');" data-parallax="true"></div>
            
            <div class="container">
                <div class="content-center">
                    <h2 class="title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0s" >SEMINAR <span style="font-weight: 100;">NASIONAL</span></h2>
                    <h5 class="wow shake" data-wow-duration="1s" data-wow-delay="0.5s" style="color: #BA853A;font-weight:600;margin-bottom:3%;">Tema : “Artificial Intelegence dalam Transformasi Teknologi Industri Masa Depan”</h5>
                    <div class="row justify-content-center">
                        <a href="{{ route('event.registrasi') }}" class="btn btn-primary" style="width: 200px;"><i class="fa fa-file-text"></i> Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section beranda -->

        <!-- section deskripsi -->
        <div class="section section-deskripsi">
            <div class="container">
                <h4 class="section-title text-center wow bounceInDown" data-wow-duration="0.5s" data-wow-delay="0s">Deskripsi Seminar</h4>

                <h5 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Penjelasan Umum</h5>
                <p class="text-justify wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">
                    Salah satu acara Invofest 2018 di mana peserta akan mendapatkan materi seminar dengan tema "Artificial Intelligence dalam Transformasi Teknologi Industri Masa Depan". Acara akan diselenggarakan pada Sabtu, 27 Oktober 2018 Pukul 08.00 WIB.
                </p>
                <br/><br/>

                <h5 class="wow fadeInUp" data-wow-delay="0s" data-wow-duration="0.5s">Narasumber</h5>
                <div id="narasumber" class="row justify-content-center">
                    <div class="col-md-5 text-center wow zoomIn" data-wow-duration="0.5s" data-wow-delay="1s" style="margin:2%;">
                        <img src="{{ url('img/tokoh/richardus.png') }}" alt="Juara I" width="200px" class="mx-auto d-block">
                        <br />
                        <h5>PROF. DR. IR. RICHARDUS EKO INDRAJIT M.SC., M.B.A., M.PHIL., M.A.</h5>
                        <p>First Chairman ID-SIRTII</p>
                    </div>

                </div>
                <br /><br />

                <h5 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">HTM &amp; Fasilitas</h5>
                <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s">
                    <tr>
                        <td style="width:100px;">Umum</td>
                        <td> : Rp 100.000,-</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Mahasiswa</td>
                        <td> : Rp 75.000,-</td>
                    </tr>
                </table>
                <br />
                <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Pembayaran via transfer :<br /> <br/>
                    No Rekening <b>6072-01-015533-53-2</b> <br />
                    a/n Fauziah Nur Rahmawati (BRI)</p>
                <p class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.6s">Konfirmasi Pembayaran : </p>
                <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s">
                    <tr>
                        <td style="width:100px;">WA</td>
                        <td class="text-right"> : </td>
                        <td>0896 3891 9393 (Fauziah Nur Rahmawati)</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Email</td>
                        <td class="text-right"> : </td>
                        <td>invofest@gmail.com</td>
                    </tr>
                </table>
                <br />
                <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s">
                    <tr>
                        <td style="width:100px;">Fasilitas</td>
                        <td> : Sertifikat, Snack &amp; Merchandise</td>
                    </tr>
                </table>
                <br /><br />
                
                <h5 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Contact Person</h5>
                <table class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1s">
                    <tr>
                        <td style="width:100px;">Abu Muslih</td>
                        <td class="text-right"> : </td>
                        <td>0853 8572 3130</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Dwi Aji</td>
                        <td class="text-right"> : </td>
                        <td>0896 4405 8987</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection