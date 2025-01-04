@extends('front.layout.template')

@section('title', 'Contact - Portal Berita Online')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="zoom-in">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow-sm">
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126910.38996165748!2d106.75709320262035!3d-6.270347366926852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec332d15aa03%3A0x2c7b90ada04a1b0a!2sUniversitas%20Pancasila!5e0!3m2!1sid!2sid!4v1735801522864!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">Contact Portal Berita Online</h2>
                    <p class="card-text">
                    <p>Hubungi Kami</p>
                    <p>Kami di Portal Berita Online senantiasa terbuka untuk mendengar masukan, saran, atau pertanyaan dari Anda. Jangan ragu untuk menghubungi kami melalui salah satu saluran berikut:
                    </p>
                    <ul>
                        <li>Phone: +6283811842298</li>
                        <li>Email: esanputra96@gmail.com</li>
                        <li><a href="https://youtube.com">Youtube</a></li>
                        <li><a href="https://instagram.com">Instagram</a></li>
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