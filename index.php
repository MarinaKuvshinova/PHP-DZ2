<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>9.11</title>
    <link rel="stylesheet" href="../9.11/css/bootstrap.min.css"/>
</head>
<body>
<form action="index.php" method="post" class="container">
    <div class="form-group" style="padding: 10px; margin-bottom: 10px; overflow: hidden;">
        <div class="col-xs-3"><input type="number" min="0" max="255" class="form-control " name="codeRed" placeholder="Enter red code from 0 to 255" /></div>
        <div class="col-xs-3"><input type="number" min="0" max="255" class="form-control " name="codeGreen" placeholder="Enter green code from 0 to 255" /></div>
        <div class="col-xs-3"><input type="number" min="0" max="255" class="form-control " name="codeBlue" placeholder="Enter blue code from 0 to 255" /></div>
        <div class="col-xs-3"><input type="submit" class="btn btn-info col-xs-12 center-block" style="float: none;" value="Enter" name="button"/></div>
    </div>
    <div class="form-group" style="padding: 10px 20px; margin-bottom: 10px; overflow: hidden;">
        <?php
        if(isset($_POST['button'])){
            $r = $_POST['codeRed'];
            $g = $_POST['codeGreen'];
            $b = $_POST['codeBlue'];
            if((empty($r) && $r !== '0')||(empty($g) && $g !== '0')||(empty($b) && $b !== '0')) {
//            if(isset($r)||isset($g)||isset($b))
                echo '<h1 class="alert-danger" style="padding: 10px;">Не введены все оттенки цвета. Заполните все поля!!!!</h1>';
            }
            else
            {
                echo "<span class='col-xs-12' style='display:flex;align-items:center;justify-content:center;font-size:50px;line-height:1;height: 200px; border-radius: 4px; border: 1px solid #ccc;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);box-shadow: inset 0 1px 1px rgba(0,0,0,0.075); background-color: rgb($r,$g,$b); color: rgb($g+10,$r+10,$b+10);'>Text</span>";
            }
        }
        ?>
    </div>
</form>


<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>