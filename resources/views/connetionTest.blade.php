<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
try{
DB::connection()->getPdo();
if(DB::connection()->getDatabaseName()){
echo"Yes!SuccessfullyconnectedtotheDB:".
DB::connection()->getDatabaseName();}else{
die("Couldnotfindthedatabase");
}
}catch(\Exception$e){
die("Couldnotconnecttothedatabase,error:".$e);
}

?>
</body>
</html>