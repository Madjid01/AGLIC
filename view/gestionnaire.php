<!DOCTYPE html>
<html lang="en">

<head>
    <title>GESTIONNAIRE AGLIC </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content="flat ui, admin  Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
    <!-- Favicon icon -->
    <link rel="icon" href="view/assets/images/AGLIC2.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="view/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="view/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="view/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="view/assets/css/jquery.mCustomScrollbar.css">
    <!-- font-awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="view/script.js">




</head>

<?php
 $i = 0;
//var_dump($lot);

?>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="view/assets/images/AGLIC.png" width="170" height="230" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>


                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="view/assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="view/assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center" src="view/assets/images/user.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="view/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">


                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="#" onclick="go('view/list_police.php');">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">POLICE</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="gestionnaire.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">DOSSIER</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="index.html">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">SINISTRE</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>


                            </ul>



                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div id="body" class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                                    <div class="d-inline">
                                                        <h3>LISTE DES DOSSIER</h3>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body" id="app_dos">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                    
                                            

                                                <div class="card">
                                               
                                                    <div class="card-header">
                                                    

                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                     <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2" name="btn_search"  onclick="go('view/filtrer_dossier.php');">Search</button>
                                                        </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>id_dossier</th>
                                                                        <th>libelle dossier</th>
                                                                        <th>etat dossier</th>
                                                                        <th>date creation dossier</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                        
                                                    
                                                      //  foreach ($list_dos as $key){

                                                        ?>

                                                                    <tr v-for="item in displayedItems" :key="item.id">


                                                                        <th scope="row">{{ item.id_dos }} </th>
                                                                        <td>{{ item.lib_dos }}</td>
                                                                        <td>{{ item.etat_dos }}</td>
                                                                        <td>{{ item.date_crea_dos }} </td>
                                                                        <td><a href="" class="m-2"> <i class="fa-solid fa-pen-to-square" style="font-size:28px;color:blue"></i></a></td>
                                                                        <td><i class="fa-solid fa-trash" style="font-size:28px;color:red" data-bs-toggle="modal" data-bs-target=""> </i></td>
                                                                        <td><a href="list_lot.php"><button  type="button" class="btn btn-primary" >voir lots</button></a></td>
                                                                    </tr>




                                                                    <?php

                                                         //   }

                                                        ?>
                                                                </tbody>
                                                            </table>
                                                        </div>







                                                    </div>
                                                    <div class="card-block">
                                                        <nav>
                                                            <div class="d-flex justify-content-center">
                                                                <button class="btn btn-primary me-2" :disabled="currentPage === 1" @click="currentPage--">Prev</button>
                                                                <span v-if="showLeftDots" class="align-self-center me-2">...</span>
                                                                <button v-for="n in pages" class="btn btn-primary me-2" :class="{ 'active': n === currentPage }" @click="currentPage = n">{{ n }}</button>
                                                                <span v-if="showRightDots" class="align-self-center me-2">...</span>
                                                                <button class="btn btn-primary ms-2" :disabled="currentPage === totalPages" @click="currentPage++">Next</button>
                                                            </div>
                                                        </nav>
                                                        <button type="button" class="btn btn-success" onclick="go('cree_dossier.php');">ajouter</button>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="view/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="view/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="view/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="view/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="view/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="view/assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="view/assets/js/modernizr/css-scrollbars.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="view/assets/js/classie/classie.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="view/assets/js/script.js"></script>
    <script src="view/assets/js/pcoded.min.js"></script>
    <script src="view/assets/js/demo-12.js"></script>
    <script src="view/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script>
        function go(page) {
            $("#body").load(page);
        }
    </script>



    <!-- JavaScript   VUE JS -->


    <script>
        new Vue({
            el: '#app_dos',
            data: {
                items: <?php echo json_encode($data); ?> , // retrieved from server with PHP
                itemsPerPage : 6,
                currentPage: 1,
            },
            computed: {
                displayedItems() {
                    const startIndex = (this.currentPage - 1) * this.itemsPerPage;
                    const endIndex = startIndex + this.itemsPerPage;
                    return this.items.slice(startIndex, endIndex);
                },
                totalPages() {
                    return Math.ceil(this.items.length / this.itemsPerPage);
                },
                pages() {
                    let startPage = Math.max(1, this.currentPage - 2);
                    let endPage = Math.min(this.totalPages, this.currentPage + 2);
                    if (endPage - startPage < 4) {
                        if (startPage === 1) {
                            endPage = Math.min(this.totalPages, endPage + (4 - (endPage - startPage)));
                        } else {
                            startPage = Math.max(1, startPage - (4 - (endPage - startPage)));
                        }
                    }
                    return Array.from({
                        length: endPage - startPage + 1
                    }, (_, i) => startPage + i);
                },
                showLeftDots() {
                    return this.pages[0] > 1;
                },
                showRightDots() {
                    return this.pages[this.pages.length - 1] < this.totalPages;
                },
            },
        });
    </script>



        
<script>
        new Vue({
            el: '#app_lot',
            data: {
                items: <?php echo json_encode($lot); ?> , // retrieved from server with PHP
                itemsPerPage : 6,
                currentPage: 1,
            },
            computed: {
                displayedItems() {
                    const startIndex = (this.currentPage - 1) * this.itemsPerPage;
                    const endIndex = startIndex + this.itemsPerPage;
                    return this.items.slice(startIndex, endIndex);
                },
                totalPages() {
                    return Math.ceil(this.items.length / this.itemsPerPage);
                },
                pages() {
                    let startPage = Math.max(1, this.currentPage - 2);
                    let endPage = Math.min(this.totalPages, this.currentPage + 2);
                    if (endPage - startPage < 4) {
                        if (startPage === 1) {
                            endPage = Math.min(this.totalPages, endPage + (4 - (endPage - startPage)));
                        } else {
                            startPage = Math.max(1, startPage - (4 - (endPage - startPage)));
                        }
                    }
                    return Array.from({
                        length: endPage - startPage + 1
                    }, (_, i) => startPage + i);
                },
                showLeftDots() {
                    return this.pages[0] > 1;
                },
                showRightDots() {
                    return this.pages[this.pages.length - 1] < this.totalPages;
                },
            },
        });
    </script>


  
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-k6B/x2R8kN6HsbdpB1zIbFgR+kW5Gw0wMJZmc1JgvaV9XWc0Im3vLh0rczbrIOQAtvuWx2e7BZzJtZi7V9XW1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</body>

</html>