<?php
require_once "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="theme-color" content="<?php theme_color(); ?>">
    <link rel="shortcut icon" href="<?php favicon(); ?>" type="image/x-icon">
    <link rel="icon" href="<?php favicon(); ?>"
    " type="image/x-icon">
    <title><?php page_title(); ?></title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="rounded px-2 py-4" id="box-bg">
                <div class="text-center">
                    <img src="<?php profile_img(); ?>" class="rounded-circle profile-img"
                         alt="<?php name("lowercase"); ?>">
                    <div class="clearfix mt-2">
                        <h3 class="cursor-default"><?php print name(); ?></h3>
                        <h6 class="cursor-default"><?php print job(); ?></h6>
                    </div>
                    <div class="clearfix mt-2 w-100">
                        <div class="btn-group-vertical w-100">
                            <?php facebook(); ?>
                            <?php instagram(); ?>
                            <?php twitter(); ?>
                            <?php github(); ?>
                            <?php telegram(); ?>
                            <!--- Manual Btn --->
                            <a href="https://iamiresmaeili7.ir/contact-me/" target="_blank" class="btn btn-warning">Contact
                                Form</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="rounded py-2" id="box-bg">
                <div class="w-100 text-center"><h6 class="cursor-default"><?php terminal_title(); ?>@root</h6></div>
                <div class="clearfix text-left terminal mt-2 px-2 py-1">
                    <p><small><?php bio(); ?></small></p>
                    <p><span class="text-success">—</span><small> for back to homepage click here</small>
                        <a class="btn btn-sm btn-outline-light" href="<?php back_btn_url(); ?>"><small>back</small></a>
                    </p>
                    <p class="cursor-default text-warning"><small>➜ ~ </small></p>
                </div>
            </div>
            <br>
            <!--- skills --->
            <?php
            if (skills_display() == true) {
            ?>
            <div class="rounded py-2" id="box-bg">
                <div class="w-100 text-center"><h6 class="cursor-default">skills</h6></div>
                <div class="clearfix text-left skills mt-2 px-2 py-1">
                    <?php
                    if (skills_items_exist() == true) {
                        ?>
                        <?php
                        $content = file_get_contents("content/content.json");
                        $data = json_decode($content, true);
                        $skills = $data['skills'];
                        for ($i = 0; $i < count($skills['items']); $i++) {
                            $items_name = $skills['items'][$i]['name'];
                            $items_name = strtoupper($items_name);
                            $items_value = $skills['items'][$i]['value'];
                            ?>
                            <label for="skill-1"><?php if ($items_name == null) {
                                    $items_name = "no name";
                                }
                                print $items_name; ?> - <?php if ($items_value == null) {
                                    $items_value = 0;
                                }
                                print $items_value; ?>%</label>
                            <div class="progress" id="#skill-1">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                     style="width: <?php if ($items_value == null) {
                                         $items_value = 0;
                                     }
                                     print $items_value; ?>%" aria-valuenow="<?php if ($items_value == null) {
                                    $items_value = 0;
                                }
                                print $items_value; ?>"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    } else {
                        print "<h4 class='cursor-default'>no item</h4>";
                    }
                    }
                    ?>
                </div>
            </div>
            <!--- skills --->
            <br>
            <!--- portfolio --->
            <?php
            if (portfolio_display() == true) {
                ?>
                <div class="rounded py-2" id="box-bg">
                    <div class="w-100 text-center"><h6 class="cursor-default">portfolio</div>
                    <div class="clearfix text-left mt-2 px-2 py-1">
                        <div class="card-group">
                            <?php
                            if (portfolio_items_exist() == true) {
                                ?>
                                <?php
                                $content = file_get_contents("content/content.json");
                                $data = json_decode($content, true);
                                $portfolio = $data['portfolio'];
                                for ($i = 0; $i < count($portfolio['items']); $i++) {
                                    $items_name = $portfolio['items'][$i]['name'];
                                    $items_img = $portfolio['items'][$i]['img'];
                                    $items_link = $portfolio['items'][$i]['link'];
                                    ?>
                                    <!--- loop --->
                                    <div class="card card-portfolio">
                                        <img src="<?php if ($items_img == null) {
                                            $items_img = "assets/img/default.jpg";
                                        }
                                        print $items_img; ?>" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title cursor-default"><?php if ($items_name == null) {
                                                    $items_name = "no name...";
                                                }
                                                print $items_name; ?></h5>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?php if ($items_link == null) {
                                                $items_link = "#";
                                            }
                                            print $items_link; ?>" class="btn btn-dark btn-block">Go</a>
                                        </div>
                                    </div>
                                    <!--- loop --->
                                    <?php
                                }
                                ?>
                                <?php
                            } else {
                                print "<h4 class='cursor-default'>no item</h4>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <!--- portfolio --->
        </div>
        <div class="col-12 text-center cursor-default text-light my-4" id="footer">
            <p>made with <span class="text-danger">❤</span> v3.6
                - <?php print date("Y"); ?></p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>