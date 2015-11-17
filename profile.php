<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum Dolor | Nulisbareng.com | Nulis Bareng, Pinter Bareng</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script>
        function tes(){
            var isi = document.getElementById("follow");

            if(isi.value == 'Follow'){
                isi.innerHTML = "<span class='glyphicon glyphicon-remove'></span> Unfollow Penulis";
                isi.value = 'Unfollow';
                isi.className = 'btn btn-danger btn-lg focus';
            }
            else{
                isi.innerHTML = "<span class='glyphicon glyphicon-ok'></span> Follow Penulis";
                isi.value = 'Follow';
                isi.className = 'btn btn-success btn-lg focus';
            }

        }
    </script>
</head>
    <body>
        <?php require('inc/navbar.php'); ?>
        <div style="margin-top: 80px"></div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="col-md-6">
                            <div class="posting media">
                                <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/meme.jpg' width=320px height=250px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lorem Ipsum Dolor.</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae architecto vel soluta sunt, ea</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="posting media">
                            <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/meme.jpg' width=320px height=250px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lorem Ipsum Dolor.</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae architecto vel soluta sunt, ea</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="posting media">
                            <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/meme.jpg' width=320px height=250px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lorem Ipsum Dolor.</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae architecto vel soluta sunt, ea</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                    </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Profil Saya
                                </div>  
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12" style="text-align: center;">
                                    <img src="asset/img/meme.jpg" class="img-circle" alt="" width="120px" height="120px" style="border: 1px solid #dadada">
                                    <div class="caption-img">Andre Pratama</div>
                                    <div class="caption-img-kecil">Cules Tulen // Fullstack Developer // Gelandang Bertahan</div>
                                    <!-- <button id="follow" class="btn btn-success btn-lg" onclick="tes()" data-toggle="button" aria-pressed="false" autocomplete="off" value="Follow"><span class="glyphicon glyphicon-ok"></span> Follow Penulis</button> -->
                                    <div class="caption-img-kecil"><span class="glyphicon glyphicon-pencil"></span> 10 Postingan | 10 Follower | 2 Following</div>
                                </div>
                            </div>
                        </div>   
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="wrap">
    <div id="main" class="container clear-top">
        
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer_menu">
                    <li>Tentang Kami</li>
                    <li>Persyaratan & Ketentuan</li>
                    <li>Kontribusi Artikel</li>
                </ul>
                <hr class="garis">
                <div class="tahun">&copy; 2015 - all rights reserved</div>
            </div>
        </div>
    </div>
</footer>
    </body>
</html>
