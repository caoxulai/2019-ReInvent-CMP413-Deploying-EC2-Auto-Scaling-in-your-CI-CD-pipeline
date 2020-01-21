<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EC2 Auto Scaling Application</title>
    <meta name="description" content="" />
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/gradients.css" rel="stylesheet">
</head>

<body class="">
    <div class="wrapper">
    <p style="padding-top: 30rem; padding-left: 30rem; padding-right: 30rem;">
    <?php
      date_default_timezone_set('America/Los_Angeles');
      // Print out the current data and tie
      print "The current date and time is: <i>";
      print date("g:i A l, F j Y.");
      print "</i><br/>";
      print "Performing CPU-intensive tasks...";
      for ($i = 0; $i < 10000000; $i++) {
        $s += $i;
      }
    ?>
    </p>
    </div>
    <script src="js/set-background.js"></script>
</body>

</html>
