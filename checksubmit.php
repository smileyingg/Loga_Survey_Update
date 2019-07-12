<?php

if (isset($_POST['q1']) && isset($_POST['q2_province']) && isset($_POST['q2_amphur']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) &&  isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) &&  isset($_POST['q10'])) {
  include 'config.php';



  $maker_user_number = "SELECT user_number FROM answer ORDER BY id DESC LIMIT 1";
  $result_user_number = mysqli_query($conn, $maker_user_number);
  $row = mysqli_fetch_assoc($result_user_number);
  $value = ($row["user_number"]);
  $user_number = (int) $value + 1;


  $multiple_Q5 = "";
  for ($i = 0; $i < count($_POST['q5']); $i++) {
    $multiple_Q5 .= $_POST["q5"][$i];
  }

  $maker_province = $_POST['q2_province'];
  $province = "SELECT province_name  FROM province where province_id=$maker_province";
  $result_province = mysqli_query($conn, $province);
  $province_Q2 = $result_province->fetch_array(MYSQLI_NUM);

  $maker_amphur = $_POST['q2_amphur'];
  $amphur = "SELECT amphur_name	 FROM amphur where amphur_id=$maker_amphur";
  $result_amphur = mysqli_query($conn, $amphur);
  $amphur_Q2 = $result_amphur->fetch_array(MYSQLI_NUM);

  $Answer2 = $province_Q2[0] . $amphur_Q2[0];


  $q1 = $_POST['q1'];
  $q2 = $Answer2;
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $multiple_Q5;
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
  $q10 = $_POST['q10'];
  $another_Q1 = $_POST['txt_area_q1_c5'];
  $another_Q3 = $_POST['txt_area_q3_c5'];
  $another_Q4 = $_POST['txt_area_q4_c5'];
  $another_Q6 = $_POST['txt_area_q6_c4'];
  $another_Q8 = $_POST['txt_area_q8_c5'];
  $another_Q9 = $_POST['txt_area_q9_c5'];


  $sql = "INSERT INTO answer (q_id,answer,email,detail,user_number)
  VALUES (1,'$q1','" . $_POST["q11_c1"] . "','$another_Q1','$user_number');";
  $sql .= "INSERT INTO answer (q_id,answer,email,user_number) 
  VALUES(2,'$q2','" . $_POST["q11_c1"] . "','$user_number');";
  $sql .= "INSERT INTO answer (q_id,answer,email,detail,user_number)
  VALUES (3,'$q3','" . $_POST["q11_c1"] . "','$another_Q3','$user_number');";
  $sql .= "INSERT INTO answer(q_id,answer,email,detail,user_number)
  VALUES (4,'$q4','" . $_POST["q11_c1"] . "','$another_Q4','$user_number');";
  $sql .=  "INSERT INTO answer(q_id,answer,email,user_number)
  VALUES (5,'$q5 ','" . $_POST["q11_c1"] . "','$user_number');";
  $sql .= "INSERT INTO answer(q_id,answer,email,detail,user_number)
  VALUES (6,'$q6','" . $_POST["q11_c1"] . "','$another_Q6','$user_number');";
  $sql .= "INSERT INTO answer(q_id,answer,email,user_number)
  VALUES (7,'$q7','" . $_POST["q11_c1"] . "','$user_number');";
  $sql .= "INSERT INTO answer(q_id,answer,email,detail,user_number)
  VALUES (8,'$q8','" . $_POST["q11_c1"] . "','$another_Q8','$user_number');";
  $sql .=  "INSERT INTO answer(q_id,answer,email,detail,user_number)
  VALUES (9,'$q9','" . $_POST["q11_c1"] . "','$another_Q9','$user_number');";
  $sql .=  "INSERT INTO answer(q_id,answer,email,user_number)
  VALUES (10,'$q10','" . $_POST["q11_c1"] . "','$user_number');";


  if (mysqli_multi_query($conn, $sql) === TRUE) {
    echo ('1');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
} else {
  echo ('0');
}
