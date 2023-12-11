<?php

require_once("Ippo.php");
require_once("Challenger.php");

class Fight
{
    public function fighting($ippo, $challenger)
    {
        $round = 10;
        for ($i = 1; $i <= $round; $i++)
        {

        if ($ippo->getSpeed ()> $challenger->getSpeed())
        {
            $staminaChall = $challenger->getStamina() - $ippo->getStrengh();
            return "La stamina du challenger est $staminaChall";

        }

        else 
        {
            $staminaIppo = $ippo->getStamina() - $challenger->getStrengh();
            return "La stamina de Ippo est $staminaIppo";
        }
        
        

        }
    }
}


$hajime = new Fight;
echo $hajime->fighting($ippo,$challenger);

?>