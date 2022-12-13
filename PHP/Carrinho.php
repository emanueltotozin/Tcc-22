<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>Natkos Cosmeticos</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
      rel="stylesheet">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
</head>

<body style="background-color: rgb(241, 241, 241);">
   <div class="banner_bg_main">
      <div class="container">
      </div>
      <div class="logo_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="banner_taital font-italic"><a class="nomeloja" href="index.html">NATKOS</a></div>
               </div>
            </div>
         </div>
      </div>
      <div class="header_section">
         <div class="container">
            <div class="containt_main">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.html">Home</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <div class="dropdown">
               </div>
               <div class="main">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Pesquise Aqui!">
                     <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"
                           style="background-color: #00c53b; border-color:#00c53b ">
                           <i class="fa fa-search"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="header_box">
                  <div class="lang_box ">
                     <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/brasil.png" alt="flag" height="10px" class="mr-2 " title="United Kingdom">
                        Portugues <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                     </a>
                     <div class="dropdown-menu ">

                        <a href="#" class="dropdown-item">
                           <img src="images/flag-uk.png" class="mr-2" alt="flag">
                           English
                        </a>
                     </div>
                  </div>
                  <div class="login_menu">
                     <ul>
                        <li><a href="Carrinho.html">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Carrinho</span></a>
                        </li>
                        <li><a href="./PHP/home.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Usuario</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <br>
         </div>
      </div>
   </div>
   <br><br><br>
   <div class="container ">
      <div class="containerbk">
         <div class="row">
            <div class="col-lg-12">
               <div class="mb-8">
                  <!-- heading -->
                  <h1 class="mb-1">Meu Carrinho</h1>
               </div>
               <div>
                  <!-- table -->
                  <div class="table-responsive">
                     <table class="table text-nowrap">
                        <thead class="table-light">
                           <tr>
                              <th>
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="checkAll">
                                    <!-- label --><label class="form-check-label" for="checkAll">
                                    </label>
                                 </div>
                              </th>
                              <th></th>
                              <th>Nome do Produto</th>
                              <th>Preço</th>
                              <th>Quantidade</th>
                              <th>Remove</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="align-middle">
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="chechboxSix">
                                    <!-- label --><label class="form-check-label" for="chechboxSix">
                                    </label>
                                 </div>
                              </td>
                              <td class="align-middle">
                                 <a href="#"><img src="./images/mobile-img.png" class="imgcart"></a>
                              </td>
                              <td class="align-middle">
                                 <div>
                                    <h5 class="fs-6 mb-0"><a class="text-inherit">Camiseta Basica</a></h5>
                                    <small>P</small>
                                 </div>
                              </td>
                              <td class="align-middle">R$ 40,00</td>
                              <td class="align-middle">
                              <h5 class="fs-6 mb-0"><aclass="text-inherit">Qntd</a></h5>
                              <small><input type="number" id="tentacles" name="tentacles" min="1" max="100"></small>
                              </div></td>
                               <td class="align-middle"> <button type="button" class="btn btn-light">Remover</button>
                              </td>
                              </tr>
                           <tr>
                              <td class="align-middle">
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="chechboxSix">
                                    <!-- label --><label class="form-check-label" for="chechboxSix">
                                    </label>
                                 </div>
                              </td>
                              <td class="align-middle">
                                 <a href="#"><img src="./images/mobile-img.png" class="imgcart"></a>
                              </td>
                              <td class="align-middle">
                                 <div>
                                    <h5 class="fs-6 mb-0"><a class="text-inherit">Camiseta Basica</a></h5>
                                    <small>P</small>
                                 </div>
                              </td>
                              <td class="align-middle">R$ 40,00</td>
                              <td class="align-middle">
                              <h5 class="fs-6 mb-0"><aclass="text-inherit">Qntd</a></h5>
                              <small><input type="number" id="tentacles" name="tentacles" min="1" max="100"></small>
                              </div></td>
                           </div></td>
                           <td class="align-middle"> <button type="button" class="btn btn-light">Remover</button>
                          </td>
                            </tr>
                           <tr>
                              <td class="align-middle">
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="chechboxSix">
                                    <!-- label --><label class="form-check-label" for="chechboxSix">
                                    </label>
                                 </div>
                              </td>
                              <td class="align-middle">
                                 <a href="#"><img src="./images/mobile-img.png" class="imgcart"></a>
                              </td>
                              <td class="align-middle">
                                 <div>
                                    <h5 class="fs-6 mb-0"><a class="text-inherit">Camiseta Basica</a></h5>
                                    <small>P</small>
                                 </div>
                              </td>
                              <td class="align-middle">R$ 40,00</td>
                              <td class="align-middle">
                              <h5 class="fs-6 mb-0"><aclass="text-inherit">Qntd</a></h5>
                              <small><input type="number" id="tentacles" name="tentacles" min="1" max="100"></small>
                              </div></td>
                           </div></td>
                           <td class="align-middle"> <button type="button" class="btn btn-light">Remover</button>
                          </td>
                           </tr>
                           <tr>
                              <td class="align-middle">
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="chechboxSix">
                                    <!-- label --><label class="form-check-label" for="chechboxSix">
                                    </label>
                                 </div>
                              </td>
                              <td class="align-middle">
                                 <a href="#"><img src="./images/mobile-img.png" class="imgcart"></a>
                              </td>
                              <td class="align-middle">
                                 <div>
                                    <h5 class="fs-6 mb-0"><a class="text-inherit">Camiseta Basica</a></h5>
                                    <small>P</small>
                                 </div>
                              </td>
                              <td class="align-middle">R$ 40,00</td>
                              <td class="align-middle">
                              <h5 class="fs-6 mb-0"><aclass="text-inherit">Qntd</a></h5>
                              <small><input type="number" id="tentacles" name="tentacles" min="1" max="100"></small>
                              </div></td>
                           </div></td>
                           <td class="align-middle"><button type="button" class="btn btn-light">Remover</button>
                          </td>
                            </tr>
                           <tr>
                              <td class="align-middle">
                                 <!-- form check -->
                                 <div class="form-check">
                                    <!-- input --><input class="form-check-input" type="checkbox" value=""
                                       id="chechboxSix">
                                    <!-- label --><label class="form-check-label" for="chechboxSix">
                                    </label>
                                 </div>
                              </td>
                              <td class="align-middle">
                                 <a href="#"><img src="./images/mobile-img.png" class="imgcart"></a>
                              </td>
                              <td class="align-middle">
                                 <div>
                                    <h5 class="fs-6 mb-0"><a class="text-inherit">Camiseta Basica</a></h5>
                                    <small>P</small>
                                 </div>
                              </td>
                              <td class="align-middle">R$ 40,00</td>
                              <td class="align-middle">
                              <h5 class="fs-6 mb-0"><aclass="text-inherit">Qntd</a></h5>
                              <small><input type="number" id="tentacles" name="tentacles" min="1" max="100"></small>
                              </div></td>
                           </div></td>
                           <td class="align-middle"> <button type="button" class="btn btn-light">Remover</button>
                          </td>
                           </tr>
                  </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <br><br>

   <!-- Script -->
   <script src="js/script.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>