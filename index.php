<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>eClinic - Pelayanan Klinik Online</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" href="assets/login/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/login/css/style.css">
    <link rel="stylesheet" href="assets/login/css/unite-gallery.css">
    <script type='text/javascript' src='assets/plugins/ug/jquery-11.0.min.js'></script>
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='assets/plugins/ug/unitegallery.min.js'></script>
    <script type='text/javascript' src='assets/plugins/ug/ug-theme-tiles.js'></script>

    <script>
      $(document).ready(function() {
        $('.carousel').carousel({
          interval: 3000
        });

        $("#img1").on('click', function(e){
          $("#bandung").toggle();
          e.preventDefault();
        });

        $("#img2").on('click', function(e){
          $("#tasik").toggle();
          e.preventDefault();
        });
      });
    </script>
  </head>
  <body class="homepage">
    <div class="container hidden-xs hidden-sm">
      <div class="page-header">
         <img class="logo-eclinic" src="assets/dist/img/logo_eclinic_kuning.svg">
         <h3 style="text-align: center;padding-top: 10px;color: white;">Selamat datang di web Portal eClinic</h3>
      </div>
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">

                <div class="item active">
                      <ul class="thumbnails">
                          <li class="col-sm-3 col-xs-6">
                              <div class="fff">
                                <div class="thumbnail ">
                                    <a class="info" href="#mybandung-lg" data-toggle="modal"><img src="images/bdg.svg" alt="" style="display:block;width: 100%"></a>
                                    <div class="overlay"></div>
                                </div>
                              </div>
                          </li>

                          <li class="col-sm-3 col-xs-6">
                              <div class="fff">
                                <div class="thumbnail hovereffect">
                                  <a class="info" href="#mytasikx-lg" data-toggle="modal"> <img src="images/tasik.svg" alt=""></a>
                                  <div class="overlay"></div>
                                </div>
                              </div>
                          </li>

                          <li class="col-sm-3 col-xs-6">
                            <div class="fff">
                                <div class="thumbnail hovereffect">
                                  <a class="info" href="#mypdgx-lg" data-toggle="modal"> <img src="images/pdg.svg" alt=""></a>
                                  <div class="overlay"></div>
                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3 col-xs-6">
                          <div class="fff">
                            <div class="thumbnail">
                              <a class="info" href="#myindrax-lg" data-toggle="modal"> <img src="images/indramayu2.svg" alt=""></a>
                              <div class="overlay"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                </div>
                <div class="item">
                  <ul class="thumbnails">

                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a href="#mymajax-lg" data-toggle="modal"><img class="img-responsive" src="images/majalengka.svg" alt=""></a>
                        </div>
                      </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                          <div class="thumbnail">
                            <a href="#myjekardah-lg" data-toggle="modal"><img class="img-responsive" src="images/jtk.svg" alt=""></a>
                          </div>
                       </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                        <div class="fff">
                          <div class="thumbnail ">
                            <a href="#mytangerang" data-toggle="modal"><img class="img-responsive" src="images/tangerang.svg" alt=""></a>
                          </div>
                        </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                        <div class="fff">
                          <div class="thumbnail">
                            <a href="#mybekasi-lg" data-toggle="modal"><img class="img-responsive" src="images/bekasi.svg" alt=""></a>
                          </div>
                        </div>
                    </li>

                  </ul>
                </div>
                <div class="item">
                  <ul class="thumbnails">
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#"> <img src="images/bogor.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#"> <img src="images/jogjaistimewa.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#ciamis-lg" data-toggle="modal"> <img src="images/ciamis.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>

                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#cianjur-lg" data-toggle="modal"> <img src="images/cianjur_portal.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="thumbnails">
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#mysiak-lg" data-toggle="modal"> <img src="images/kab_siak.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#malang-lg" data-toggle="modal"> <img src="images/kab_malang.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#blitar-lg" data-toggle="modal"> <img src="images/blitar.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#bangsel-lg" data-toggle="modal"> <img src="images/bangka_selatan.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="thumbnails">
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#medan-lg" data-toggle="modal"> <img src="images/medan.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#singkawang-lg" data-toggle="modal"> <img src="images/singkawang.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#serang-lg" data-toggle="modal"> <img src="images/kota_serang.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#palembang-lg" data-toggle="modal"> <img src="images/kota_palembang.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="thumbnails">
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#bengkayang-lg" data-toggle="modal"> <img src="images/bengkayang.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#cilegon-lg" data-toggle="modal"> <img src="images/kota_cilegon_portal.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#puspelkes-lg" data-toggle="modal"> <img src="images/puspelkes.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>
                    <li class="col-sm-3 col-xs-6">
                      <div class="fff">
                        <div class="thumbnail">
                          <a class="info" href="#citasehat-lg" data-toggle="modal"> <img src="images/citra_sehat.svg" alt=""></a>
                          <div class="overlay"></div>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
          <nav>
            <ul class="">
              <span data-slide="prev" class="jssora03l hidden-xs" style="top:50px;left:52px;width:55px;height:55px;" data-autocenter="2" href="#myCarousel"></span>
              <span  data-slide="next" class="jssora03r hidden-xs" style="top:50px;right:12px;width:55px;height:55px;" data-autocenter="2" href="#myCarousel"></span>
            </ul>
          </nav>
        </div>
      </div>
    </div>
      <div id="mybandung-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
          <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bandung</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                <a href="http://app.eclinic.id/bandung" target="_blank">Kota Bandung</a> <br><br>
                <a href="http://app.eclinic.id/bandungbarat" target="_blank">Kabupaten Bandung Barat</a> <br><br>
                <a href="http://app.eclinic.id/kabbandung" target="_blank">Kabupaten Bandung</a>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
      </div>

      <div id="myjekardah-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
          <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Jakarta</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                <a href="http://app.eclinic.id/jakpus" >Kota Jakarta Pusat</a><br><br>
                <a href="http://app.eclinic.id/jaktim" target="_blank" >Kota Jakarta Timur</a> <br><br>
                <a target="#" >Kota Jakarta Barat</a><br><br>
                <a target="#" >Kota Jakarta Utara</a><br><br>
                <a href="http://app.eclinic.id/jaksel" >Kota Jakarta Selatan</a><br><br>
                <a target="#" >Kepulauan Seribu</a><br><br>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
      </div>

      <div id="mytangerang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
          <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Tangerang</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                <a href="http://app.eclinic.id/tangerang" target="_blank" style="font-size: 16px;">Kota Tangerang</a> <br><br>
                <a target="#" style="font-size: 16px;">Kabupaten Tangerang</a><br><br>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
      </div>

      <div id="mytasikx-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
          <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Tasikmalaya</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                 <a href="http://app.eclinic.id/tasikmalaya" target="_blank">Kota Tasikmalaya</a> <br><br>
                 <a target="_blank">Kabupaten Tasikmalaya</a>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>

          </div>
        </div>
      </div>
      <div id="mypdgx-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
          <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Padang dan sekitarnya</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                 <a href="http://app.eclinic.id/padang" target="_blank">Kota Padang</a> <br><br>
                 <a target="_blank">Kota Pariaman</a> <br><br>
                 <a target="_blank">Kota Bukittinggi</a> <br><br>
                 <a target="_blank">Kab Payakumbuh</a> <br><br>
                 <a target="_blank">Kab Solok</a> <br><br>
                 <a target="_blank">Kab 50 Kota</a>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>

          </div>
        </div>
      </div>
  <div id="myindrax-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Indramayu</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/indramayu" target="_blank">Kabupaten Indramayu</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>

      </div>
    </div>
  </div>

  <div id="mymajax-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Majalengka</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/majalengka" target="_blank">Kabupaten Majalengka</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>

      </div>
    </div>
  </div>

  <div id="mybekasi-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bekasi</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
			 <a href="http://app.eclinic.id/bekasi" target="_blank">Kota Bekasi</a> <br><br>
             <a href="http://app.eclinic.id/kabbekasi" target="_blank">Kabupaten Bekasi</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>

      </div>
    </div>
  </div>

  <div id="ciamis-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Ciamis</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/ciamis" target="_blank">Kabupaten Ciamis</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>

      </div>
    </div>
  </div>

  <div id="cianjur-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cianjur</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/cianjur" target="_blank">Kabupaten Cianjur</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>

      </div>
    </div>
  </div>

  <div id="mysiak-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Siak</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/siak" target="_blank">Kabupaten Siak</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
  </div>

  <div id="malang-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Malang</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
			<a target="#" style="font-size: 16px;">Kota Malang</a><br><br>
            <a href="http://app.eclinic.id/kabmalang" target="_blank">Kabupaten Malang</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
  </div>

  <div id="blitar-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Blitar</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/kabblitar" target="_blank">Kabupaten Blitar</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
  </div>

  <div id="bangsel-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bangka</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/bangkaselatan" target="_blank">Kabupaten Bangka Selatan</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
  </div>
  <div id="medan-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Medan</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/medan" target="_blank">Kota Medan</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
  </div>
  <div id="singkawang-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Singkawang</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/singkawang" target="_blank">Kota Singkawang</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="serang-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Serang</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/serang" target="_blank">Kota Serang</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="palembang-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Palembang</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/palembang" target="_blank">Kota Palembang</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="bengkayang-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bengkayang</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/bengkayang" target="_blank">Kota Bengkayang</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="cilegon-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cilegon</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/cilegon" target="_blank">Kota Cilegon</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="puspelkes-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Pusat Pelayanan Kesehatan DKI Jakarta</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/puspelkesdki" target="_blank">Pusat Pelayanan Kesehatan DKI Jakarta</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div id="citasehat-lg" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 50%">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cita Sehat</h4>
          </div>

          <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/citasehat" target="_blank">Cita Sehat</a> <br><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  <div class="visible-sm visible-xs">

      <div class="page-header col-xs-12">
         <img class="logo-eclinic" src="assets/dist/img/logo_eclinic_kuning.svg" style="margin-top:-10px;">
         <h3 style="text-align: center;padding-top: 0px;color: white;">Selamat datang di web Portal eClinic</h3>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#mybandung" data-toggle="modal">
            <img class="img-responsive" src="images/bdg.svg" alt="">
          </a>
        </div>

        <div class="col-xs-6">
          <a class="thumbnail" href="#mytasikx" data-toggle="modal">
            <img class="img-responsive" src="images/tasik.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#mypdgx" data-toggle="modal">
            <img class="img-responsive" src="images/pdg.svg" alt="">
          </a>
        </div>

        <div class="col-xs-6">
          <a class="thumbnail" href="#myindrax" data-toggle="modal">
            <img class="img-responsive" src="images/indramayu3.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#mymajax" data-toggle="modal">
            <img class="img-responsive" src="images/majalengka.svg" alt="">
          </a>
        </div>

        <div class="col-xs-6">
          <a class="thumbnail" href="#myjekardah" data-toggle="modal">
            <img class="img-responsive" src="images/jkt2.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#tangerang" data-toggle="modal">
            <img class="img-responsive" src="images/tangerang.svg" alt="">
          </a>
        </div>

        <div class="col-xs-6">
          <a class="thumbnail" href="#bekasi" data-toggle="modal">
            <img class="img-responsive" src="images/bekasi.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#" data-toggle="modal">
            <img class="img-responsive" src="images/jogjaistimewa.svg" alt="">
          </a>
        </div>

        <div class="col-xs-6">
          <a class="thumbnail" href="#" data-toggle="modal">
            <img class="img-responsive" src="images/bogor.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#ciamis" data-toggle="modal">
            <img class="img-responsive" src="images/ciamis.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#cianjur" data-toggle="modal">
            <img class="img-responsive" src="images/cianjur_portal.svg" alt="">
          </a>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#siak" data-toggle="modal">
            <img class="img-responsive" src="images/kab_siak.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#malang" data-toggle="modal">
            <img class="img-responsive" src="images/kab_malang.svg" alt="">
          </a>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#blitar" data-toggle="modal">
            <img class="img-responsive" src="images/blitar.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#bangsel" data-toggle="modal">
            <img class="img-responsive" src="images/bangka_selatan.svg" alt="">
          </a>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#medan" data-toggle="modal">
            <img class="img-responsive" src="images/medan.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#singkawang" data-toggle="modal">
            <img class="img-responsive" src="images/singkawang.svg" alt="">
          </a>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#serang" data-toggle="modal">
            <img class="img-responsive" src="images/kota_serang.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#palembang" data-toggle="modal">
            <img class="img-responsive" src="images/kota_palembang.svg" alt="">
          </a>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#bengkayang" data-toggle="modal">
            <img class="img-responsive" src="images/bengkayang.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#cilegon" data-toggle="modal">
            <img class="img-responsive" src="images/kota_cilegon_portal.svg" alt="">
          </a>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-6">
          <a class="thumbnail" href="#puspelkes" data-toggle="modal">
            <img class="img-responsive" src="images/puspelkes.svg" alt="">
          </a>
        </div>
        <div class="col-xs-6">
          <a class="thumbnail" href="#citasehat" data-toggle="modal">
            <img class="img-responsive" src="images/citra_sehat.svg" alt="">
          </a>
        </div>
      </div>

  </div>

  <footer>
    <div style="text-align: center; clear: both;padding-top: 80px">
      <p style="color: white;">Powered by:<br><img class="logo-infokes" src="assets/dist/img/logo_infokes_white.svg" style="width:100px;"></p>
    </div>
  </footer>

     <div id="mytasikx" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Tasikmalaya</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/tasikmalaya" target="_blank">Kota Tasikmalaya</a> <br><br>
             <a target="_blank">Kabupaten Tasikmalaya</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
     <div id="mymajax" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Majalengka</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/majalengka" target="_blank">Kabupaten Majalengka</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
     <div id="ciamis" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Ciamis</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/ciamis" target="_blank">Kabupaten Ciamis</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <div id="cianjur" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
       <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cianjur</h4>
           </div>

           <div class="modal-body" style="padding: 10px">
            <a href="http://app.eclinic.id/cianjur" target="_blank">Kabupaten Cianjur</a>
           </div>

           <div class="modal-footer">
             <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
   </div>

     <div id="tangerang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Tangerang</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
       <a href="http://app.eclinic.id/tangerang" target="_blank">Kota Tangerang</a> <br><br>
             <a href="#" target="_blank">Kabupaten Tangerang</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

     <div id="bekasi" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bekasi</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
			 <a href="http://app.eclinic.id/bekasi" target="_blank">Kota Bekasi</a> <br><br>
             <a href="http://app.eclinic.id/kabbekasi" target="_blank">Kabupaten Bekasi</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
     <div id="myindrax" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Indramayu</h4>
            </div>

            <div class="modal-body" style="padding: 10px">
             <a href="http://app.eclinic.id/indramayu" target="_blank">Kabupaten Indramayu</a>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
     <div id="mypdgx" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Padang dan sekitarnya</h4>
              </div>

              <div class="modal-body" style="padding: 10px">
                 <a href="http://app.eclinic.id/padang" target="_blank">Kota Padang</a> <br><br>
                 <a target="_blank">Kota Pariaman</a> <br><br>
                 <a target="_blank">Kota Bukittinggi</a> <br><br>
                 <a target="_blank">Kab Payakumbuh</a> <br><br>
                 <a target="_blank">Kab Solok</a> <br><br>
                 <a target="_blank">Kab 50 Kota</a>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
      <div id="mybandung" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bandung</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/bandung" target="_blank" style="font-size: 16px;">Kota Bandung</a> <br><br>
              <a href="http://app.eclinic.id/bandungbarat" target="_blank">Kabupaten Bandung Barat</a> <br><br>
              <a href="http://app.eclinic.id/kabbandung">Kabupaten Bandung</a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div id="myjekardah" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Jakarta</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/jaktim" target="_blank" style="font-size: 16px;">Kota Jakarta Timur</a> <br><br>
              <a target="#" style="font-size: 16px;">Kota Jakarta Barat</a><br><br>
              <a target="#" style="font-size: 16px;">Kota Jakarta Utara</a><br><br>
              <a href="http://app.eclinic.id/jaksel" style="font-size: 16px;">Kota Jakarta Selatan</a><br><br>
              <a href="http://app.eclinic.id/jaktim" style="font-size: 16px;">Kota Jakarta Pusat</a><br><br>
              <a target="#" style="font-size: 16px;">Kepulauan Seribu</a><br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="siak" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Siak</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/siak" target="_blank">Siak</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="malang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Malang</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/kabmalang" target="_blank">Kabupaten Malang</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="blitar" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Blitar</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/kabblitar" target="_blank">Kabupaten Blitar</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="bangsel" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bangka</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/bangkaselatan" target="_blank">Kabupaten Bangka Selatan</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="medan" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Medan</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/medan" target="_blank">Kota Medan</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="singkawang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Singkawang</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/singkawang" target="_blank">Kota Singkawang</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="serang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Serang</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/serang" target="_blank">Kota Serang</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="palembang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Palembang</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/palembang" target="_blank">Kota Palembang</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="bengkayang" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Bengkayang</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/bengkayang" target="_blank">Kota Bengkayang</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="cilegon" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cilegon</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/cilegon" target="_blank">Kota Cilegon</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="puspelkes" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Pusat Pelayanan Kesehatan DKI Jakarta</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/puspelkesdki" target="_blank">Pusat Pelayanan Kesehatan DKI Jakarta</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div id="citasehat" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" style="vertical-align: middle;padding:20px;top:25%; right:0px;left:-5px;position: fixed;width: 100%">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">eClinic Wilayah Cita Sehat</h4>
            </div>
            <div class="modal-body" style="padding: 10px">
              <a href="http://app.eclinic.id/citasehat" target="_blank">Cita Sehat</a> <br><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <script type='text/javascript' src='assets/plugins/jpopup/jquery.popup.js'></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $("#gallery").unitegallery({
          tiles_type: "justified",
          tile_enable_textpanel: true,
          tile_textpanel_title_text_align: "center",
          tile_textpanel_always_on: true,
          lightbox_textpanel_enable_description: true
        });
      });
    </script>
  </body>
</html>
