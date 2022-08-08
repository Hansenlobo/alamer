<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="search.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="../js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>

    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
    <![endif]-->
</head>

<body>

<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
    <div class="header_wrap">
        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="brand put-left">
                            <h1>
                                <span class="company"><a href="../">Bushmode</a></span>
                                <span class="slogan">Industrial Co.</span>
                            </h1>
                        </div>

                        <nav class="put-right">
                            <ul class="sf-menu">
                                <li><a href="../">About us</a></li>
                                <li>
                                    <a href="../index-1.html">Services</a>
                                    <ul>
                                        <li><a href="#">Li Europan lingues es</a></li>
                                        <li><a href="#">Membres del sam</a></li>
                                        <li><a href="#">Familie Lor separat </a>
                                            <ul>
                                                <li><a href="#">Li Europan lingues es</a></li>
                                                <li><a href="#">Membres del sam</a></li>
                                                <li><a href="#">Familie Lor separat</a></li>
                                                <li><a href="#">Existentie es un myth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Existentie es un myth</a></li>
                                    </ul>
                                </li>
                                <li><a href="../index-2.html">Products</a></li>
                                <li><a href="../index-3.html">Projects</a></li>
                                <li><a href="../index-4.html">Contacts</a></li>
                                <li><a href="../index-5.html">Blog</a></li>
                                <li class="js-search">
                                    <span class="fa fa-search"></span>

                                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                                        <label class="input_wrap" for="in">
                                            <input id="in" type="text" name="s" value="Search"
                                                   onblur="if(this.value == '') { this.value='Search'}"
                                                   onfocus="if (this.value == 'Search') {this.value=''}"/>
                                            <a class="js-find" onclick="document.getElementById('search').submit()"></a>
                                        </label>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--============================ Content ================================-->
<div id="content">
    <div class="container">
        <div class="row wrap_2">
            <div class="grid_12">
                <h2 class="header_1 text_5">Search Results</h2>
                <div id="search-results"></div>
            </div>
        </div>
    </div>
</div>


<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="row">
                <div class="grid_3">
                    <h2 class="header_4">Products</h2>
                    <ul class="list">
                        <li><a href="#">Vestibulum</a></li>
                        <li><a href="#">Culis lacinia</a></li>
                        <li><a href="#">Proin dictum</a></li>
                        <li><a href="#">Fusce euismod</a></li>
                        <li><a href="#">Consequat</a></li>
                        <li><a href="#">Adipiscing elit</a></li>
                    </ul>
                    <h2 class="header_4">our Solutions</h2>
                    <ul class="list wrap">
                        <li><a href="#">Sed ut perspiciatis unde</a></li>
                        <li><a href="#">Omnis iste natus</a></li>
                    </ul>
                </div>
                <div class="grid_3">
                    <h2 class="header_4">Technology</h2>
                    <ul class="list">
                        <li><a href="#">Vatus error sivolu</a></li>
                        <li><a href="#">Tatem accus</a></li>
                    </ul>
                    <h2 class="header_4">Information</h2>
                    <ul class="list wrap">
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Reseller</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="grid_3">
                    <h2 class="header_4">Company</h2>
                    <ul class="list">
                        <li><a href="../index.html">About us  </a></li>
                        <li><a href="../index-1.html">Services </a></li>
                        <li><a href="../index-2.html">Products </a></li>
                        <li><a href="../index-3.html">Projects </a></li>
                        <li><a href="../index-4.html">Contacts </a></li>
                        <li><a href="../index-5.html">Blog</a></li>
                    </ul>
                    <h2 class="header_4">Follow us</h2>
                    <ul class="list wrap">
                        <li><a class="fa fa-google-plus" href="#">Google +</a></li>
                        <li><a class="fa fa-twitter" href="#">Twitter</a></li>
                        <li><a class="fa fa-facebook" href="#">Facebook</a></li>
                        <li><a class="fa fa-linkedin" href="#">LinkedIn</a></li>
                        <li><a class="fa fa-rss" href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="grid_3">
                    <address class="address_1">
                        <p class="header_4">Contact</p>
                        <dl>
                            <dt>Telephone:</dt>
                            <dd>+1 959 603 6035</dd>
                        </dl>
                        <dl>
                            <dt>FAX:</dt>
                            <dd>+ 1 504 889 9898</dd>
                        </dl>
                        <p>E-mail: <a href="#">mail@demolink.org</a></p>

                        <p class="header_4">Headquarter</p>

                        <p>
                            8901 Marmora Road <br/>
                            Glasgow, DO4 89GR.
                        </p>
                    </address>

                    <div class="info">
                        © <span id="copyright-year"></span> <a class="company" href="../">Bushmode. Industrial Co.</a> <br/>
                        <a href="../index-6.html">Privacy policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>