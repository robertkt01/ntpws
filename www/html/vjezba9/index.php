<?php
function checkHoliday($date){
  if(date('l', strtotime($date)) == 'Saturday'){
    return "Saturday";
  }else if(date('l', strtotime($date)) == 'Sunday'){
    return "Sunday";
  }else{
    $receivedDate = date('d M', strtotime($date));

    $holiday = array(
      '01 Jan' => 'New Year Day',
      '18 Jan' => 'Martin Luther King Day',
      '22 Feb' => 'Washington\'s Birthday',
      '05 Jul' => 'Independence Day',
      '11 Nov' => 'Veterans Day',
      '24 Dec' => 'Christmas Eve',
      '25 Dec' => 'Christmas Day',
      '31 Dec' => 'New Year Eve'
    );

    foreach($holiday as $key => $value){
      if($receivedDate == $key){
        return $value;
      }
    }
  }
}

function ducan($stanje="otvoren") {
	echo "Ducan je $stanje";
}
// ispis default vrijednosti
ducan();
echo "<br>";

$date = '28-10-2024';
$date = date('d-m-y');
// ispis zadane vrijednosti
if (checkHoliday($date))
	ducan("zatvoren");
else
	ducan("otvoren");
?>
