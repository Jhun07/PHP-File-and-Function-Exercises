<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 1</title>
</head>
<body>
<?php 
function fileLine($fileName,$lineNumber){
    if(file_exists($fileName)){    
            $line=file($fileName);
            echo $line[$lineNumber-1];
            }
} 
echo 'moya.text ';
fileLine('moya.txt',5);
?>
</body>

</html>

