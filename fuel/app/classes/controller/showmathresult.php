<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>sample</title>
</head>
<body>
<?php
use \Model\MyMath;

class Controller_ShowMathResult extends Controller {
    public function action_show($a,$b) {
        //$data = array();
        echo "Tham so 1: ".$a."<br>";
        echo "Tham so 2: ".$b."<br>";
        echo "Kết quả tính toán: <br>";
        $result = new MyMath();
        echo "Cộng: ".$result->cong($a,$b)."<br>";
        echo "Trừ: ".$result->tru($a,$b)."<br>";
        echo "Nhân: ".$result->nhan($a,$b)."<br>";
        echo "Chia: ".$result->chia($a,$b)."<br>";
    }
}
?>
</body>
</html>