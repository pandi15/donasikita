<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasikita.com | Mari Donasikan Dana Bagi Sekolah</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <style type="text/css">
        .newData{
            height: 100px;
            width: 100%;
            margin: 0 15px;
            //background-color: blue;
        }
    </style>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script languange="javascript">
    function yHandler(){
        
        var container = document.getElementById("inidia");
    
        //mendapatkan panjang kontent
        var contentHeight = container.offsetHeight;

        //get vertical scroll position
        var yOffset = window.pageYOffset;
        
        var y = yOffset + window.innerHeight;

        if(y >= contentHeight){
            container.innerHTML += '<div class="newData"></div>';       
        }
    }
    //window.onscroll = yHandler;
    </script>
</head>
    <body>
        
        <div style="margin-top: 80px"></div>
        <?php require('inc/navbar.php'); ?>
        <div class="container" id="inidia">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">

                        <!-- Area Artikel-->
                        <div class="col-md-4">
                            <div class="posting media">
                                <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/sekolah-dasar-sd.jpg' width=300px height=230px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body" style="text-align: center">
                                        <h5 class="media-heading">SD Negeri 102122 Tanjung Naga</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Jl. Rengas Dengklok No. 42 Kelurahan Bojong Sari</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                        <p><button class="btn btn-primary btn-lg">Lihat Siswa</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="posting media">
                                <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/1.jpg' width=300px height=230px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body" style="text-align: center">
                                        <h5 class="media-heading">Lembaga Kursus Suka Makmur</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Jl. Suka Mandi No. 14 Kec. Medan Area</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                        <p><button class="btn btn-primary btn-lg">Lihat Siswa</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="posting media">
                                <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/sekolah-rusak-3.jpg' width=300px height=230px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body" style="text-align: center;">
                                        <h5 class="media-heading">SD Muhmammadiyah 21 Binjai</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Jl. Pande Dingi Kel. II Area IV</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                        <p><button class="btn btn-primary btn-lg">Lihat Siswa</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="posting media">
                                <div class="homer">
                                    <div id='gambar-home' style="text-align: center">
                                        <img src='asset/img/skol.jpg' width=300px height=200px style="border: 1px solid #dadada" />
                                    </div>
                                    <div class="media-body" style="text-align: center">
                                        <h5 class="media-heading">SD Negeri 102345 Aras Kabu</h5>
                                        <!-- <span class="glyphicon glyphicon-user"></span><span style="font-style: italic; font-size: 12px;"> Oleh Administrator</span> -->
                                        <p>Jl. Raden Mas Cokro Minoto No. 23</p>
                                        <!-- <span class="readmore"><p><a href='read.php#komentar'>Selanjutnya</a> >></p></span> -->
                                        <p><button class="btn btn-primary btn-lg">Lihat Siswa</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir area artikel -->

                    </div>                                                                                                                                                                                                                                                  
                    
                </div>
            </div>
        </div>

        <div id="wrap">
    <div id="main" class="container clear-top">
        
    </div>
</div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form action="" class="form-horizontal">
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email</label>
                    <div class="col-xs-6">
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Password</label>
                <div class="col-xs-6">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="footer_menu">
                    <li>Tentang Kami</li>
                    <li>Persyaratan & Ketentuan</li>
                    <li>Team Kami</li>
                </ul>
                <hr class="garis">
                <div class="tahun">&copy; 2015 - all rights reserved</div>
            </div>
        </div>
    </div>
</footer>
    </body>
</html>
