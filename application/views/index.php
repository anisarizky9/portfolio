<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url().'assets/css/styles.css'?>" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Portfolio</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'home'?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'resume'?>">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'projects'?>">Projects</a></li>
                        

                        </ul>
                    </div>
                </div>
            </nav>
            
            <?php $this->load->view('header.php') ?>

            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">Hello! I'm Anisa Rizky Nurrobi R</p>
                                <p class="text-muted">A student of Bina Sarana Infomatika, Who have high motivation, Good Self-management, and strong passion for Digital Marketing. A reliable person, quick to learn new things that looking for professional experience in Design and Development.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://twitter.com/ssacrumbs"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="http://linkedin.com/in/anisa-rizky-nurrobi-ramadanti-121801218"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/anisarizky9"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
       <?php $this->load->view('footer.php') ?> 
        <!-- Bootstrap core JS-->
        <script src="<?php echo base_url().'assets/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url().'assets/js/scripts.js'?>"></script>
    </body>
</html>
