<?php include "upd.php";?>
<?php include "fun.php";?>
<!-- <?php include "updfn.php";?> -->
<?php
if(isset($_POST['submit'])) {
    updtable();
    showData();
    dltrows();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="flex-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <div class = "container">
        <div class="col-xs-6">

            
        <form action="dbupd.php" method="post">
                <div class="form_group">
                    <label for="username">Uname</label>
                    <input type="text" name="username" class="form-control">
                    </div>

                <div class="form_group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <br>
                <div class="form_group">
                    <select name="id" id="">
                    <?php
                        showData();
                    ?>
                    </select>
                </div><br>
                
                <input class="btn btn-success" type="submit" name="submit" value="INSERT">
                <input class="btn btn-warning" type="submit" name="submit" value="UPDATE">
                <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
                
        </form>  

    </div>
    </div>

</body>
</html>