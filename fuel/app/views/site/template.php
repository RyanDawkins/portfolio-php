<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php print isset($title) ? $title : "Ryan Dawkins"; ?></title>

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php print isset($css) ? Asset::css($css) : ""; ?>

    </head>
    <body>

        <?php print isset($navbar) ? html_entity_decode($navbar) : ""; ?>
        <div><?php print isset($content) ? html_entity_decode($content) : ""; ?></div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/lib/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/lib/bootstrap.min.js"></script>
        <script src="assets/js/lib/jquery.formatter.min.js"></script>
        <script src="assets/js/navbar.js"></script>
    </body>
</html>