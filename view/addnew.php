<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">


                        <form name="edit" method="post" action="../controllers/index_controllers.php" enctype="multipart/form-data">
                            <input type="hidden" value="create" name="action"/>

                    <div class='col-sm-12 row_edit'>
                                <div class='col-sm-12 form_user' style="color: #640c23;font-size: 20px;margin-bottom: 12px">Add new</div>

                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Name</div>
                                <input class='col-sm-4' name = 'name' value=''>
                              <div class="prd" id="error-name"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Email</div>
                                <input class='col-sm-4' name = 'email' value=''>
                                <div class="prd" id="error-email"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Email_personal</div>
                                <input class='col-sm-4' name = 'email_personal' value=''>
                               <div class="prd" id="error-email_personal"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Password</div>
                                <input class='col-sm-4' name='password' value=''>
                               <div class="prd" id="error-password"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Image</div>
                                <input class='col-sm-4' type='file' name ='fileToUpload'><br>

                          </div>
                           <div class='col-sm-12 row_edit'>
                               <div class='col-sm-1'>Gender</div>
                               <div class="col-sm-2">
                                   <input name = 'gender' type='radio' value='1'  >
                                   <label>Nam</label>
                                   <input name = 'gender' type='radio' value='2'  style='margin-left: 20px'>
                                   <label>Nữ </label>
                               </div>
                               <div class="col-sm-4 prd" id="error-gender">Phần bắt buộc</div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Date_of_birth</div>
                                <input class='col-sm-4' name='date_of_birth' value=''>
                               <div class="prd" id="error-date"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Phone_number</div>
                                <input class='col-sm-4' name= 'phone_number' value=''>
                               <div class="prd" id="error-phone"></div>
                          </div>
                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Current_address</div>
                                <input class='col-sm-4' name = 'current_address' value=''>
                               <div class="prd" id="error-current"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Leave_days</div>
                                <input class='col-sm-4' name= 'leave_days' value=''>
                              <div class="prd" id="error-leave"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Team_id</div>
                                <input class='col-sm-4' name ='team_id' value=''>
                              <div class="prd" id="error-team"></div>
                          </div>
                          <div class='col-sm-12 row_edit fm-stt'>
                                <div class='col-sm-1'>Status</div>
                              <div class="col-sm-2">
                                    <input name = 'status' type='radio' value='1'  >
                                    <label>Đang làm </label>
                                    <input name = 'status' type='radio' value='2'  style='margin-left: 20px'>
                                    <label>Đang nghỉ </label>
                              </div>
                              <div class="col-sm-4 prd" id="error-status">Phần bắt buộc</div>
<!--                                <input class='col-sm-4' name='status' value='--><?//= $value['status'] ?><!--'>-->
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Language_skills</div>
                                <input class='col-sm-4' name='language_skills' value=''>
                              <div class="prd" id="error-language"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Hobby</div>
                                <input class='col-sm-4' name='hobby' value=''>
                              <div id="error-hobby"></div>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Salary</div>
                                <input class='col-sm-4' name='salary' value=''>
                              <div class="prd" id="error-salary"></div>
                          </div>
                           <button style="margin-left: 250px;margin-top: 30px" type='submit' class='btn btn-success' id="btn-request">Submit</button>
                        </form>
            <div class="col-md-12 col-sm-12 col-xs-12">
            </div>

          </div>
          <br />


          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12" style ="height: 500px">
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">


            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php include_once '../view/footer.php'?>

