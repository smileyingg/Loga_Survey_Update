<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<?php include 'script_choices.php';  ?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <div class="card">

        <div class="card-header">
          <h4>โครงการสำรวจกิจการร้านเล็บ และอาชีพช่างทำเล็บ เพื่อจะเป็นประโยชน์ต่อการขยายฐานลูกค้า และเพิ่มยอดขายให้กิจการของท่าน</h4>
          <h5>คุณจะใช้เวลาภายใน 3-5 นาที ในการทำแบบสำรวจนี้</h5>
          <h5>โปรดเลือกคำตอบที่ตรงกับร้านของท่านมากที่สุดในขณะนี้ เพียงคำตอบเดียว</h5><br />
        </div>

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <form id="form_survey" method="POST">

          <!-- Q1. -->
          <div class="card-header">
            <h5>1. ท่านคือ <span class="required" style="color:red;">*</span></h5>
          </div>
          <!-- Choice Q1. -->
          <div class="card-body">
            <label class="container">
              <p>เจ้าของร้าน/หุ้นส่วน</p>
              <input type="checkbox" id="q1_c1" name="q1" value="เจ้าของร้าน/หุ้นส่วน" onclick="Q1_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ช่างทำเล็บ</p>
              <input type="checkbox" id="q1_c2" name="q1" value="ช่างทำเล็บ" onclick="Q1_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานต้อนรับ</p>
              <input type="checkbox" id="q1_c3" name="q1" value="พนักงานต้อนรับ" onclick="Q1_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พนักงานประจำร้าน</p>
              <input type="checkbox" id="q1_c4" name="q1" value="พนักงานประจำร้าน" onclick="Q1_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q1_c5" name="q1" value="อื่นๆ" onclick="Q1_C5()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q1_c5" name="txt_area_q1_c5" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>

          </div>
          <!-- End Q1. -->

          <!-- Q2. -->
          <div class="card-header">
            <h5>2. ที่ตั้งร้าน <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q2. -->
          <div class="card-body">
            <div class="container">
              <p>กรุณาเลือกจังหวัด</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก จังหวัด -->
                  <select class="form-control select2-single" id="province" name="q2_province">
                    <option id="province_list"> -- กรุณาเลือกจังหวัด --</option>
                  </select>
                </div>
              </div>

              <p>กรุณาเลือกอำเภอ</p>
              <div class="col-md-5">
                <div class="form-group">
                  <!-- แสดงตัวเลือก อำเภอ -->
                  <select class="form-control select2-single" id="amphur" name="q2_amphur">
                    <option id="amphur_list"> -- กรุณาเลือกอำเภอ --</option>
                  </select>
                </div>
              </div>

            </div>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-header">
            <h5>3. ทำเลร้าน <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q3. -->
          <div class="card-body">
            <label class="container">
              <p>ในห้างสรรพสินค้า/ช็อปปิ้งมอลล์</p>
              <input type="checkbox" id="q3_c1" name="q3" value="ในห้างสรรพสินค้า/ช็อปปิ้งมอลล์" onclick="Q3_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อาคารพาณิชย์</p>
              <input type="checkbox" id="q3_c2" name="q3" value="อาคารพาณิชย์" onclick="Q3_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ตลาดนัด</p>
              <input type="checkbox" id="q3_c3" name="q3" value="ตลาดนัด" onclick="Q3_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พื้นที่เช่าในแหล่งท่องเที่ยว</p>
              <input type="checkbox" id="q3_c4" name="q3" value="พื้นที่เช่าในแหล่งท่องเที่ยว" onclick="Q3_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q3_c5" name="q3" value="อื่นๆ" onclick="Q3_C5()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q3_c5" name="txt_area_q3_c5" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>
          </div>
          <!-- End Q3. -->

          <!-- Q4. -->
          <div class="card-header">
            <h5>4. จุดเด่นด้านสถานที่ของร้านของท่าน <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q4. -->
          <div class="card-body">
            <label class="container">
              <p>อยู่ติดถนนใหญ่ อยู่ใกล้หรือมีรถไฟฟ้าผ่าน หรือใกล้ป้ายรถเมล์</p>
              <input type="checkbox" id="q4_c1" name="q4" value="อยู่ติดถนนใหญ่ อยู่ใกล้หรือมีรถไฟฟ้าผ่าน หรือใกล้ป้ายรถเมล์" onclick="Q4_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีที่จอดรถ</p>
              <input type="checkbox" id="q4_c2" name="q4" value="มีที่จอดรถ" onclick="Q4_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีที่นั่งรอคิวทำเล็บ/เก้าอี้นั่งทำเล็บ นั่งสบาย นั่งได้นาน</p>
              <input type="checkbox" id="q4_c3" name="q4" value="มีที่นั่งรอคิวทำเล็บ/เก้าอี้นั่งทำเล็บ นั่งสบาย นั่งได้นาน" onclick="Q4_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>การตกแต่ง และบรรยากาศร้านสวยงาม สะอาด เป็นระเบียบเรียบร้อย</p>
              <input type="checkbox" id="q4_c4" name="q4" value="การตกแต่ง และบรรยากาศร้านสวยงาม สะอาด เป็นระเบียบเรียบร้อย" onclick="Q4_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q4_c5" name="q4" value="อื่นๆ" onclick="Q4_C5()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q4_c5" name="txt_area_q4_c5" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>
          </div>
          <!-- End Q4. -->

          <!-- Q5. -->
          <div class="card-header">
            <h5>5. ประเภทการบริการ(เลือกได้มากกว่า 1 ข้อ)<span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q5. -->
          <div class="card-body">
            <label class="container">
              <p>ตัดแต่งเล็บ ตัดหนัง</p>
              <input type="checkbox" id="q5_c1" name="q5[]" value="ตัดแต่งเล็บ ตัดหนัง">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ทาสีเล็บธรรมดา</p>
              <input type="checkbox" id="q5_c2" name="q5[]" value="ทาสีเล็บธรรมดา">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ทาสีเล็บเจล</p>
              <input type="checkbox" id="q5_c3" name="q5[]" value="ทาสีเล็บเจล">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เพ้นท์เล็บ</p>
              <input type="checkbox" id="q5_c4" name="q5[]" value="เพ้นท์เล็บ">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ต่อ/เติม/เคลือบเล็บเจล</p>
              <input type="checkbox" id="q5_c5" name="q5[]" value="ต่อ/เติม/เคลือบเล็บเจล">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ต่อ/เติม/เคลือบเล็บอะคริลิค</p>
              <input type="checkbox" id="q5_c6" name="q5[]" value="ต่อ/เติม/เคลือบเล็บอะคริลิค">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เคลือบเล็บเจล/เคลือบเล็บอะคริลิค</p>
              <input type="checkbox" id="q5_c7" name="q5[]" value="เคลือบเล็บเจล/เคลือบเล็บอะคริลิค">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ถอดเล็บเจล/อะคริลิค</p>
              <input type="checkbox" id="q5_c8" name="q5[]" value="ถอดเล็บเจล/อะคริลิค">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>สปามือ/เท้า</p>
              <input type="checkbox" id="q5_c9" name="q5[]" value="สปามือ/เท้า">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>พาราฟินทรีทเม้นท์ มือ/เท้า</p>
              <input type="checkbox" id="q5_c10" name="q5[]" value="พาราฟินทรีทเม้นท์ มือ/เท้า">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีบริการดังกล่าวครบทุกข้อ (ถ้าเลือกข้อนี้ ข้ออื่นจะเลือกไม่ได้)</p>
              <input type="checkbox" id="q5_c11" name="q5[]" value="มีบริการดังกล่าวครบทุกข้อ" onclick="Q5_C11()">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- End Q5. -->

          <!-- Q6. -->
          <div class="card-header">
            <h5>6. ท่านขาดแคลนด้านบุคลากรตำแหน่งใด <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q6. -->
          <div class="card-body">
            <label class="container">
              <p>พนักงานต้อนรับ</p>
              <input type="checkbox" id="q6_c1" name="q6" value="พนักงานต้อนรับ" onclick="Q6_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ช่างทำเล็บ</p>
              <input type="checkbox" id="q6_c2" name="q6" value="ช่างทำเล็บ" onclick="Q6_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ผู้จัดการร้าน</p>
              <input type="checkbox" id="q6_c3" name="q6" value="ผู้จัดการร้าน" onclick="Q6_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q6_c4" name="q6" value="อื่นๆ" onclick="Q6_C4()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q6_c4" name="txt_area_q6_c4" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>
            <label class="container">
              <p>มีพนักงานทุกตำแหน่งดังกล่าวครบถ้วน</p>
              <input type="checkbox" id="q6_c5" name="q6" value="มีพนักงานทุกตำแหน่งดังกล่าวครบถ้วน" onclick="Q6_C5()">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- End Q6. -->

          <!-- Q7. -->
          <div class="card-header">
            <h5>7. ด้านช่างทำเล็บ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q7. -->
          <div class="card-body">
            <label class="container">
              <p>มีจำนวนช่างทำเล็บฝีมือดีเพียงพอ</p>
              <input type="checkbox" id="q7_c1" name="q7" value="มีจำนวนช่างทำเล็บฝีมือดีเพียงพอ" onclick="Q7_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีผู้เชี่ยวชาญเฉพาะด้าน/ช่างฝีมือพิเศษในการทำเล็บ เช่น เพ้นท์สี ทำลวดลาย ติด Accessory</p>
              <input type="checkbox" id="q7_c2" name="q7" value="มีผู้เชี่ยวชาญเฉพาะด้าน/ช่างฝีมือพิเศษในการทำเล็บ เช่น เพ้นท์สี ทำลวดลาย ติด Accessory" onclick="Q7_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีช่างทำเล็บเพียงพื้นฐาน เช่น ทาสีเล็บ ล้าง/ถอดสีเล็บ</p>
              <input type="checkbox" id="q7_c3" name="q7" value="มีช่างทำเล็บเพียงพื้นฐาน เช่น ทาสีเล็บ ล้าง/ถอดสีเล็บ" onclick="Q7_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>มีจำนวนช่างทำเล็บเพียงพอทุกประเภทงาน แต่ยังต้องพัฒนาฝีมือ</p>
              <input type="checkbox" id="q7_c4" name="q7" value="มีจำนวนช่างทำเล็บเพียงพอทุกประเภทงาน แต่ยังต้องพัฒนาฝีมือ" onclick="Q7_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>กำลังประสบปัญหาช่างทำเล็บไม่เพียงพอ</p>
              <input type="checkbox" id="q7_c5" name="q7" value="กำลังประสบปัญหาช่างทำเล็บไม่เพียงพอ" onclick="Q7_C5()">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- End Q7. -->

          <!-- Q8. -->
          <div class="card-header">
            <h5>8. ด้านการส่งเสริมการตลาด <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q8. -->
          <div class="card-body">
            <label class="container">
              <p>ส่วนลดเมื่อทำครบคอร์สใหญ่ เช่น ซื้อคอร์ส หรือซื้อเครดิตจ่าย 1,000 บาท ใช้ได้ 1,500 บาท เป็นต้น</p>
              <input type="checkbox" id="q8_c1" name="q8" value="ส่วนลดเมื่อทำครบคอร์สใหญ่ เช่น ซื้อคอร์ส หรือซื้อเครดิตจ่าย 1,000 บาท เป็นต้น" onclick="Q8_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>สะสมแต้มแลกของแถม หรือสะสมแต้มแลกส่วนลด</p>
              <input type="checkbox" id="q8_c2" name="q8" value="สะสมแต้มแลกของแถม หรือสะสมแต้มแลกส่วนลด" onclick="Q8_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>สมัครสมาชิกเพื่อใช้อุปกรณ์ส่วนตัวโดยเฉพาะ</p>
              <input type="checkbox" id="q8_c3" name="q8" value="สมัครสมาชิกเพื่อใช้อุปกรณ์ส่วนตัวโดยเฉพาะ" onclick="Q8_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>การเชียร์สินค้า/บริการโดยพนักงาน</p>
              <input type="checkbox" id="q8_c4" name="q8" value="การเชียร์สินค้า/บริการโดยพนักงาน" onclick="Q8_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q8_c5" name="q8" value="อื่นๆ" onclick="Q8_C5()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q8_c5" name="txt_area_q8_c5" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>
          </div>
          <!-- End Q8. -->

          <!-- Q9. -->
          <div class="card-header">
            <h5>9. ความถี่ของลูกค้ารายเดิมที่มาใช้บริการ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q9. -->
          <div class="card-body">
            <label class="container">
              <p>1 ครั้งต่อเดือน</p>
              <input type="checkbox" id="q9_c1" name="q9" value="1 ครั้งต่อเดือน" onclick="Q9_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>2 ครั้งต่อเดือน</p>
              <input type="checkbox" id="q9_c2" name="q9" value="2 ครั้งต่อเดือน" onclick="Q9_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>4 ครั้งต่อเดือน</p>
              <input type="checkbox" id="q9_c3" name="q9" value="4 ครั้งต่อเดือน" onclick="Q9_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ส่วนใหญ่เป็นลูกค้าขาจร ไม่กลับมาใช้บริการซ้ำ</p>
              <input type="checkbox" id="q9_c4" name="q9" value="ส่วนใหญ่เป็นลูกค้าขาจร ไม่กลับมาใช้บริการซ้ำ" onclick="Q9_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>อื่นๆ โปรดระบุ</p>
              <input type="checkbox" id="q9_c5" name="q9" value="อื่นๆ" onclick="Q9_C5()">
              <span class="checkmark"></span>
              <textarea id="txt_area_q9_c5" name="txt_area_q9_c5" class="form-control" style="width:50%; height:20%; display:none"></textarea>
            </label>
          </div>
          <!-- End Q9. -->

          <!-- Q10. -->
          <div class="card-header">
            <h5>10. เหตุผลที่ลูกค้ากลับมาใช้บริการที่ร้านของท่านซ้ำ <span class="required" style="color:red;">*</span></h5>
          </div>

          <!-- Choice Q10. -->
          <div class="card-body">
            <label class="container">
              <p>ร้านมีชื่อเสียง และ/หรือตกแต่งสวยงาม</p>
              <input type="checkbox" id="q10_c1" name="q10" value="ร้านมีชื่อเสียง และ/หรือตกแต่งสวยงาม" onclick="Q10_C1()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ใช้ผลิตภัณฑ์ และอุปกรณ์คุณภาพดี</p>
              <input type="checkbox" id="q10_c2" name="q10" value="ใช้ผลิตภัณฑ์ และอุปกรณ์คุณภาพดี" onclick="Q10_C2()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ราคา</p>
              <input type="checkbox" id="q10_c3" name="q10" value="ราคา" onclick="Q10_C3()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>ช่างทำเล็บฝีมือดี ลูกค้าพอใจคุณภาพการบริการ</p>
              <input type="checkbox" id="q10_c4" name="q10" value="ช่างทำเล็บฝีมือดี ลูกค้าพอใจคุณภาพการบริการ" onclick="Q10_C4()">
              <span class="checkmark"></span>
            </label>
            <label class="container">
              <p>เดินทางสะดวก มีที่จอดรถ</p>
              <input type="checkbox" id="q10_c5" name="q10" value="เดินทางสะดวก มีที่จอดรถ" onclick="Q10_C5()">
              <span class="checkmark"></span>
            </label>
          </div>
          <!-- End Q10. -->

          <!-- Q11. -->
          <div class="card-header">
            <h5>หากท่านต้องการรับข่าวสารที่เป็นประโยชน์ต่อกิจการของท่าน หรือลุ้นเข้าร่วมสัมมนาฟรีโดยไม่มีค่าใช้จ่าย โปรดกรอกอีเมลแอดเดรส</h5>
          </div>

          <!-- Choice Q11. -->
          <div class="card-body">
            <label class="container">
              <textarea class="form-control" name="q11_c1" style="width:60%; height:20%;" placeholder="example@example.com"></textarea>
            </label>
          </div>
          <!-- End Q11. -->

          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
              <button class="btn btn-outline-dark" type="reset" id="reloadPage" onclick="return confirm('ยืนยันการรีเช็ทข้อมูล?');">ยกเลิก</button>

            </div>
          </div>
          <!-- End button submit -->



        </form>
        <!-- End From -->


      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->


  <?php include 'footer.php'; ?>
  
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();


      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#SURVEY input[type=checkbox]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });

          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });

          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });


    });
  </script>


</body>

</html>