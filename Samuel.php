<?php
  function vorstellen($name, $email, $hobby, $funFact)
  {
    $kennenLernen = array($name, $email, $hobby, $funFact);
    print_r($kennenLernen);
  }

  vorstellen('Samuel', 'phedas01@gmail.com', 'Basketball spielen', '6ft tall')
?>
