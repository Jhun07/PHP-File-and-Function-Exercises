<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
* {
    font: bold large pink;
}

.btn {
    width: 80%;
}

.container {
    margin-left: 27%;
    margin-right: 30%;
    padding: 5%;
    border: 2px outset black;
    width: 50%;
    border-radius: 10% 10% 10% 10%;
    box-shadow: 10px 10px #FFE4B5;
}

#input {
    background-color: #FFE4B5;
    color: black;
    border: 2px solid gray;
    border-radius: 4px;
    width: 80%;
    margin-left: 10%;
}

label {
    margin-left: 26%;
}
</style>

<body>

    <div class="container mt-5 bg-light">
        <form method="post">
            <div class="mb-3">
                <label class="form-label ">
                    <h5>Enter number: </h5>
                </label>
                <input type="number" name="number" id="input" class="form-control" 
                    placeholder="Number only">
            </div>
            <center>
                <input type="submit" name='submit' class="btn btn-secondary">
                <br>
        </form>
        <br>
</body>
<?php  
if(isset($_POST['submit'])){
    $entry = $_POST['number'];
     function factorial($number){
          $factorial=1;
          if ($number <0){
              $value=abs($number);
              echo "It's absolute value is ".$value;
            }else if($number >=0){
                for ($i = 1; $i <= $number; $i++){         
                    $factorial = $factorial * $i;  
                 }  
                 echo "The factorial of ".$number." is ".$factorial ;
                }
            }
            factorial($entry);
        }
?>
</center>
</div>

</html>