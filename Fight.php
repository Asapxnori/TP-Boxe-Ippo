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
            $staminaIppo = $ippo->getStamina();
            return "La stamina du challenger est $staminaChall et la stamina de Ippo est $staminaIppo \n";

        }

        else 
        {
            $staminaIppo = $ippo->getStamina() - $challenger->getStrengh();
            $staminaChall = $challenger->getStamina();
            return "La stamina de Ippo est $staminaIppo et la stamina du challenger est $staminaChall \n";
        }
        
        

        }
    }
}


$hajime = new Fight;
echo $hajime->fighting($ippo,$challenger);

?>