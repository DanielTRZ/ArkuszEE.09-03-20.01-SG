<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Progonza pogody Poznań</title>
<link rel="stylesheet" href="styl4.css">   
</head>
<body>
<div class="banlewy">
<p>maj, 2019</p>         
</div>
<div class="bansrodkowy">
<h2>Prognoza dla Poznania</h2>    
</div>
<div class="banprawy">
<img src="logo.png" alt="prognoza">
</div>
<div class="lewy">
<a href="kwerendy.txt">Kwerendy</a>
</div>  
<div class="prawy">
<img src="obraz.jpg" alt="Polska,Poznań">
</div>   
<div class="glowny">
<table>
<tr id="tri">
<td >Lp.</td>
<td>Data</td>
<td>NOC - TEMPERATURA</td>
<td>DZIEŃ - TEMPERATURA</td>
<td>OPADY[mm/h]</td>
<td>CIŚNIENIE[hPa]</td>
</tr>
           
<?php
$baza=mysqli_connect('localhost','root','','prognoza');
if(mysqli_connect_errno()){
echo "wystąpił błąd połączenia z bazą";
}
$wynik=mysqli_query($baza,"SELECT * FROM `pogoda` WHERE `miasta_id`=2 ORDER BY `data_prognozy` DESC");
while($row = mysqli_fetch_array($wynik)){
               
echo "<tr>";
echo "<td>";
echo  $row['id'];   
echo "</td>";   
echo "<td>";
echo $row['data_prognozy'];"<br>";
echo "</td>";  
echo "<td>";
echo $row['temperatura_noc'];"<br>";
echo "</td>";
echo "<td>";
            echo $row['temperatura_dzien'];"<br>";
            echo "</td>";
            echo "<td>";
            echo $row['opady'];"<br>";
            echo "</td>";
            echo "<td>";
            echo $row['cisnienie'];"<br>";
            echo "</td>";
            echo "</tr>";       
           }  
           mysqli_close($baza);
           ?>
</table>
    </div>
<div class="stopka">
<p> Stronę wykonał: Daniel</p>
</div>
</body>
</html>
