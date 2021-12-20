<?php 


// questa è una variabile
$name = 'Ugo';
$numero = 1;

// echo stampa stringhe e numeri ma non array
echo $_GET;
echo '<br>';


// con die interrompo l'esecuzione del codice
//die;

// per stampare un array utilizzare var_dump()
echo '<pre>';
var_dump($_GET);
echo '</pre>';

$colori = ['giallo','rosso','verde','blu'];

var_dump($colori);
echo '</pre>';

$saluto = "buona giornata a tutti!";

var_dump(explode(' ',$saluto));


$n1 = 5;
$n2 = 3;
echo $n1;
$n1 += $n2;


echo "<br>$n2";
// sono con apice doppio è possibile inserire una var in una stringa
echo "<br>$n1 è la somma";

$aggiunta_saluto = " (ma proprio a tutti).";

// .= concatena 2 stringhe
$saluto .= $aggiunta_saluto;

echo "<br>$saluto";

$str1 = "Ciao";
$str2 = " come stai?";

$str3 = $str1 . $str2;

echo "<br>$str3";

$str1 .= $str2;
echo "<br>$str1";
echo "<br>";
$colori = ['giallo','rosso','verde','blu'];
var_dump($colori);

// in_array restituisce true se trova l'elemento in un array
if(in_array('giallo',$colori)){
  echo '<h2>giallo esiste</h2>';
}

echo $colori[1];

// con $array[] = valore effettuo un push
$colori[] = 'azzurro';
var_dump($colori);

$user = [
  'firstname' => 'Ugo',
  'lastname' => 'de Ughi'
];
echo "<br>";
var_dump($user);

//array_keys restituisce un array con tutte le chivai din una altro array
var_dump(array_keys($user) );

// verifico l'esistena di una chive nell'array
if(array_key_exists('firstname',$user)){
  echo '<h2>firstname esiste</h2>';
}

if(in_array('Giuseppe', $user)){
  echo '<h2>Giuseppe esiste</h2>';
}else{
  echo '<h3>NON ESISTE</h3>';
}

echo "<h1> HO TROVATO La CHIAVE DI Ugo: ";
// array_search se trova l'occorrennza nei valori resituisce la chiave altrimenti FALSE
echo array_search('Ugo',$user);
echo "</h1>";

$key = 'firstname';

// stampa con chiave scritta con stringa
echo $user['firstname'];
echo "<br>";
// stampa con chiave dinamica
echo $user[$key];

// per inserire direttamente in una stringa un elemento preso da un array lo devo inserire dentro le graffe
echo "<br>Il nome dell'utente è {$user['firstname']}";


// equivalente in PHP dell'array di oggetti
$team = [ // primo livello: array "contenitore" con indici numerici
   
  [ // secondi livelli: array associtativi
      "name" => "Fabio",
      "lastname" => "Forghieri",
      "role" => "Co-Founder",
  ],
  [
      "name" => "Michele",
      "lastname" => "Papagni",
      "role" => "Head of Teaching",
  ]
];

var_dump($team);


   $myNewInt = rand(1, 100);

   echo "Il numero random estratto è $myNewInt"; 
   //Stamperà un numero random tra 1 e 100

function getRandomArray($min, $max, $nItems){

  // creo un array vuoto
  $newArray = [];

  //verifico che non ci sia la possibilità che vengano estratti più numeri di quelli possibili
  if(($max - $min) < $nItems){
    $nItems = $max - $min;
  }

  // eseguo l'operazione fino a aquando non è pieno
  while(count($newArray) <  $nItems){
    // estraggo il numer random
    $number = rand($min,$max);
    // se il numero non è presente nell'array
    if(!in_array($number,$newArray)){
      // pusho il numer nell'array
      $newArray[] = $number;
    }

  }

  return $newArray;

}

var_dump(getRandomArray(5,10,10));


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
    <h1>Ciao <?php echo $name; ?></h1>
    <h2> <?php echo $_GET['firstname']; ?> <?php echo $_GET['lastname']; ?>  </h2>
    <h3>La stringa "<?php echo $saluto ?>" è lunga <?php echo strlen($saluto); ?> caratteri</h3>
    <h3>Con ucfirst(stringa): <?php echo ucfirst($saluto) ?></h3>
    <h3>Con ucwords(stringa): <?php echo ucwords($saluto) ?></h3>
    <?php
        echo "<br>Il nome dell'utente è {$user['firstname']}";
    ?>
</body>
</html>