@extends('layouts.main')

@section('container')
   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>About Us</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Welcome to Bintang Tiga Jaya Website</h2>
                        <p> 
                            Bintang Tiga Jaya adalah perusahaan
                            yang bergerak di bidang large format
                            digital printing. Kami menyediakan
                            service berupa cetakan berkualitas
                            tinggi baik media dalam ruangan (indoor)
                            maupun luar ruangan (outdoor) untuk
                            membantu klien kami berpromosi.
                        </p>
                        <p>
                            Dengan pengalaman serta tenaga
                            profesional kami dibidang digital printing
                            & design grafis yang begitu lama serta
                            didukung dengan teknologi yang
                            mutakhir, kami yakin mampu memberikan
                            hasil yang terbaik dengan harga bersaing. 
                        </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Mengapa Bintang Tiga Jaya?</h2>
                        <p class="lead">Pelayanan 24 JAM++
                            yang siap membantu Anda</p>

                        <p> Kami selalu mencetak menggunakan Tinta
                            original sehingga menghasilkan warna yang
                            tajam, detil serta gambar yang lebih
                            hidup, menjadikan Bintang Tiga Jaya
                            lebih unggul dikelasnya
                            Kami senantiasa merawat mesin dan peralatan
                            kami dengan sebaik-baiknya sehingga output
                            mesin dapat menghasilkan hasil yang stabi</p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
