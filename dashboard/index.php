<?php
include "inc/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home | PT. KMHDI OFFICIAL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">PT. KMHDI OFFICIAL</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#visi">Vision</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../admin/index.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Om Swastyastu,</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Selamat datang, di Website resmi dari PT. Kesatuan Mahasiswa Hindu Dharma Indonesia (KMHDI)</p>
                        <a class="btn btn-primary btn-xl" href="#about">Cari tau Lebih Lanjut!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Apa itu KMHDI?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">KMHDI atau yang disingkat dengan Kesatuan Mahasiswa Hindu Dharma Indonesia merupakan organisasi atau perusahaan yang bergerak dibidang ke agamaan dan sudah berdiri sejak tahun 1993. Ada beberapa visi perusahaan antara lain ...</p>
                        <a class="btn btn-light btn-xl" href="#visi">VISI</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Visi-->
        <section class="page-section" id="visi">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">VISI</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-stars fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">RELIGIUSITAS</h3>
                            <p class="text-muted mb-0">Keperdulian akan agama Hindu, dimana setiap anggota KMHDI harus memiliki kemampuan penguasaan agama</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-people fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">HUMANISME</h3>
                            <p class="text-muted mb-0">Keinginan untuk membantu umat manusia yang lain, dan bukan hanya tidak mengganggu umat manusia yang lain.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-flag fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">NASIONALISME</h3>
                            <p class="text-muted mb-0">Aktif berpastisipasi dalam pembentukan sebuah negara</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-hand-index-thumb fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">PROGRESIFITAS</h3>
                            <p class="text-muted mb-0">Menjadi orang yang-orang yang menelurkan ide, melaksanakan ide tersebut dan siap berproses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <?php  
                    $sql = $koneksi->query("SELECT * FROM tb_kegiatan");
                    while ($data=$sql->fetch_assoc()){ ?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../admin/foto/kegiatan/<?php echo $data['foto']; ?>">
                        <img class="img-fluid" src="../admin/foto/kegiatan/<?php echo $data['foto']; ?>" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50"><?php echo $data['kategori']; ?></div>
                            <div class="project-name"><?php echo $data['judul']; ?></div>
                        </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Call to action-->
        <section class="page-section bg-dark text-white" id="pegawai">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Para Pegawai KMHDI</h2>
                <table>
                <?php
                $kolom = 3; 
                $i=1;    
                $sql = $koneksi->query("SELECT * FROM tb_pegawai");
                while ($data=$sql->fetch_assoc()){
                    if(($i) % $kolom== 1) {    
                    echo'<tr>';   
                    }  
                    echo '<td align="center"><img class="mx-auto rounded-circle" src="../admin/foto/pegawai/'.$data['foto'].'" width="50%" /><br><b>'.$data['nama'].'</b></td>';
                    if(($i) % $kolom== 0) {    
                    echo'</tr>';    
                    }
                $i++;
                }
                ?>
                </table>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Hubungi Kami!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Informasi lebih lanjut, silahkan menghubungi kami melalui kontak dan email dibawah ini. Terima kasih.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nomer HP</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Isi Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Pesan Telah Terkirim.</div>
                                    Terimakasih,
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Kesalahan</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>(021) 86600779</div>
                        <div>085299616616</div>
                    </div>
                </div>
            </div>
        </section>

        <div id="login">
            <?php 
                
            ?>
        </div>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - PT. Kesatuan Mahasiswa Hindu Dharma Indonesia</div></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
