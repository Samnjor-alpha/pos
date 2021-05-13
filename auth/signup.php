<?php include 'includes/regprocess.php';


?>



<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>POS </title>
    <meta name="keywords" content="pos,sale,check out"/>
    <meta name="description" content="Point Of Sale">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="../assets/skin/css/angular-material.min.css">

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/icomoon/icomoon.css">

    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/animatedsvgicons/css/codropsicons.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="../assets/allcp/forms/css/forms.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="../assets/skin/default_skin/less/theme.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>

    function checkAvailability() {

        jQuery.ajax({
            url: "check_user_availability",
            data: 'username=' + $("#username").val(),
            type: "POST",
            success: function (data) {
                $("#user-availability-status").html(data);

            },
            error: function () {
            }
        });
    }

</script>

</head>

<body class="utility-page sb-l-c sb-r-c">


<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Content -->
        <section id="content" class="">

            <!-- Registration -->
            <div class="allcp-form theme-primary mw600" >
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <img src="../assets/img/logo.png" alt=""/>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading pn">
                                    <span class="panel-title">
                                      Registration form
                                    </span>
                    </div>
                    <!-- /Panel Heading -->

                    <form method="post" action="" >
                        <div class="panel-body pn">
                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="firstname" id="firstname"
                                               class="gui-input"
                                               placeholder="First name...">
                                        <span class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="lastname" id="lastname" class="gui-input"
                                               placeholder="Last name...">
                                        <span class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email address">
                                    <span class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username"  onblur="checkAvailability()" class="gui-input"
                                           placeholder="username">
                                    <span id="user-availability-status"></span>
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Create a password">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="confirmPassword" class="field prepend-icon">
                                    <input type="password" name="confirmPassword" id="confirmPassword"
                                           class="gui-input"
                                           placeholder="Retype your password">
                                    <span class="field-icon">
                                        <i class="fa fa-unlock-alt"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">


                                    <button type="submit" name="reg" class="btn btn-block btn-bordered btn-primary">I Accept - Create Account
                                    </button>

                            </div>
                            <!-- /section -->
                            <?php if (!empty($msg)): ?>
                                <div class="alert <?php echo $msg_class ?>" role="alert">
                                    <?php echo $msg; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /Form -->
                        <div class="panel-footer">

                        </div>
                        <!-- /Panel Footer -->
                    </form>
                </div>
            </div>
            <!-- /Spec Form -->

        </section>
        <!-- /Content -->

    </section>


</div>

<script src="../assets/js/jquery/jquery-1.12.3.min.js"></script>
<script src="../assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- AnimatedSVGIcons -->
<script src="../assets/fonts/animatedsvgicons/js/snap.svg-min.js"></script>
<script src="../assets/fonts/animatedsvgicons/js/svgicons-config.js"></script>
<script src="../assets/fonts/animatedsvgicons/js/svgicons.js"></script>
<script src="../assets/fonts/animatedsvgicons/js/svgicons-init.js"></script>

<!-- Scroll -->
<script src="../assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="../assets/js/plugins/highcharts/highcharts.js"></script>

<script src="../assets/js/plugins/canvasbg/canvasbg.js"></script>

<!-- Theme Scripts -->
<script src="../assets/js/utility/utility.js"></script>
<script src="../assets/js/demo/demo.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/demo/widgets_sidebar.js"></script>
<script src="../assets/js/pages/dashboard_init.js"></script>

<!-- /Scripts -->

</body>

</html>

