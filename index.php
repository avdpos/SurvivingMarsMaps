<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <title>Surviving Mars Maps</title>
    <!-- Bootstrap koppling - hoppas jag i alla fall -->
    <meta content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="container">
    <?php include 'include/views/_mapselector.php'; ?>
    
    <button onclick="clear_results()">Clear Results</button>

    <?php 
    if  (!empty($_SESSION['active_search']))
    {
        if ($_SESSION['active_search'] == TRUE)
        {
            include  'include/views/_mapresults.php';
        }
    }
    ?>
    
</body>
</html>

