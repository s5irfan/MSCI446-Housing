<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TeamsNotCreated</title>
    <!-- Ensure the relative paths to Bootstrap and main.css are correct.
         Check survey/survey.php for reference. -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet">
    <style>
        .main-questions{
            font-size: 16px;
            margin-top: 20px;}
        .submission-area{
            margin-top: 20px;
        }
        .row{
            font-size: 14px;
        }
    </style>
    </head>
    <body>
        <!-- Keep the container, it's good for page sizing. -->
        <div class="container">
        <div class="header">
         <h1>Teams Not Created</h1>
        </div>
        <div class="main-questions">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "team_8_team_maker";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
            ?>
        </div>
    </div>
    </body>
    <!-- Ensure the relative path for the following JavaScript files are correct.
         Check survey/survey.php for reference. -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.js"></script>
</html>