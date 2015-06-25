<?php
namespace Mymath;

class BasicOperator {
    public function cong($a,$b) {
        return ($a+$b);
    }
    public function tru($a,$b) {
        return ($a-$b);
    }
    public function nhan($a,$b) {
        return ($a*$b);
    }
    public function chia($a,$b) {
        if($b == 0)
            echo "So bi chia = 0, hay nhap so khac 0";
        else    
            return ($a/$b);
    }
}