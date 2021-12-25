<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo"<H1><center>ตารางรายงานสถานการโควิด-19 แยกจังหวัด</center></H1>";
  echo "<br><br>";
  echo "<body style='background-color:#F8F8FF'>";

  echo "<center><table border='1'>";
  echo "<tr align = 'center'>";

  echo "<td bgcolor='#FDF5E6'>"; 
  echo "<b>ลำดับ</b>";
  echo "</td>"; 

  echo "<td bgcolor='#FFEBCD'.valign='middle'>"; 
  echo "<b>จังหวัด</b>";
  echo "</td>";

  echo "<td bgcolor='#FFE4B5'>"; 
  echo "<b>ผู้ป่วยใหม่</b>";
  echo "</td>";

  echo "<td bgcolor='#FFF5EE'>"; 
  echo "<b>ผู้ป่วยรวม</b>";
  echo "</td>";

  echo "<td bgcolor='#F0F8FF'>"; 
  echo "<b>ผู้ป่วยใหม่ในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#E6E6FA'>"; 
  echo "<b>ผู้ป่วยรวมในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#FFFAF0'>"; 
  echo "<b>ผู้เสียชีวิตใหม่</b>";
  echo "</td>";
  echo "<td bgcolor='#FAEBD7'>"; 
  echo "<b>ผู้เสียชีวิตรวม</b>";
  echo "</td>";
  echo "<td bgcolor='#FFFFF0'>"; 
  echo "<b>วันที่อัพเดต</b>";
  echo "</td>";

  
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#FDF5E6'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#FFEBCD'>"; 
    echo $val->province;
    echo "</td>"; 
    echo "<td bgcolor='#FFE4B5'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#FFF5EE'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#F0F8FF'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#E6E6FA'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FFFAF0'>"; 
    echo $val-> new_death;
    echo "</td>";
    echo "<td bgcolor='#FAEBD7'>"; 
    echo $val-> total_death;
    echo "</td>";
    echo "<td bgcolor='#FFFFF0'>"; 
    echo $val-> txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo"</center>";
?>
covid19.ddc.moph.go.th
covid19.ddc.moph.go.th
