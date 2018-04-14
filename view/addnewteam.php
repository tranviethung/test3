<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">


                        <form name="edit" method="post" action="../controllers/team_controllers.php" enctype="multipart/form-data">
                            <input type="hidden" value="create" name="action"/>

                    <div class='col-sm-12 row_edit'>
                                <div class='col-sm-12 form_user' style="color: #640c23;font-size: 20px;margin-bottom: 12px">Add New Team</div>

                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Name Team</div>
                                <input class='col-sm-4' name = 'name-team' value=''>
                              <div class="prd" id="error-name-team"></div>
                          </div>

                           <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Image</div>
                                <input class='col-sm-4' type='file' name ='fileToUpload'><br>
                          </div>
                          <div class='col-sm-12 row_edit'>
                                <div class='col-sm-1'>Description</div>
                                <input class='col-sm-4' name='description' value=''>
                              <div class="prd" id="error-description"></div>
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

<script >

// validate form
    $( document ).ready(function() {
        $('input[name="name-team"]').blur(function () {
            var text = $(this).val();
            if(text == 0 ) {
                $('#error-name-team').html('Hãy nhập tên team');
                $('#btn-request').prop('disabled' , true);
            }
            else
            {
                $('#error-name-team').html('');
                $('#btn-request').prop('disabled' , false);
            }
        });

        $('input[name="description"]').blur(function () {
            var text = $(this).val();
            if(text == 0 ) {
                $('#error-description').html('Hãy nhập miêu t');
                $('#btn-request').prop('disabled' , true);
            }
            else
            {
                $('#error-description').html('');
                $('#btn-request').prop('disabled' , false);
            }
        });



    });
</script>
