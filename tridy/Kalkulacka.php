<?php

class Kalkulacka
{
    public $a;
    public $b;
    
    public function __construct($a, $b)
    {
        if (is_numeric($a) && is_numeric($b))
        {
            $this->a = $a;
            $this->b = $b;
        }
        
        else
        {
            exit ('
                Zadali jste nesprávný vstup! Prosím zadávejte pouze čísla.<br>
                Při zadání desetinného čísla použijte tečku.
                ');
        }
        
    }
    
    public function soucet()
    {
        return ($this->a + $this->b);
        
    }
    
    public function rozdil()
    {
        return ($this->a - $this->b);
        
    }
    
    public function soucin()
    {
        return ($this->a * $this->b);

    }
    
    public function podil()
    {
        if ($this->b != 0)
        {
            return ($this->a / $this->b);
                       
        }
        
        else
        {
            return ('Nulou dělit nelze.');
            
        }
        
    }
    
}

?>
