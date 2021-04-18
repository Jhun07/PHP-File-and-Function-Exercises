
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function randomLiner($filename){
        if(file_exists($filename)){  
            $newFile = strtolower($filename);
            $vowellength =  substr_count($newFile, 'a')
                            + substr_count($newFile, 'e')
                            + substr_count($newFile, 'i')
                            + substr_count($newFile, 'o')
                            + substr_count($newFile, 'u');
            $file = fopen($filename,'r');
             $even = 2;
             $odd = 5;
            if($vowellength % 2 == 0){
                $count = 0;
                while(!feof($file)){
                    $count++;
                    $line = fgets($file);
                    if($count == $even){
                         echo $line;
                    }
                }
            }
            else
            {
                $count = 0;
                while(!feof($file)){
                    $count++;
                    $line = fgets($file);
                    if($count == $odd){
                         echo $line;
                    }
                }
            }
        } 
        else
        {
            echo($filename.' No file exist !');
        }
    }
    echo randomLiner("moya.txt");
    
    ?>
</body>
</html>
