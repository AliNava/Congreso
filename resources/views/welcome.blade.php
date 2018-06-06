<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from www.congresoags.gob.mx/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jun 2018 17:17:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="public/js/images/logoIco.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LXIII Legislatura | H. Congreso del estado de Aguascalientes</title>

    <link href="Content/bootstrapd28d.css?v=1.8" rel="stylesheet" />
    <link href="Content/customd28d.css?v=1.8" rel="stylesheet" />
    <link href="Content/datepicker3cc5.css?v=1.6" rel="stylesheet" />
    <script src="Scripts/jquery-1.10.23cc5.js?v=1.6"></script>
    <script src="Scripts/bootstrapd28d.js?v=1.8"></script>
    <script src="Scripts/jExtend3cc5.js?v=1.6"></script>
    <script type="text/javascript">
        $('.carousel').carousel();
        function goBack() {
            window.history.back()
        }
        var utilsMessage = function (parameters) {
            var defaults = {
                msj: "Better check yourself, you're not looking too good.",
                cssClass: "danger",
                fadeOut: 0,
                selecctor: ".alertsDiv",
                element: undefined
            };
            if (typeof parameters != "undefined") {
                parameters.msj = typeof parameters.msj === "undefined" ? defaults.msj : parameters.msj;
                parameters.cssClass = typeof parameters.cssClass === "undefined" ? defaults.cssClass : parameters.cssClass;
                parameters.fadeOut = typeof parameters.fadeOut === "undefined" ? defaults.fadeOut : parameters.fadeOut * 1000;
                // parameters.element = typeof parameters.selecctor === 'undefined' && $('.modal-body').length > 0 ? $('.bootbox.modal').topZindex().find('.modal-body') : undefined;
                parameters.element = typeof parameters.selecctor === 'undefined' && $('.modal-body').length > 0 ? undefined : undefined;
                parameters.selecctor = typeof parameters.selecctor === "undefined" ? defaults.selecctor : parameters.selecctor;
            }
            else
                parameters = defaults;
            $(".alert-dismissible").remove();
            if (typeof parameters.element !== 'undefined')
                parameters.element.prepend(templateMsj(parameters));
            else
                $(parameters.selecctor).prepend(templateMsj(parameters));
            if (parameters.fadeOut > 0) {
                $(".alert-" + parameters.cssClass).fadeOut(parameters.fadeOut, function () { $(this).remove(); });
            }

        };

        var templateMsj = function (options) {
            return '<div style="margin-top:10px;"class="alert alert-{0} alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>{1}</strong> <span></span></div>'.format(options.cssClass, options.msj);
        };
    </script>
    <style>
        .sidebar-nav {
            padding: 9px 0;
        }

        .dropdown-menu .sub-menu {
            left: 100%;
            position: absolute;
            top: 0;
            visibility: hidden;
            margin-top: -1px;
        }

        .dropdown-menu li:hover .sub-menu {
            visibility: visible;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown:hover {
            background-color: #eeeeee;
        }

        .nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu {
            margin-top: 0;
        }

        .navbar .sub-menu:before {
            border-bottom: 7px solid transparent;
            border-left: none;
            border-right: 7px solid rgba(0, 0, 0, 0.2);
            border-top: 7px solid transparent;
            left: -7px;
            top: 10px;
        }

        .navbar .sub-menu:after {
            border-top: 6px solid transparent;
            border-left: none;
            border-right: 6px solid #fff;
            border-bottom: 6px solid transparent;
            left: 10px;
            top: 11px;
            left: -6px;
        }
    </style>
</head>
<body>
<div class="container-fluid wrapper">
    <div class="row row-relative">
        <div class="custom-header">
            <a href="index.html">
                <img class="img-medium" src="Content/header/lxiii.png">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="row row-custom">
                <div class="col-md-12">
                    <ul class="nav nav-justified nav-head">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <h5 class="pb15">
                                    LXIII Legislatura<span class="caret"></span>
                                </h5>
                            </a>
                            <ul class="dropdown-menu menu-blue">
                                <li class="border-bottom">
                                    <a href="Deputy.html">Conoce a tu Diputado</a>

                                </li>
                                <li class="border-bottom">
                                    <a href="Deputy/FractionByPoliticalParties.html">Fracciones Parlamentarias</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="Deputy/CharDeputiesByPP.html">Composición Gráfica</a>
                                </li>
                                <li>
                                    <a href="Deputy/GeneralCommittee.html">Mesa Directiva</a>

                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <h5 class="pb15">
                                    Congreso del Estado<span class="caret"></span>
                                </h5>
                            </a>
                            <ul class="dropdown-menu menu-blue">
                                <li class="border-bottom">
                                    <a href="home/aboutCong.html">&#191;Qu&#233; es el Congreso del Estado?</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="home/history.html">Historia del Congreso</a>

                                </li>
                                <li class="border-bottom">
                                    <a href="home/honorwall.html">Muro de Honor</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="home/Library.html">Biblioteca</a>
                                </li>

                                <li class="border-bottom">
                                    <a href="home/MeetingRooms.html">Sal&#243;n de Sesiones Plenarias</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="home/MeetingRoomsWomen.html">Sal&#243;n Legisladoras</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="home/Legislatures.html">Legislaturas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://hcongresoags.blogspot.mx/"><h5 class="pb15">Prensa</h5></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <div class="row row-custom">
                <div class="col-md-12">
                    <ul class="nav nav-justified nav-head">
                        <li>
                            <a href="Home/IIL.html">
                                <h5 class="pb15">IIL</h5>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <h5 class="pb15">
                                    Actividades Legislativas<span class="caret"></span>
                                </h5>
                            </a>
                            <ul class="dropdown-menu menu-blue">
                                <li class="border-bottom">
                                    <a href="Transparency/GetFileListe7df.html?articleNum=57&amp;fractionNum=7&amp;viewTypeGrid=99&amp;iniciativeType=1">Iniciativas</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="Transparency/GetFileList0e33.html?articleNum=57&amp;fractionNum=7&amp;viewTypeGrid=99&amp;iniciativeType=2">Puntos de acuerdo</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="Transparency/GetFileListf577.html?articleNum=57&amp;fractionNum=7&amp;viewTypeGrid=99&amp;iniciativeType=3">Dictámenes</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="Transparency/GetFileListbc65.html?articleNum=57&amp;fractionNum=7&amp;viewTypeGrid=99&amp;iniciativeType=4">Acuerdos Legislativos</a>
                                </li>
                                <li>
                                    <a href="Reg_PDF/DeputyByComission.html">Informe de Actividades</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <h5 class="pb15">
                                    Transparencia<span class="caret"></span>
                                </h5>
                            </a>

                            <ul class="dropdown-menu menu-blue">
                                <li class="border-bottom">
                                    <a href="Reg_PDF/Articulo55.html">Art&#237;culo 55</a>
                                </li>
                                <li class="border-bottom">
                                    <a href="Reg_PDF/Articulo57.html">Art&#237;culo 57</a>
                                </li>
                                <li>
                                    <a href="http://congresoags.gob.mx:8080/congresoags/MarcoNormativo.php">Transparencia anterior</a>

                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-1">


        </div>
    </div>
    <div class="row">
        <div class="item">

            <img class="img-full" id="bannerIndex" src="Content/header/index-01.jpg">

        </div>
    </div>

    <div class="row row-body fondo-Congreso" style="margin-bottom:50px">
        <div class="col-md-1"></div>
        <div class="col-md-10 back-body cuerpo">

            <!--Aquí va el contenido del cuerpo-->


            <style>
                .generic2 {
                    height: 128px;
                    /*margin-top: 8px;*/
                    cursor: pointer;
                }

                .image-right-index {
                }

                .image-left-index {
                    height: 100%;
                    margin-top: 10px;
                    margin-bottom: 10px;
                }

                .boxInfo {
                    padding-top: 20px;
                    padding-bottom: 20px;
                    margin-top: 10px;
                }

                .boxInfo > a {
                    color: white;
                }

                .boxInfo:hover {
                    /*opacity: .9;*/
                    background: #545f7a;
                }

                a:hover, a:focus {
                    text-decoration: none;
                }

                .img-responsive:hover {
                    opacity: 0.8;
                }

                .generic2 {
                    height: 89px !important;
                }
            </style>

            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12  diputyDetailName2 boxInfo" style="background-color:#7dd2bf;">
                            <h3 class="mayus text-center">Eres nuestro</h3>
                            <h4 class="text-center">visitante no.</h4>
                            <h2 class="mayus text-center">39644</h2>

                        </div>
                    </div>
                    <div class="row">
                        <a href="facebook.com/vinculo.html" class="over"></a>
                        <a href="Transparency/getlaws.html">


                            <div class="">
                                <img class="img-full" style="height: 80px;" onmouseover="this.src = 'Content/images/Index/BTN_REVISA_LAS_LEYES-02.jpg';" onmouseout="this.src = 'Content/images/Index/BTN_REVISA_LAS_LEYES-01.jpg';" src="Content/images/Index/BTN_REVISA_LAS_LEYES-01.jpg" />
                            </div>

                        </a>
                        <a href="home/ImportantSites.html">
                            <div class="col-sm-12 diputyDetailName2 boxInfo">
                                <h4 class="mayus text-right">Sitios de interés <span class="glyphicon glyphicon-plus-sign"></span></h4>

                            </div>
                        </a>
                        <a href="Transparency/GetFileListb976.html?articleNum=57&amp;fractionNum=1&amp;viewTypeGrid=99&amp;iniciativeType=0">
                            <div class="col-sm-12 diputyDetailName2 boxInfo">
                                <h4 class="mayus  text-right">Agenda Legislativa <span class="glyphicon glyphicon-plus-sign"></span></h4>

                            </div>
                        </a>
                        <a href="https://www.youtube.com/user/congresoagsoficial/live" target="_blank">
                            <div class="col-sm-12 diputyDetailName2 boxInfo">
                                <h4 class="mayus  text-right">Ver sesión en vivo <span class="glyphicon glyphicon-plus-sign"></span></h4>
                            </div>
                        </a>
                        <div style="margin-top: 10px;">
                            <iframe src="http://www.youtube.com/embed/?listType=user_uploads&amp;list=congresoagsoficial" width="100%" height="200px"></iframe>
                        </div>
                        <div style="margin-top: 2px;">
                            <a href="http://www.youtube.com/embed/?listType=user_uploads&amp;list=congresoagsoficial" target="_blank">
                                <h4 class="text-center">Último Evento Transmitido</h4>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8">
                    <a href="#">
                        <div class="row" style="color: #8f969e">
                            <div class="col-sm-3 text-center" style="">
                                <img class="image-right-index" src="Content/images/Index/iniciativasMonito.png" />
                            </div>
                            <div class="col-sm-9">
                                <h4 style="margin-top: 50PX;    " class="mayus text-left">Hasta el segundo periodo <br /> se han presentado</h4>
                                <h3 class="mayus text-left"><strong>349 Iniciativas</strong></h3>
                            </div>
                        </div>
                    </a>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item ">

                                <img src="Deputy/GetFileFromPathCompletee22d.jpg?filePath=C%3A%5CDocs%5CSlider%5CBANNER1.jpg&amp;virtualFolderId=4" alt="Banner1" style="width: 100%;">
                                <div class="carousel-caption">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="item ">

                                <img src="Deputy/GetFileFromPathComplete4a1d.jpg?filePath=C%3A%5CDocs%5CSlider%5CBANNER2.jpg&amp;virtualFolderId=4" alt="Banner2" style="width: 100%;">
                                <div class="carousel-caption">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </div>
                            <div class="item active">

                                <a href="Deputy/GetFileFromPathComplete/10228ef2?filePath=C%3A%5CDocs%5CSlider%5C1917%2C%20an%CC%83o%20de%20un%20gran%20pacto.epub&amp;virtualFolderId=4" target="_blank">
                                    <img src="Deputy/GetFileFromPathComplete006b.jpg?filePath=C%3A%5CDocs%5CSlider%5CLIBRO_(BANNER)-02.jpg&amp;virtualFolderId=4" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <h3></h3>
                                        <p></p>
                                        <div class="pull-right text-center">
                                            <div class="descargasBannerIcon">
                                                <label style="margin-top: 50px;">474</label>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="item ">

                                <a href="Deputy/GetFileFromPathComplete/10247fcb.pdf?filePath=C%3A%5CDocs%5CSlider%5Ccomic.pdf&amp;virtualFolderId=4" target="_blank">
                                    <img src="Deputy/GetFileFromPathCompletef330.jpg?filePath=C%3A%5CDocs%5CSlider%5Cbanner_comic.jpg&amp;virtualFolderId=4" style="width: 100%;">
                                    <div class="carousel-caption">
                                        <h3></h3>
                                        <p></p>
                                    </div>

                                </a>
                            </div>



                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="row" style="margin-top: 10px;">

                        <a target="_blank" href="http://www.canaldelcongreso.gob.mx/">
                            <div class="col-sm-3">
                                <img src="Content/images/Index/CANAL_CONGRESO_OVER.jpg" />
                            </div>
                        </a>
                        <div class="col-sm-3 text-center">
                            <a target="_blank" href="https://www.youtube.com/user/congresoagsoficial">
                                <div style="background-color:#807380;height: 155px;">
                                    <label class="mayus text-center" style="color:white; margin-top:10px;height: 42px;">Canal youtube</label>
                                    <div class="generic2 youtubeBtn"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 text-center">
                            <a target="_blank" href="https://www.facebook.com/hcongresoags/">
                                <div style="background-color:#93a0b0;height: 155px;">
                                    <label class="mayus text-center" style="color:white; margin-top:10px;height: 42px;">Siguenos en</label>
                                    <div class="generic2 faceBookBtn"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 text-center">
                            <a target="_blank" href="https://mail.google.com/">
                                <div style="background-color:#809980;height: 155px;">
                                    <label class="mayus text-center" style="color:white; margin-top:10px;height: 42px;">CORREO INSTITUCIONAL</label>
                                    <div class="generic2 commBtn" style=""></div>
                                </div>
                            </a>
                        </div>

                    </div>


                </div>
            </div>


            <script type="text/javascript">
                $(function () {
                    if ('4' > 0) {
                        var miliseconds = 30000 * '4'
                        setTimeout(function () {
                            window.location.reload(1);
                        }, miliseconds );
                    }

                    $('.modal').click(function () {
                        $('<div/>').appendTo('body').dialog({
                            close: function (event, ui) {
                                dialog.remove();
                            },
                            modal: true
                        }).load(this.href, {});

                        return false;
                    });
                });
            </script>

        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row row-relative">
        <div class="row row-footer">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 txt-right">
                        <p class="p-footer">H. Congreso del Estado de Aguascalientes. LXIII Legislatura 2016-2018</p>
                        <p class="p-footer">Plaza de la Patria 109 Oriente, Zona Centro, C.P. 20000</p>
                        <p class="p-footer"> Aguascalientes, Aguascalientes</p>
                    </div>
                    <div class="col-md-6 txt-left">
                        <p class="p-footer"><img src="Content/footer/tel.png" class="img-footer"> Tel: 01 (449) 910 3210 y 910 3240</p>
                        <p class="p-footer">
                            <img src="Content/footer/msj.png" class="img-footer">contacto@congresoags.gob.mx

                        </p>
                        <p>
                            <a style="color:white;text-decoration: underline;" href="Suggestions.html" target="_blank">
                                <img src="Content/footer/msj.png" class="img-footer">Comentarios
                            </a>
                        </p>
                        <p class="p-footer">

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>





<script src="Scripts/AppScripts/Layout129e.js?v=1.7" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {
        Layout.init({
            uriGetFilesByPeriod: '/File/DownloadFiles',
            uriHomeIndex: '/',
            uriFileShow: '/Transparency/ShowFile',
        });
    });

</script>
</body>

<!-- Mirrored from www.congresoags.gob.mx/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jun 2018 17:19:43 GMT -->
</html>