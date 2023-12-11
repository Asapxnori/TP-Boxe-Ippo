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
            echo "Round $i : ";

            if ($ippo->getSpeed ()> $challenger->getSpeed())
            {
                $staminaChall = $challenger->getStamina() - $ippo->getStrengh();
                $challenger->setStamina($staminaChall);
                echo "La stamina du challenger est $staminaChall et la stamina de Ippo est {$ippo->getStamina()} \n";

            }

            else 
            {
                $staminaIppo = $ippo->getStamina() - $challenger->getStrengh();
                $ippo->setStamina($staminaIppo);
                echo "La stamina de Ippo est $staminaIppo et la stamina du challenger est {$challenger->getStamina()} \n";
            }
        }
    }
}

$hajime = new Fight;
echo $hajime->fighting($ippo,$challenger);

?>