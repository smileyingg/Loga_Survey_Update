<!-- Q1. -->
<script>
  
  function Q1_C1() {
    if (document.getElementById("q1_c1").checked) {
      document.getElementById("q1_c2").disabled = true;
      document.getElementById("q1_c3").disabled = true;
      document.getElementById("q1_c4").disabled = true;
      document.getElementById("q1_c5").disabled = true;
    
    } else {
      document.getElementById("q1_c2").disabled = false;
      document.getElementById("q1_c3").disabled = false;
      document.getElementById("q1_c4").disabled = false;
      document.getElementById("q1_c5").disabled = false;
     
    }
  }

  function Q1_C2() {
    if (document.getElementById("q1_c2").checked) {
      document.getElementById("q1_c1").disabled = true;
      document.getElementById("q1_c3").disabled = true;
      document.getElementById("q1_c4").disabled = true;
      document.getElementById("q1_c5").disabled = true;
    } else {
      document.getElementById("q1_c1").disabled = false;
      document.getElementById("q1_c3").disabled = false;
      document.getElementById("q1_c4").disabled = false;
      document.getElementById("q1_c5").disabled = false;
    }
  }

  function Q1_C3() {
    if (document.getElementById("q1_c3").checked) {
      document.getElementById("q1_c1").disabled = true;
      document.getElementById("q1_c2").disabled = true;
      document.getElementById("q1_c4").disabled = true;
      document.getElementById("q1_c5").disabled = true;
    } else {
      document.getElementById("q1_c1").disabled = false;
      document.getElementById("q1_c2").disabled = false;
      document.getElementById("q1_c4").disabled = false;
      document.getElementById("q1_c5").disabled = false;
    }
  }

  function Q1_C4() {
    if (document.getElementById("q1_c4").checked) {
      document.getElementById("q1_c1").disabled = true;
      document.getElementById("q1_c2").disabled = true;
      document.getElementById("q1_c3").disabled = true;
      document.getElementById("q1_c5").disabled = true;
    } else {
      document.getElementById("q1_c1").disabled = false;
      document.getElementById("q1_c2").disabled = false;
      document.getElementById("q1_c3").disabled = false;
      document.getElementById("q1_c5").disabled = false;
    }
  }
</script>

<!-- Show text area  -->
<script type="text/javascript">
  function Q1_C5() {
    var ck = document.getElementById('q1_c5');
    if (ck.checked == true) {
      document.getElementById('txt_area_q1_c5').style.display = "";
      document.getElementById("q1_c1").disabled = true;
      document.getElementById("q1_c2").disabled = true;
      document.getElementById("q1_c3").disabled = true;
      document.getElementById("q1_c4").disabled = true;
    } else {
      document.getElementById('txt_area_q1_c5').style.display = "none";
      document.getElementById("q1_c1").disabled = false;
      document.getElementById("q1_c2").disabled = false;
      document.getElementById("q1_c3").disabled = false;
      document.getElementById("q1_c4").disabled = false;
    }
  }
</script>
<!-- End show text area  -->
<!-- Ene Q1. -->


<!-- Q2. -->
<!-- นำเข้า Javascript jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script>
  $(function() {

    //เรียกใช้งาน Select2
    // $(".select2-single").select2();

    //ดึงข้อมูล province จากไฟล์ get_data.php
    $.ajax({
      url: "get_data.php",
      dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
      data: {
        show_province: 'show_province'
      }, //ส่งค่าตัวแปร show_province เพื่อดึงข้อมูล จังหวัด
      success: function(data) {

        //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data
        $.each(data, function(index, value) {
          //แทรก Elements ใน id province  ด้วยคำสั่ง append
          $("#province").append("<option value='" + value.id + "'> " + value.name + "</option>");
          $("#amphur").text("");
        });
      }
    });

    //แสดงข้อมูล อำเภอ  โดยใช้คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่ #province
    $("#province").change(function() {

      //กำหนดให้ ตัวแปร province มีค่าเท่ากับ ค่าของ #province ที่กำลังถูกเลือกในขณะนั้น
      var province_id = $(this).val();

      $.ajax({
        url: "get_data.php",
        dataType: "json", //กำหนดให้มีรูปแบบเป็น Json
        data: {
          province_id: province_id
        }, //ส่งค่าตัวแปร province_id เพื่อดึงข้อมูล อำเภอ ที่มี province_id เท่ากับค่าที่ส่งไป
        success: function(data) {

          //กำหนดให้ข้อมูลใน #amphur เป็นค่าว่าง
          $("#amphur").text("");

          //วนลูปแสดงข้อมูล ที่ได้จาก ตัวแปร data  
          $.each(data, function(index, value) {

            //แทรก Elements ข้อมูลที่ได้  ใน id amphur  ด้วยคำสั่ง append
            $("#amphur").append("<option value='" + value.id + "'> " + value.name + "</option>");
          });
        }
      });

    });

    //คำสั่ง change จะทำงานกรณีมีการเปลี่ยนแปลงที่  #district 
    $("#district").change(function() {

      //นำข้อมูลรายการ จังหวัด ที่เลือก มาใส่ไว้ในตัวแปร province
      var province = $("#province option:selected").text();

      //นำข้อมูลรายการ อำเภอ ที่เลือก มาใส่ไว้ในตัวแปร amphur
      var amphur = $("#amphur option:selected").text();

    });
  });
</script>
<!-- End Q2. -->

<!-- Q3. -->
<script>
  function Q3_C1() {
    if (document.getElementById("q3_c1").checked) {
      document.getElementById("q3_c2").disabled = true;
      document.getElementById("q3_c3").disabled = true;
      document.getElementById("q3_c4").disabled = true;
      document.getElementById("q3_c5").disabled = true;
    } else {
      document.getElementById("q3_c2").disabled = false;
      document.getElementById("q3_c3").disabled = false;
      document.getElementById("q3_c4").disabled = false;
      document.getElementById("q3_c5").disabled = false;
    }
  }

  function Q3_C2() {
    if (document.getElementById("q3_c2").checked) {
      document.getElementById("q3_c1").disabled = true;
      document.getElementById("q3_c3").disabled = true;
      document.getElementById("q3_c4").disabled = true;
      document.getElementById("q3_c5").disabled = true;
    } else {
      document.getElementById("q3_c1").disabled = false;
      document.getElementById("q3_c3").disabled = false;
      document.getElementById("q3_c4").disabled = false;
      document.getElementById("q3_c5").disabled = false;
    }
  }

  function Q3_C3() {
    if (document.getElementById("q3_c3").checked) {
      document.getElementById("q3_c1").disabled = true;
      document.getElementById("q3_c2").disabled = true;
      document.getElementById("q3_c4").disabled = true;
      document.getElementById("q3_c5").disabled = true;
    } else {
      document.getElementById("q3_c1").disabled = false;
      document.getElementById("q3_c2").disabled = false;
      document.getElementById("q3_c4").disabled = false;
      document.getElementById("q3_c5").disabled = false;
    }
  }

  function Q3_C4() {
    if (document.getElementById("q3_c4").checked) {
      document.getElementById("q3_c1").disabled = true;
      document.getElementById("q3_c2").disabled = true;
      document.getElementById("q3_c3").disabled = true;
      document.getElementById("q3_c5").disabled = true;
    } else {
      document.getElementById("q3_c1").disabled = false;
      document.getElementById("q3_c2").disabled = false;
      document.getElementById("q3_c3").disabled = false;
      document.getElementById("q3_c5").disabled = false;
    }
  }
</script>

<!-- Show text area  -->
<script type="text/javascript">
  function Q3_C5() {
    var ck = document.getElementById('q3_c5');
    if (ck.checked == true) {
      document.getElementById('txt_area_q3_c5').style.display = "";
      document.getElementById("q3_c1").disabled = true;
      document.getElementById("q3_c2").disabled = true;
      document.getElementById("q3_c3").disabled = true;
      document.getElementById("q3_c4").disabled = true;
    } else {
      document.getElementById('txt_area_q3_c5').style.display = "none";
      document.getElementById("q3_c1").disabled = false;
      document.getElementById("q3_c2").disabled = false;
      document.getElementById("q3_c3").disabled = false;
      document.getElementById("q3_c4").disabled = false;
    }
  }
</script>
<!-- End show text area  -->
<!-- Ene Q3. -->

<!-- Q4. -->
<script>
  function Q4_C1() {
    if (document.getElementById("q4_c1").checked) {
      document.getElementById("q4_c2").disabled = true;
      document.getElementById("q4_c3").disabled = true;
      document.getElementById("q4_c4").disabled = true;
      document.getElementById("q4_c5").disabled = true;
    } else {
      document.getElementById("q4_c2").disabled = false;
      document.getElementById("q4_c3").disabled = false;
      document.getElementById("q4_c4").disabled = false;
      document.getElementById("q4_c5").disabled = false;
    }
  }

  function Q4_C2() {
    if (document.getElementById("q4_c2").checked) {
      document.getElementById("q4_c1").disabled = true;
      document.getElementById("q4_c3").disabled = true;
      document.getElementById("q4_c4").disabled = true;
      document.getElementById("q4_c5").disabled = true;
    } else {
      document.getElementById("q4_c1").disabled = false;
      document.getElementById("q4_c3").disabled = false;
      document.getElementById("q4_c4").disabled = false;
      document.getElementById("q4_c5").disabled = false;
    }
  }

  function Q4_C3() {
    if (document.getElementById("q4_c3").checked) {
      document.getElementById("q4_c1").disabled = true;
      document.getElementById("q4_c2").disabled = true;
      document.getElementById("q4_c4").disabled = true;
      document.getElementById("q4_c5").disabled = true;
    } else {
      document.getElementById("q4_c1").disabled = false;
      document.getElementById("q4_c2").disabled = false;
      document.getElementById("q4_c4").disabled = false;
      document.getElementById("q4_c5").disabled = false;
    }
  }

  function Q4_C4() {
    if (document.getElementById("q4_c4").checked) {
      document.getElementById("q4_c1").disabled = true;
      document.getElementById("q4_c2").disabled = true;
      document.getElementById("q4_c3").disabled = true;
      document.getElementById("q4_c5").disabled = true;
    } else {
      document.getElementById("q4_c1").disabled = false;
      document.getElementById("q4_c2").disabled = false;
      document.getElementById("q4_c3").disabled = false;
      document.getElementById("q4_c5").disabled = false;
    }
  }
</script>

<!-- Show text area  -->
<script type="text/javascript">
  function Q4_C5() {
    var ck = document.getElementById('q4_c5');
    if (ck.checked == true) {
      document.getElementById('txt_area_q4_c5').style.display = "";
      document.getElementById("q4_c1").disabled = true;
      document.getElementById("q4_c2").disabled = true;
      document.getElementById("q4_c3").disabled = true;
      document.getElementById("q4_c4").disabled = true;
    } else {
      document.getElementById('txt_area_q4_c5').style.display = "none";
      document.getElementById("q4_c1").disabled = false;
      document.getElementById("q4_c2").disabled = false;
      document.getElementById("q4_c3").disabled = false;
      document.getElementById("q4_c4").disabled = false;
    }
  }
</script>
<!-- End show text area  -->
<!-- Ene Q4. -->

<!-- Q5. -->
<script type="text/javascript">
  function Q5_C11() {
    if (document.getElementById("q5_c11").checked) {
      // เอา checked ออก
      document.getElementById("q5_c1").checked = false;
      document.getElementById("q5_c2").checked = false;
      document.getElementById("q5_c3").checked = false;
      document.getElementById("q5_c4").checked = false;
      document.getElementById("q5_c5").checked = false;
      document.getElementById("q5_c6").checked = false;
      document.getElementById("q5_c7").checked = false;
      document.getElementById("q5_c8").checked = false;
      document.getElementById("q5_c9").checked = false;
      document.getElementById("q5_c10").checked = false;
      // ไม่ให้ check เพิ่ม
      document.getElementById("q5_c1").disabled = true;
      document.getElementById("q5_c2").disabled = true;
      document.getElementById("q5_c3").disabled = true;
      document.getElementById("q5_c4").disabled = true;
      document.getElementById("q5_c5").disabled = true;
      document.getElementById("q5_c6").disabled = true;
      document.getElementById("q5_c7").disabled = true;
      document.getElementById("q5_c8").disabled = true;
      document.getElementById("q5_c9").disabled = true;
      document.getElementById("q5_c10").disabled = true;
    } else {
      document.getElementById("q5_c1").disabled = false;
      document.getElementById("q5_c2").disabled = false;
      document.getElementById("q5_c3").disabled = false;
      document.getElementById("q5_c4").disabled = false;
      document.getElementById("q5_c5").disabled = false;
      document.getElementById("q5_c6").disabled = false;
      document.getElementById("q5_c7").disabled = false;
      document.getElementById("q5_c8").disabled = false;
      document.getElementById("q5_c9").disabled = false;
      document.getElementById("q5_c10").disabled = false;
    }
  }
</script>
<!-- End Q5. -->

<!-- Q6. -->
<script>
  function Q6_C1() {
    if (document.getElementById("q6_c1").checked) {
      document.getElementById("q6_c2").disabled = true;
      document.getElementById("q6_c3").disabled = true;
      document.getElementById("q6_c4").disabled = true;
      document.getElementById("q6_c5").disabled = true;
    } else {
      document.getElementById("q6_c2").disabled = false;
      document.getElementById("q6_c3").disabled = false;
      document.getElementById("q6_c4").disabled = false;
      document.getElementById("q6_c5").disabled = false;
    }
  }

  function Q6_C2() {
    if (document.getElementById("q6_c2").checked) {
      document.getElementById("q6_c1").disabled = true;
      document.getElementById("q6_c3").disabled = true;
      document.getElementById("q6_c4").disabled = true;
      document.getElementById("q6_c5").disabled = true;
    } else {
      document.getElementById("q6_c1").disabled = false;
      document.getElementById("q6_c3").disabled = false;
      document.getElementById("q6_c4").disabled = false;
      document.getElementById("q6_c5").disabled = false;
    }
  }

  function Q6_C3() {
    if (document.getElementById("q6_c3").checked) {
      document.getElementById("q6_c1").disabled = true;
      document.getElementById("q6_c2").disabled = true;
      document.getElementById("q6_c4").disabled = true;
      document.getElementById("q6_c5").disabled = true;
    } else {
      document.getElementById("q6_c1").disabled = false;
      document.getElementById("q6_c2").disabled = false;
      document.getElementById("q6_c4").disabled = false;
      document.getElementById("q6_c5").disabled = false;
    }
  }
</script>

<!-- Show text area   -->
<script type="text/javascript">
  function Q6_C4() {
    var ck = document.getElementById('q6_c4');
    if (ck.checked == true) {
      document.getElementById('txt_area_q6_c4').style.display = "";
      document.getElementById("q6_c1").disabled = true;
      document.getElementById("q6_c2").disabled = true;
      document.getElementById("q6_c3").disabled = true;
      document.getElementById("q6_c5").disabled = true;
    } else {
      document.getElementById('txt_area_q6_c4').style.display = "none";
      document.getElementById("q6_c1").disabled = false;
      document.getElementById("q6_c2").disabled = false;
      document.getElementById("q6_c3").disabled = false;
      document.getElementById("q6_c5").disabled = false;
    }
  }
</script>
<!-- //  End show text area   -->

<script>
  function Q6_C5() {
    if (document.getElementById("q6_c5").checked) {
      document.getElementById("q6_c1").disabled = true;
      document.getElementById("q6_c2").disabled = true;
      document.getElementById("q6_c3").disabled = true;
      document.getElementById("q6_c4").disabled = true;
    } else {
      document.getElementById("q6_c1").disabled = false;
      document.getElementById("q6_c2").disabled = false;
      document.getElementById("q6_c3").disabled = false;
      document.getElementById("q6_c4").disabled = false;
    }
  }
</script>
<!-- Ene Q6. -->

<!-- Q7. -->
<script>
  function Q7_C1() {
    if (document.getElementById("q7_c1").checked) {
      document.getElementById("q7_c2").disabled = true;
      document.getElementById("q7_c3").disabled = true;
      document.getElementById("q7_c4").disabled = true;
      document.getElementById("q7_c5").disabled = true;
    } else {
      document.getElementById("q7_c2").disabled = false;
      document.getElementById("q7_c3").disabled = false;
      document.getElementById("q7_c4").disabled = false;
      document.getElementById("q7_c5").disabled = false;
    }
  }

  function Q7_C2() {
    if (document.getElementById("q7_c2").checked) {
      document.getElementById("q7_c1").disabled = true;
      document.getElementById("q7_c3").disabled = true;
      document.getElementById("q7_c4").disabled = true;
      document.getElementById("q7_c5").disabled = true;
    } else {
      document.getElementById("q7_c1").disabled = false;
      document.getElementById("q7_c3").disabled = false;
      document.getElementById("q7_c4").disabled = false;
      document.getElementById("q7_c5").disabled = false;
    }
  }

  function Q7_C3() {
    if (document.getElementById("q7_c3").checked) {
      document.getElementById("q7_c1").disabled = true;
      document.getElementById("q7_c2").disabled = true;
      document.getElementById("q7_c4").disabled = true;
      document.getElementById("q7_c5").disabled = true;
    } else {
      document.getElementById("q7_c1").disabled = false;
      document.getElementById("q7_c2").disabled = false;
      document.getElementById("q7_c4").disabled = false;
      document.getElementById("q7_c5").disabled = false;
    }
  }

  function Q7_C4() {
    if (document.getElementById("q7_c4").checked) {
      document.getElementById("q7_c1").disabled = true;
      document.getElementById("q7_c2").disabled = true;
      document.getElementById("q7_c3").disabled = true;
      document.getElementById("q7_c5").disabled = true;
    } else {
      document.getElementById("q7_c1").disabled = false;
      document.getElementById("q7_c2").disabled = false;
      document.getElementById("q7_c3").disabled = false;
      document.getElementById("q7_c5").disabled = false;
    }
  }

  function Q7_C5() {
    if (document.getElementById("q7_c5").checked) {
      document.getElementById("q7_c1").disabled = true;
      document.getElementById("q7_c2").disabled = true;
      document.getElementById("q7_c3").disabled = true;
      document.getElementById("q7_c4").disabled = true;
    } else {
      document.getElementById("q7_c1").disabled = false;
      document.getElementById("q7_c2").disabled = false;
      document.getElementById("q7_c3").disabled = false;
      document.getElementById("q7_c4").disabled = false;
    }
  }
</script>
<!-- Ene Q7. -->

<!-- Q8. -->
<script>
  function Q8_C1() {
    if (document.getElementById("q8_c1").checked) {
      document.getElementById("q8_c2").disabled = true;
      document.getElementById("q8_c3").disabled = true;
      document.getElementById("q8_c4").disabled = true;
      document.getElementById("q8_c5").disabled = true;
    } else {
      document.getElementById("q8_c2").disabled = false;
      document.getElementById("q8_c3").disabled = false;
      document.getElementById("q8_c4").disabled = false;
      document.getElementById("q8_c5").disabled = false;
    }
  }

  function Q8_C2() {
    if (document.getElementById("q8_c2").checked) {
      document.getElementById("q8_c1").disabled = true;
      document.getElementById("q8_c3").disabled = true;
      document.getElementById("q8_c4").disabled = true;
      document.getElementById("q8_c5").disabled = true;
    } else {
      document.getElementById("q8_c1").disabled = false;
      document.getElementById("q8_c3").disabled = false;
      document.getElementById("q8_c4").disabled = false;
      document.getElementById("q8_c5").disabled = false;
    }
  }

  function Q8_C3() {
    if (document.getElementById("q8_c3").checked) {
      document.getElementById("q8_c1").disabled = true;
      document.getElementById("q8_c2").disabled = true;
      document.getElementById("q8_c4").disabled = true;
      document.getElementById("q8_c5").disabled = true;
    } else {
      document.getElementById("q8_c1").disabled = false;
      document.getElementById("q8_c2").disabled = false;
      document.getElementById("q8_c4").disabled = false;
      document.getElementById("q8_c5").disabled = false;
    }
  }

  function Q8_C4() {
    if (document.getElementById("q8_c4").checked) {
      document.getElementById("q8_c1").disabled = true;
      document.getElementById("q8_c2").disabled = true;
      document.getElementById("q8_c3").disabled = true;
      document.getElementById("q8_c5").disabled = true;
    } else {
      document.getElementById("q8_c1").disabled = false;
      document.getElementById("q8_c2").disabled = false;
      document.getElementById("q8_c3").disabled = false;
      document.getElementById("q8_c5").disabled = false;
    }
  }
</script>

<!-- Show text area  -->
<script type="text/javascript">
  function Q8_C5() {
    var ck = document.getElementById('q8_c5');
    if (ck.checked == true) {
      document.getElementById('txt_area_q8_c5').style.display = "";
      document.getElementById("q8_c1").disabled = true;
      document.getElementById("q8_c2").disabled = true;
      document.getElementById("q8_c3").disabled = true;
      document.getElementById("q8_c4").disabled = true;
    } else {
      document.getElementById('txt_area_q8_c5').style.display = "none";
      document.getElementById("q8_c1").disabled = false;
      document.getElementById("q8_c2").disabled = false;
      document.getElementById("q8_c3").disabled = false;
      document.getElementById("q8_c4").disabled = false;
    }
  }
</script>
<!-- End show text area  -->
<!-- Ene Q8. -->

<!-- Q9. -->
<script>
  function Q9_C1() {
    if (document.getElementById("q9_c1").checked) {
      document.getElementById("q9_c2").disabled = true;
      document.getElementById("q9_c3").disabled = true;
      document.getElementById("q9_c4").disabled = true;
      document.getElementById("q9_c5").disabled = true;
    } else {
      document.getElementById("q9_c2").disabled = false;
      document.getElementById("q9_c3").disabled = false;
      document.getElementById("q9_c4").disabled = false;
      document.getElementById("q9_c5").disabled = false;
    }
  }

  function Q9_C2() {
    if (document.getElementById("q9_c2").checked) {
      document.getElementById("q9_c1").disabled = true;
      document.getElementById("q9_c3").disabled = true;
      document.getElementById("q9_c4").disabled = true;
      document.getElementById("q9_c5").disabled = true;
    } else {
      document.getElementById("q9_c1").disabled = false;
      document.getElementById("q9_c3").disabled = false;
      document.getElementById("q9_c4").disabled = false;
      document.getElementById("q9_c5").disabled = false;
    }
  }

  function Q9_C3() {
    if (document.getElementById("q9_c3").checked) {
      document.getElementById("q9_c1").disabled = true;
      document.getElementById("q9_c2").disabled = true;
      document.getElementById("q9_c4").disabled = true;
      document.getElementById("q9_c5").disabled = true;
    } else {
      document.getElementById("q9_c1").disabled = false;
      document.getElementById("q9_c2").disabled = false;
      document.getElementById("q9_c4").disabled = false;
      document.getElementById("q9_c5").disabled = false;
    }
  }

  function Q9_C4() {
    if (document.getElementById("q9_c4").checked) {
      document.getElementById("q9_c1").disabled = true;
      document.getElementById("q9_c2").disabled = true;
      document.getElementById("q9_c3").disabled = true;
      document.getElementById("q9_c5").disabled = true;
    } else {
      document.getElementById("q9_c1").disabled = false;
      document.getElementById("q9_c2").disabled = false;
      document.getElementById("q9_c3").disabled = false;
      document.getElementById("q9_c5").disabled = false;
    }
  }
</script>

<!-- Show text area  -->
<script type="text/javascript">
  function Q9_C5() {
    var ck = document.getElementById('q9_c5');
    if (ck.checked == true) {
      document.getElementById('txt_area_q9_c5').style.display = "";
      document.getElementById("q9_c1").disabled = true;
      document.getElementById("q9_c2").disabled = true;
      document.getElementById("q9_c3").disabled = true;
      document.getElementById("q9_c4").disabled = true;
    } else {
      document.getElementById('txt_area_q9_c5').style.display = "none";
      document.getElementById("q9_c1").disabled = false;
      document.getElementById("q9_c2").disabled = false;
      document.getElementById("q9_c3").disabled = false;
      document.getElementById("q9_c4").disabled = false;
    }
  }
</script>
<!-- End show text area  -->
<!-- Ene Q9. -->

<!-- Q10. -->
<script>
  function Q10_C1() {
    if (document.getElementById("q10_c1").checked) {
      document.getElementById("q10_c2").disabled = true;
      document.getElementById("q10_c3").disabled = true;
      document.getElementById("q10_c4").disabled = true;
      document.getElementById("q10_c5").disabled = true;
    } else {
      document.getElementById("q10_c2").disabled = false;
      document.getElementById("q10_c3").disabled = false;
      document.getElementById("q10_c4").disabled = false;
      document.getElementById("q10_c5").disabled = false;
    }
  }

  function Q10_C2() {
    if (document.getElementById("q10_c2").checked) {
      document.getElementById("q10_c1").disabled = true;
      document.getElementById("q10_c3").disabled = true;
      document.getElementById("q10_c4").disabled = true;
      document.getElementById("q10_c5").disabled = true;
    } else {
      document.getElementById("q10_c1").disabled = false;
      document.getElementById("q10_c3").disabled = false;
      document.getElementById("q10_c4").disabled = false;
      document.getElementById("q10_c5").disabled = false;
    }
  }

  function Q10_C3() {
    if (document.getElementById("q10_c3").checked) {
      document.getElementById("q10_c1").disabled = true;
      document.getElementById("q10_c2").disabled = true;
      document.getElementById("q10_c4").disabled = true;
      document.getElementById("q10_c5").disabled = true;
    } else {
      document.getElementById("q10_c1").disabled = false;
      document.getElementById("q10_c2").disabled = false;
      document.getElementById("q10_c4").disabled = false;
      document.getElementById("q10_c5").disabled = false;
    }
  }

  function Q10_C4() {
    if (document.getElementById("q10_c4").checked) {
      document.getElementById("q10_c1").disabled = true;
      document.getElementById("q10_c2").disabled = true;
      document.getElementById("q10_c3").disabled = true;
      document.getElementById("q10_c5").disabled = true;
    } else {
      document.getElementById("q10_c1").disabled = false;
      document.getElementById("q10_c2").disabled = false;
      document.getElementById("q10_c3").disabled = false;
      document.getElementById("q10_c5").disabled = false;
    }
  }

  function Q10_C5() {
    if (document.getElementById("q10_c5").checked) {
      document.getElementById("q10_c1").disabled = true;
      document.getElementById("q10_c2").disabled = true;
      document.getElementById("q10_c3").disabled = true;
      document.getElementById("q10_c4").disabled = true;
    } else {
      document.getElementById("q10_c1").disabled = false;
      document.getElementById("q10_c2").disabled = false;
      document.getElementById("q10_c3").disabled = false;
      document.getElementById("q10_c4").disabled = false;
    }
  }
</script>
<!-- Ene Q10. -->


