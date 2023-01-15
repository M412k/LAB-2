<!DOCTYPE html>
<html>

<body>
    <?php
    $name =$_GET["name"];
    $age=$_GET["age"];
    $gender=$_GET["gender"];
    $status=$_GET["status"];
    if ($age < "15" && $gender == "male" && $status == "unmarried"){
        $titaltxt="ดช.";
        $gender = "ผู้ชาย";
        $status="โสด";
    }else if($age > "14" && $gender == "male" && $status == "unmarried"){
        $titaltxt="นาย";
        $gender = "ผู้ชาย";
        $status="โสด";
    }else if($age > "14" && $gender == "male" && $status == "married"){
        $titaltxt="นาย";
        $gender = "เพศชาย";
        $status="แต่งงานแล้ว";
    }else if($age < "15" && $gender == "male" && $status == "married"){
        $titaltxt="ดช.";
        $gender = "ผู้ชาย";
        $status="สมรส";
    }else if($age < "15" && $gender == "female" && $status == "unmarried"){
        $titaltxt="ดญ.";
        $gender = "ผู้หญิง";
        $status="โสด";
    }else if($age > "14" && $gender == "female" && $status == "unmarried"){
        $titaltxt="นางสาว";
        $gender = "ผู้หญิง";
        $status="โสด";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="นาง";
        $gender = "ผู้หญิง";
        $status="สมรส";
    }else if($age < "15" && $gender == "female" && $status == "married"){
        $titaltxt="ดญ.";
        $gender = "ผู้หญิง";
        $status="สมรส";
    }
    echo "<font style='font-size:24px'>ข้อมูลของคุณ</font>"."<br>";
    echo "ชื่อ:".$titaltxt.$name."<br>";
    echo "อายุ:".$age."<br>";
    echo "เพศ:".$gender."<br>";
    echo "สถานะ:".$status."<br>";
    ?>
</body>

</html>