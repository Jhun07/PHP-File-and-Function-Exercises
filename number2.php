<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 2</title>
</head>

<body>
<?php
function appendingLine($fileName, $newData, $lineNumber){
  if(file_exists($fileName)){
    $file = fopen($fileName, 'a');
    $lines = file ($fileName, FILE_IGNORE_NEW_LINES);
    array_splice($lines, $lineNumber-1, 0, $newData);
    file_put_contents($fileName, join("\n", ($lines)));
    fclose($file);

  }
}
appendingLine('moya.txt', 'Good work Son!',1);

echo "Constructed Successfully!";
?> 
</body>

</html>