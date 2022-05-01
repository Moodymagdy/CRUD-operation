<?php
$host = "localhost";
$user = 'root';
$password= "";
$dbName = "training_company";



    


$conn= mysqli_connect($host ,$user ,$password, $dbName);
#### connection done
if (isset($_POST['send'])) {
    $name= $_POST['courseName'];
    $cost= $_POST['courseCost'];
    
    $insert = "INSERT INTO `courses` VALUES (null, '$name', $cost)";
    $i= mysqli_query($conn, $insert);
    if ($i){
        echo '<div class="alert mx-auto w-50 alert-info"> Insert data done </div>';
    }
}

$select = "select * from `courses`";
 $s= mysqli_query($conn,$select);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<div class="container col-6 mt-5 text-center">
    <div class="card card-body">
    <form method ="POST">
        <div class="form-group">
            <label> Course Name </label>
            <input type="text" name ="courseName" class ="form-control" placeholder ="Course Name">
        </div>
        <div class="form-group">
            <label> Course Cost </label>
            <input type="text" name="courseCost" class ="form-control" placeholder ="Course Cost">
        </div>
        <button class=" btn btn-info" name="send"> Send data</button>

    </form>
    </div>
  





    <div class="container col-6 mt-5 text-center">
        <table class="table table-dark">
            <tr>
                <th> id </th>
                <th>name</th>
                <th>cost</th>
            </tr>
         
    <?php foreach ($s as $data) { ?>
        <tr>
            <th> <?php echo $data['id']?> </th>
            <th> <?php echo $data['name']?> </th>
            <th> <?php echo $data['cost']?> </th>
        </tr>
        <?php } ?>

        </table>
    </div>


</body>
</html>




</body>
</html>