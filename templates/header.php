<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../templates/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../templates/css/styleqi.css" type="text/css">
	<script type="text/javascript" src="../templates/js/jquery.js"></script>
	<script type="text/javascript" src="../templates/js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Beacon Navigation</title>
        <?php endif ?>
</head>


<body>
    <div id="top">
        <div class="container-fluid">
	       <div class="card hovercard">
                <div class="card-background">
                    <img class="card-bkimg" alt="" src="../templates/images/orange_background.jpg">
                </div>
            </div>
        </div>
    </div>
    
    <div id="middle">
    <div class="container">
