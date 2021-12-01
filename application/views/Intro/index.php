<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <title> Pilkosis | <?= $judul; ?></title>
    <link href="<?= base_url('assets/gambar/Logo2.png')?>" rel="icon" type="image/png">
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8a76fb;">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('/Landing'); ?>">
                <b>PILKOSIS</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dev" style="color: white;">Team Developer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: white;">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testi" style="color: white;">Testimoni</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- home -->
    <section class="jumbotron text-center">
        <img src="assets/gambar/Logo.png" width="100px" height="100px" alt="logo" class="rounded-circle img-thumbnail">
        <h1 class="display-4" style="color: white; font-family:Algerian">PILKOSIS</h1>
        <p class="lead" style="color:white"><b> </b></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L40,85.3C80,75,160,53,240,69.3C320,85,400,139,480,176C560,213,640,235,720,202.7C800,171,880,85,960,90.7C1040,96,1120,192,1200,208C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- end home -->
    <!-- abaout -->
    <section id="about">
        <div class="container">
            <div class=" row text-center mb-3">
                <div class="col" data-aos="fade-down" data-aos-duration="1000">
                    <h2 style="text-align: center; font-family: Times New Roman;"><b>About Us</b></h2> <br>
                    <h5 style="text-align: center;font-family: Cambria Math"><b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                            </svg> Easy! Votting With Pilkosis</b></h5><br><br>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class=" col-md-4 " data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000">Dengan Pilkosis! Kita bisa memilih dengan mudah tanpa harus berkerumun </div>
                <div class=" col-md-4" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-delay="200">Menghindari pemilihan ganda dan kecurangan dalam pemilihan ketua osis</div>
            </div><br><br>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000">Melakukan pemilihan ketua osis dengan jadwal yang telah ditentukan</div>
                <div class="col-md-4" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-delay="200">Mempermudah perhitungan hasil suara masing masing kandidat dan 100% Akurat!</div>
            </div><br><br><br><br>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#8a76fb" fill-opacity="1" d="M0,32L48,74.7C96,117,192,203,288,224C384,245,480,203,576,181.3C672,160,768,160,864,176C960,192,1056,224,1152,213.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    </div>
    <!-- abaout end -->
    <!-- Team Dev -->

    <section id="dev" style="background-color: #8a76fb;">
        <div class="container">
            <div class="row">
                <div class="col" data-aos="zoom-out-down" data-aos-duration="2000">
                    <h2><b>Team Developer</b> </h2>
                </div>
            </div><br><br><br><br>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3 content2">
                    <div class="shadow d-flex justify-conent-center align-items-center p-3 rounded-lg flex-column bg-white">
                        <div class="person-img">
                            <img src="<?= base_url('/assets/gambar/safira.jpg') ?>" class="img-fluid rounded-circle" alt="img-1">
                        </div>
                        <div class="person-name my-2">
                            <h5 class="font text-black">Safira Septiandika S.</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-black">UI/UX Developer</h6>
                        </div>
                        <div class="info">
                            <h6 class="text-black text-center">Now it's the time to do it, not later than tomorrow.<br><br><br>"Sekarang adalah waktu melakukannya, bukan nanti apalagi besok"</h6>
                        </div><br><br>
                        <div class="soical-icons">
                            <a href="#" class="text-black"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 content2">
                    <div class="shadow d-flex justify-conent-center align-items-center p-3 rounded-lg flex-column bg-white">
                        <div class="person-img">
                            <img src="<?= base_url('/assets/gambar/azizah.jpg') ?>" class="img-fluid rounded-circle" alt="img-1">
                        </div>
                        <div class="person-name my-2">
                            <h5 class="text-black">Azizah</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-black">Front End Developer</h6>
                        </div>
                        <div class="info">
                            <h6 class="text-black text-center">When you want to give up, remember where you started.<br><br><br>"Ketika kamu ingin menyerah, ingatlah tujuan awal kamu memulainya"</h6>
                        </div><br><br>
                        <div class="soical-icons">
                            <a href="#" class="text-black"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 content2">
                    <div class="shadow d-flex justify-conent-center align-items-center p-3 rounded-lg flex-column bg-white">
                        <div class="person-img">
                            <img src="<?= base_url('/assets/gambar/indah.jpg') ?>" class="img-fluid rounded-circle" alt="img-1">
                        </div>
                        <div class="person-name my-2">
                            <h5 class="text-black">Indah Suryaningsih</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-black">Back End Developer</h6>
                        </div>
                        <div class="info">
                            <h6 class="text-black text-center">The program that is developed will not be free from errors,no matter great the programmer is<br>"Program yang dikembangkan tidak akan luput dari eror,sehebat apapun programernya"</h6>
                        </div>
                        <div class="soical-icons">
                            <a href="#" class="text-black"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 content2">
                    <div class="shadow d-flex justify-conent-center align-items-center p-3 rounded-lg flex-column bg-white">
                        <div class="person-img">
                            <img src="<?= base_url('/assets/gambar/ilhamB.jpg') ?>" class="img-fluid rounded-circle" alt="img-1">
                        </div>
                        <div class="person-name my-2">
                            <h5 class="text-black">Ilham Bachtiar</h5>
                        </div>
                        <div class="info">
                            <h6 class="text-black">Back End Developer</h6>
                        </div>
                        <div class="info">
                            <h6 class="text-black text-center">All dreams will come true if we have the courage to pursue them<br><br>"Semua impian akan menjadi nyata apabila kita mempunyai keberanian untuk mengejarnya"</h6>
                        </div><br>
                        <div class="soical-icons">
                            <a href="#" class="text-black"><i class="far fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L26.7,176C53.3,160,107,128,160,138.7C213.3,149,267,203,320,208C373.3,213,427,171,480,176C533.3,181,587,235,640,245.3C693.3,256,747,224,800,213.3C853.3,203,907,213,960,224C1013.3,235,1067,245,1120,229.3C1173.3,213,1227,171,1280,165.3C1333.3,160,1387,192,1413,208L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End team dev -->
    <!-- contact  -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    <h2 style="font-family:Times New Roman"><b>Contact</b></h2>
                    <h4 style="text-align: center; font-family:monospace">do you have any questions about pilkosis?</h4>
                </div>
            </div><br><br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="<?= site_url('/Landing/simpan'); ?> " method="post">
                        <div class="mb-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                            <label for=" name" class="form-label">
                                <h6>Nama Lengkap</h6>
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="name" required>
                        </div>
                        <div class="mb-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000">
                            <label for="kelas" class="form-label">
                                <h6>
                                    Kelas
                                </h6>
                            </label>
                            <input type="kelas" class="form-control" id="kelas" name="kelas" aria-describedby="email" required>
                        </div>
                        <div class="mb-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="1000">
                            <label for="kelas" class="form-label">
                                <h6>
                                    No Hp
                                </h6>
                            </label>
                            <input type="kelas" class="form-control" id="kelas" name="no_hp" aria-describedby="email" required>
                        </div>
                        <div class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <label for="pertanyaan" class="form-label">
                                <h6>Pertanyaan</h6>
                            </label>
                            <textarea class="form-control" id="pertanyaan" rows="3" name="pertanyaan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#8a76fb" fill-opacity="1" d="M0,32L60,64C120,96,240,160,360,181.3C480,203,600,181,720,165.3C840,149,960,139,1080,117.3C1200,96,1320,64,1380,48L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </section>
    <section id="testi" style="background-color: #8a76fb;">
        <div class=" container">
            <div class="row">
                <div class="col text-center mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    <h2 style="font-family:Times New Roman"><b style="color: white;">What People Say's?</b></h2>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"> <img src="assets/gambar/lativa.jpeg" width="100px"> </div>
                                            <div class="img-text">
                                                <h2>Lativa Suciatai</h2>
                                                <p>Memudahkan siswa  untuk memilih ketua osis dan wakil ketua osis, dan tidak akan terjadinya pemilihan ganda</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"> <img src="assets/gambar/fajri.jpg" width="100px"> </div>
                                            <div class="img-text">
                                                <h2>Andhika Fajri </h2>
                                                <p>Memudahkan dalam pemilihan, sehingga semua orang bisa melakukan votting dengan mudah, tampilan yang menarik, dan mudah diakses siapapun</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"> <img src="assets/gambar/eka.jpg" width="100px"> </div>
                                            <div class="img-text">
                                                <h2>Eka Hidayati</h2>
                                                <p>Lebih mudah melakukan pemilihan dimasa pandemi ini, dan dengan fitur fitur yang tersedia jadi semakin menarik</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"> <img src="assets/gambar/devi.jpeg" width="100px"> </div>
                                            <div class="img-text">
                                                <h2>Devi Anggraeni</h2>
                                                <p>Mudah & flexsible karena pemilihan dilakukan dari jarak jauh,  tampilan web yang menarik , dan berbagai fitur yang telah disediakan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"> <img src="assets/gambar/smk.png" width="100px"> </div>
                                        <div class="img-text">
                                            <h2>Person 4</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, nulla.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,192L60,197.3C120,203,240,213,360,213.3C480,213,600,203,720,192C840,181,960,171,1080,176C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </section>
    <section id="Login">
        <div class=" container">
            <div class="row">
                <div class="col text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    <h2 style="font-family:Times New Roman" ><b>Kembali Ke Halaman Utama</b></h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class=" col-md-6 " data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    <button class=" btn btn-warning" class="fa fa-undo" type="button"><a href="<?= site_url('/Dashboard') ?>" style="color: white;">Back</a></button>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#8a76fb" fill-opacity="1" d="M0,128L240,256L480,192L720,160L960,224L1200,288L1440,64L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path>
        </svg>
    </section>
    <!-- end contact -->
    <!-- footer -->
    <footer style="background-color: #8a76fb;" class="text-center pb-5">
        <p><b class="text-white">Pilkosis | Pemilihan Ketua Osis <a href="https://instagram.com/smenzakeren?utm_medium=copy_link" class="text-white fw-bold">SMENZA</a></b></p>
    </footer>
    <!-- end -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {
            duration: 2.5,
            delay: 1.5,
            text: 'Pemilihan Ketua Osis | SMK N 1 KEBUMEN'
        });
        // gsap.from('.jumbotron img', {
        //     duration: 1.5,
        //     rotateY: 360,
        //     opacity: 0,

        // });
     
    </script>

</body>

</html>