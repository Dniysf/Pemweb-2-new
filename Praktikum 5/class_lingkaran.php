<?php
class Lingkaran{
    private $jari;
    const PHI = 3.14;
    public function __construct( $r )
    {
        $this->jari =$r;
    }
    function getLuas()
    {
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }
    function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}
?>