
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Health - Kunjungan dokter</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"/>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}"/>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class=""></i>sap dental care</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#team" class="smoothScroll">Dokter</a></li>
                         <li><a href="#news" class="smoothScroll">Layanan</a></li>
                         <li><a href="#google-map" class="smoothScroll">Kontak</a></li>
                         <li><a href="{{ route('filament.admin.auth.login') }}">Login</a></li>
                         <li class="appointment-btn"><a href="#appointment">Buat Jadwal Pertemuan</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Rutin kontrol gigi setiap bulan</h3>
                                             <h1>Senyum sehat, hidup lebih percaya diri</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Ditangani oleh dokter berpengalaman</h3>
                                             <h1> Pelayanan Medis Terbaik Untuk Anda</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Buat janji tanpa antri</h3>
                                             <h1>Konsultasi Dokter Kini Lebih Praktis</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Senyum Sehat, Hidup Lebih Bahagia. Solusi Kesehatan Gigi Terbaik untuk Anda dan Keluarga Sap Dental Care</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Sap Dental Care hadir sebagai tempat perawatan gigi yang nyaman, modern, dan terjangkau. Kami menyediakan layanan kesehatan gigi menyeluruh mulai dari pemeriksaan rutin, pembersihan karang gigi, tambal, pencabutan, hingga perawatan estetik seperti bleaching dan veneer.</p>
                                   
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="{{ asset('images/bgsapdental.jpg')}}" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Anissa Suci Anjeli Permatasari</h3>
                                        <p>CEO Sap Dental Care</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="about-info">
          <h2 class="wow fadeInUp" data-wow-delay="0.1s">Dokter Sap Dental Care</h2>
        </div>
      </div>

      <div class="clearfix"></div>

      @foreach ($dokters as $dokter)
      <div class="col-md-4 col-sm-6">
        <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
          <img src="{{ asset('storage/' . $dokter->foto) }}" class="img-responsive" alt="">
          <div class="team-info">
            <h3>{{ $dokter->nama }}</h3>
            <p>{{ $dokter->spesialis }}</p>
            <div class="team-contact-info">
              <p><i class="fa fa-phone"></i> {{ $dokter->no_hp }}</p>
              <p><i class="fa fa-envelope-o"></i> <a href="#">{{ $dokter->kode_booking }}</a></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <img src="{{ asset('images/buatjadwal.jpg') }}" class="img-responsive" alt="">
      </div>

      <div class="col-md-6 col-sm-6">
        <form id="appointment-form" role="form" method="POST" action="{{ route('janji.store') }}">
          @csrf
          <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
            <h2>Buat Jadwal</h2>
          </div>

          <div class="wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-6 col-sm-6">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="col-md-6 col-sm-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-6 col-sm-6">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="col-md-6 col-sm-6">
              <label for="rujukan">Pilih Rujukan</label>
              <select class="form-control" name="rujukan" required>
                <option value="Dokter Gigi Spesialis Ortodonti">Dokter Gigi Spesialis Ortodonti</option>
                <option value="Scalling Gigi">Scalling Gigi</option>
                <option value="Radiologi Kedokteran Gigi">Radiologi Kedokteran Gigi</option>
              </select>
            </div>

            <div class="col-md-12 col-sm-12">
              <label for="phone">Nomor Telepon</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>

              <label for="message">Keluhan</label>
              <textarea class="form-control" rows="5" id="message" name="message" placeholder="Keluhan Anda (opsional)"></textarea>

              <button type="submit" class="form-control" id="cf-submit">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Kami siap membantu Anda mendapatkan layanan kesehatan gigi yang terbaik dan terpercaya. Silakan hubungi kami untuk informasi lebih lanjut atau untuk membuat janji kunjungan.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 087888999010</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">sapdentalcare@company.com</a></p>
                              </div>
                         </div>
                    </div>


                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Buka</h4>
                                   <p>Senin - Jum'at <span>08:00  - 16:00 </span></p>
                                   <p>Sabtu <span>09:00 AM - 14:00 PM</span></p>
                                   <p>Minggu <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>