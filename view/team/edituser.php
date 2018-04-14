<?php include_once '../view/header.php'?>

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->

        <!-- /top tiles -->

        <div class="row">

            <form name="edit" method="post" action="../controllers/team_controllers.php" enctype="multipart/form-data">
                <input type="hidden" value="update" name="action"/>


                <?php
                foreach ($data as $key => $value) {

                    ?>

                    <input class='col-sm-4' type="hidden" name = 'id' value='<?= $value['id'] ?>'>

                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-12 form_user' style="color: #640c23;font-size: 20px;margin-bottom: 12px">User : <?= $value['name'] ?></div>

                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Name</div>
                        <input class='col-sm-4' name = 'name' value='<?= $value['name'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Email</div>
                        <input class='col-sm-4' name = 'email' value='<?= $value['email'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Email_personal</div>
                        <input class='col-sm-4' name = 'email_personal' value='<?= $value['email_personal'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Password</div>
                        <input class='col-sm-4' name='password' value='<?= $value['password'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Image</div>
                        <img class='col-sm-2' src='../images/<?php if (!isset($value['image'])){echo 'user.png';} else $value['image'] ?>' style='width: 60px'>
                        <input class='col-sm-1' value='<?= $value['image'] ?>'>
                        <input class='col-sm-4' type='file' name ='fileToUpload'><br>

                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Gender</div>
                        <input class='col-sm-4' name='gender' value='<?= $value['gender'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Date_of_birth</div>
                        <input class='col-sm-4' name='date_of_birth' value='<?= $value['date_of_birth'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Phone_number</div>
                        <input class='col-sm-4' name= 'phone_number' value='<?= $value['phone_number'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Current_address</div>
                        <input class='col-sm-4' name = 'current_address' value='<?= $value['current_address'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Leave_days</div>
                        <input class='col-sm-4' name= 'leave_days' value='<?= $value['leave_days'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Team_id</div>
                        <input class='col-sm-4' name ='team_id' value='<?= $value['team_id'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Status</div>
                        <input name = 'status' type='radio' value='1' <?php if($value['status'] ==1 ){ echo 'checked = checked';}?> >
                        <label>Đang làm </label>
                        <input name = 'status' type='radio' value='2' <?php if($value['status'] ==2 ){ echo 'checked = checked';}?> style='margin-left: 20px'>
                        <label>Đang nghỉ </label>
                        <!--                                <input class='col-sm-4' name='status' value='--><?//= $value['status'] ?><!--'>-->
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Language_skills</div>
                        <input class='col-sm-4' name='language_skills' value='<?= $value['language_skills'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Hobby</div>
                        <input class='col-sm-4' name='hobby' value='<?= $value['hobby'] ?>'>
                    </div>
                    <div class='col-sm-12 row_edit'>
                        <div class='col-sm-1'>Salary</div>
                        <input class='col-sm-4' name='salary' value='<?= $value['salary'] ?>'>
                    </div>
                    <button type='submit' class='btn btn-success' >Submit</button>

                    <?php
                }

                ?>
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