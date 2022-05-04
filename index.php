<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/


$partite = [[
  "squadra1" => 'Milan',
  "squadra2" => 'Inter',
  "punti_squadra_1" => 60,  
  "punti_squadra_2" => 50,  
],[
  "squadra1" => 'Genoa',
  "squadra2" => 'Catania',
  "punti_squadra_1" => 82,  
  "punti_squadra_2" => 110,  
],[
  "squadra1" => 'Napoli',
  "squadra2" => 'Bologna',
  "punti_squadra_1" => 70,  
  "punti_squadra_2" => 100,  
]];



for($i=0; $i < count($partite); $i++){
  $partita = $partite[$i];
  echo($partita["squadra1"] . '-' . $partita["squadra2"] . '|' . $partita['punti_squadra_1'] . '-' . $partita['punti_squadra_2']);
};


?>