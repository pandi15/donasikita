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
</head>
    <body>
        <?php require('inc/navbar.php'); ?>
        <div style="margin-top: 80px"></div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
                        <div class="posting">
                            <div class="judul">Login</div>
                            <hr>
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-xs-6">
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-xs-6">
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="checkbox col-sm-5">
                                        <input type="checkbox">Remember me
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-8">  
                                        <input type="submit" class="btn btn-primary" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Artikel Terbaru
                                </div>  
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>   

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Artikel Populer
                                </div>
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Top Kontributor
                                </div>
                            </div>
                            <div class="panel-body">

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
