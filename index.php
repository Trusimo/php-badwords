<?php
$par = "Ci sarà un giorno in cui il coraggio degli uomini cederà, in cui abbandoneremo gli amici e spezzeremo ogni legame di fratellanza,
ma non è questo il giorno! Ci sarà l’ora dei lupi e degli scudi frantumati quando l’era degli uomini arriverà al crollo, ma non è questo il giorno!
Quest’oggi combattiamo!";

?>

<p><?php echo $par ?></p>
<p><?php echo strlen($par) ?></p>
<p><?php echo str_replace("giorno", "***", $par) ?></p>