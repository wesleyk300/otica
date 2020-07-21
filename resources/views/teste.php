<?php
class Passagem {
    public $aMemberVar = ' Testando passagem de parametro&&&&';
    public $a = ' Testando primeira variavel&&&&';
    public $b = ' Testando segunda variavel&&&&';
    public $c = ' Testando terceira variavel&&&&';
    
   
    public function passagemdeparametro () {
       echo $this->aMemberVar;
       echo $this->a;
       

    }

    public function passagemdeparametrooutro () {
        echo $this->b;
        echo $this->c;
        
 
     }


}

?>