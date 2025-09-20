<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $eid=501;
        $ename='jayesh mali';
        $esal=3000;
        $edept='IT';

            $mycon=mysqli_connect("localhost","root","","mydata");
            echo "Connection success";
            $sql="insert into emp values(?,?,?,?)";
            $ps=$mycon->prepare($sql);
            $ps->bind_param('isis',$eid, $ename, $esal, $edept);
            $ps->execute();
            echo "Record inserted successfully";
    ?>
    
</body>
</html>