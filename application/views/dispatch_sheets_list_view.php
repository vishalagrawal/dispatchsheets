<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" href="<?php echo base_url();?>/favicon.ico" type="image/ico">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/main.css">
        <script type="text/javascript" src="<?php echo asset_url();?>js/main.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        
        <!-- dispatch sheet controls -->
        <div class="dispatch-sheet-controls">
            <div class="dispatch-sheet-driver-controls">
                driver filter(s)
            </div>
            
            <div class="dispatch-sheet-date-controls" onclick="">
                &larr; Previous Day
            </div>
            
            <div class="dispatch-sheet-date" id="date-range">
                   <?php echo date('F j, Y',strtotime($start_date));?> - <?php echo date('F j, Y',strtotime("+3 day", strtotime($start_date)));?>
            </div>
            
            <div class="dispatch-sheet-date-controls" onclick="">
                    Next Day &rarr;
            </div>
        </div>

        <!-- headers for the dispatch sheet -->
        <div class="dispatch-sheet-headers">
            <div class="left-column-drivers">
                <div class="header">
                    Drivers
                </div>
            </div>

            <div class="right-column-days">
                <div class="header" id="start-date">
                    <?php echo $start_date;?>
                </div>
            </div>

            <div class="right-column-days alternate-color">
                <div class="header" id="start-date-plus-1">
                    <?php echo date('l, F j Y',strtotime("+1 day", strtotime($start_date)));?>
                </div>
            </div>

            <div class="right-column-days" id="start-date-plus-2">
                <div class="header">
                    <?php echo date('l, F j Y',strtotime("+2 day", strtotime($start_date)));?>
                </div>
            </div>

            <div class="right-column-days alternate-color">
                <div class="header" id="start-date-plus-3">
                    <?php echo date('l, F j Y',strtotime("+3 day", strtotime($start_date)));?>
                </div>
            </div>
        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-<?php echo $google_analytics_id;?>');ga('send','pageview');
        </script>
    </body>
</html>
