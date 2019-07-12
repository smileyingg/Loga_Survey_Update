<?php
 include 'config.php'; 

 //ตรวจสอบว่า มีค่า ตัวแปร $_GET['show_province'] เข้ามาหรือไม่   //แสดงรายชื่อจังหวัด
 if(isset($_GET['show_province'])){
  
  //คำสั่ง SQL เลือก id และ  ชื่อจังหวัด
  $sql = "SELECT province_id,province_name FROM province";
  
  //ประมวณผลคำสั่ง SQL
  $result = $conn->query($sql);

  //ตรวจสอบ จำนวนข้อมูลที่ได้ มีค่ามากกว่า  0 หรือไม่
  if ($result->num_rows > 0) {
   
   //วนลูปแสดงข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
   while($row = $result->fetch_assoc()) {
    
    //เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
    $json_result[] = [
     'id'=>$row['province_id'],
     'name'=>$row['province_name'],
    ];
   }
   
   //ใช้ Function json_encode แปลงข้อมูลในตัวแปร $json_result ให้เป็นรูปแบบ Json
   echo json_encode($json_result);
   
  } 
 }

 
 //ตรวจสอบว่า มีค่า ตัวแปร $_GET['province_id'] เข้ามาหรือไม่  //แสดงรายชืออำเภอ
 if(isset($_GET['province_id'])){

  //กำหนดให้ตัวแปร $province_id มีค่าเท่ากับ $_GET['province_id]
  $province_id = $_GET['province_id'];
  
  //คำสั่ง SQL เลือก AMPHUR_ID และ  AMPHUR_NAME ที่มี PROVINCE_ID เท่ากับ $province_id
  $sql = "SELECT amphur_id,amphur_name FROM amphur WHERE province_id = ".$province_id." ";
  
  //ประมวณผลคำสั่ง SQL
  $result = $conn->query($sql);

  //ตรวจสอบ จำนวนข้อมูลที่ได้ มีค่ามากกว่า  0 หรือไม่
  if ($result->num_rows > 0) {
   
   //วนลูปนำข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
   while($row = $result->fetch_assoc()) {
    
    //เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
    $json_result[] = [
     'id'=>$row['amphur_id'],
     'name'=>$row['amphur_name'],
    ];
   }
   
   //ใช้ Function json_encode แปลงข้อมูลในตัวแปร $json_result ให้เป็นรูปแบบ Json
   echo json_encode($json_result);
   
  } 
 }
