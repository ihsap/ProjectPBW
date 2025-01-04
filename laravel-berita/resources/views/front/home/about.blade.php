  @extends('front.layout.template')

  @section('title', 'About - Portal Berita Online')

  @section('content')
  <!-- Page content-->
  <div class="container">
      <div class="row">
          <!-- Blog entries-->
          <div class="col-lg-8" data-aos="zoom-out">
              <!-- Featured blog post-->
              <div class="card mb-4 shadow-sm">
                  <a href="{{ asset('front/img/wlp-aboutU.jpg') }}">
                      <img class="card-img-top featured-img" src="{{ asset('front/img/wlp-aboutU.jpg') }}" alt="About Portal Berita Online" />
                  </a>
                  <div class="card-body">
                      <div class="small text-muted">{{ date('d/m/Y') }}</div>
                      <h2 class="card-title">About Portal Berita Online</h2>
                      <p class="card-text">
                      <p> Selamat datang di Portal Berita Online, sumber terpercaya untuk berita terkini, informasi menarik, dan artikel inspiratif dari berbagai kategori.
                          Kami berkomitmen untuk memberikan informasi yang akurat, relevan, dan terkini kepada pembaca setia kami.
                          Portal ini dirancang untuk memenuhi kebutuhan masyarakat akan berita dengan berbagai topik, mulai dari berita politik, teknologi, gaya hidup, olahraga, hingga hiburan.
                      </p>
                      <p><b>Misi:</b> Menyajikan berita dan informasi yang dapat dipercaya, menginspirasi, serta mendidik masyarakat dalam mengambil keputusan yang lebih baik.</p>
                      <p><b>Visi:</b> Menjadi portal berita online terkemuka yang memberikan dampak positif bagi pembaca dan menjadi referensi utama dalam dunia digital. </p>
                      <p> Mengapa Memilih Kami? </p>
                     <p><li> Terpercaya: Informasi yang kami sajikan telah melalui proses verifikasi yang ketat. </li></p>
                     <p><li> Cepat: Berita terkini kami selalu diperbarui secara real-time. </li></p>
                     <p><li> Beragam: Topik berita kami mencakup berbagai bidang untuk memenuhi kebutuhan informasi Anda. </li></p>
                      <p> Terima kasih telah menjadi bagian dari komunitas Portal Berita Online. Kami berharap Anda menikmati pengalaman membaca di platform kami. </p>
                      <ul>
                          <li><a href="https://youtube.com">Youtube</a></li>
                          <li><a href="https://instagram.com/@esanputra_">Instagram</a></li>
                          <li><a href="https://facebook.com">Facebook</a></li>
                      </ul>
                      </p>
                  </div>
              </div>

          </div>

          <!-- Side widgets-->
          @include('front.layout.side-widget')
      </div>
  </div>
  @endsection