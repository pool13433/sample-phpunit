<?php 
//require '.\vendor\autoload.php';
use controller\Triangle;
use PHPUnit\Framework\TestCase;
class TriangleTest extends TestCase{

    public function testIsEqualTwinNumber(){
        $triangle = new Triangle();
        $reuslt = $triangle->equalTwinNumber(200,200);
        //echo "reuslt :: ".$reuslt;
        $this->assertEquals(true,$reuslt);
    }

}
?>