<?php
class fechahoy{
    public function fechahoy(){
        $hoy = getdate();
        $d = $hoy['mday'];
        $m = $hoy['mon'];
        $y = $hoy['year'];
        return $y."-".$m."-".$d;
    }
    public function horahoy(){
        $todayh = getdate();
        $hora = $hoy['0'];
        $minuto = $hoy['minutes'];
        $se = $hoy['seconds'];
        
        return $hora.":".$minuto.":".$se;
    }
     public function arrayfecha(){
        $hoy = getdate();
        return $hoy;
    }
    
}
?>