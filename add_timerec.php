<?php include './header.php'; ?>
<?php include './navbar.php'; ?>
<?php include './dbconfig.php'; ?>
<?php
$sql = "SELECT * FROM user_login WHERE trc != 1 ORDER BY fullname ASC";
$obj = mysqli_query($dbconfig, $sql);
?>

<div class="page-content">
    <div class="row">
        <?php include './sidebar.php'; ?>
        <div class="col-md-10">
            <div class="content-box-large">
                <h2 style="text-align: center;">เปิดรายงานลงเวลาทำงาน</h2>
                <div class="row" style="padding-top: 30px;">
                    <div class="col-md-4 col-xs-4"></div>
                    <div class="col-md-4 col-xs-4">
                        <form action="add_timerec_process.php" onsubmit="return confirm('Do you really want to submit the form?');" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label>ชื่อพนักงาน</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i></span>
                                          <select class="form-control" name="txtName" id="select-1" required="">
                                              <?php
                                              while ($result = mysqli_fetch_array($obj)) {
                                                  ?>
                                                    <option value="<?php echo $result["username"]; ?>"><?php echo $result["fullname"]; ?></option>
                                                  <?php
                                                }
                                                mysqli_close($dbconfig);
                                                ?>
                                              </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label>ประจำวันที่</label>
                                     <div class="input-group">
                                         <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-calendar"></i></span>
                                         <input type="date" name="txtDate" value="" class="form-control">
                                     </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-5 col-xs-5">
                                           <label>เวลาเข้างาน</label>
                                           <div class="input-group">
                                               <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-clock-o"></i></span>
                                               <input name="txtTimeIn" type="time" class="form-control" placeholder="1" >
                                           </div>
                                       </div>
                                       <div class="col-md-5 col-xs-5">
                                           <label>เวลาออกงาน</label>
                                           <div class="input-group">
                                               <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-clock-o"></i></span>
                                               <input name="txtTimeOut" type="time" class="form-control" placeholder="1" >
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                 <div class="form-group">
                                    <label>หมายเหตุ</label>
                                    <textarea name="txtRemark" class="form-control" placeholder=""></textarea>
                                </div>
                            </fieldset>
                            <hr>
                            <div style="text-align: left">
                                <button class="btn btn-success" type="submit"><i class="fa fa-save" style="padding-right: 5px;"></i> บันทึก</button>
                                <button class="btn btn-danger" type="reset"><i class="fa fa-close" style="padding-right: 5px;"></i> ยกเลิก</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-xs-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>
