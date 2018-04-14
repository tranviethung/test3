<?php include_once '../view/header.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">
<!--              <div class="col-sm-12" >Các phòng ban trong công ty</div>-->
              <div class="row" style="position: relative">
                  <?php

                    foreach ($data as $key=>$value) {
                      ?>
                        <div class="col-sm-5 menu-team box-shadow" >
                            <div class="col-sm-12 name-team "><?php echo $value['name']?></div>
                            <div class="col-sm-12">
                                <img class="col-sm-6 " src="../images/team/<?php echo $value['logo'] ?>">
                                <div class="col-sm-6 seting-team" style="padding-left: 100px">
                                    <div class="col-sm-12 btn-1"><a href="../controllers/team_controllers.php?action=list&id=<?php echo $value['id'] ?>"><button class="btn btn-info btn-1 color">Show User</button></a></div>
                                    <div class="col-sm-12 btn-1 "><a href="../controllers/team_controllers.php?action=addnew"><button class="btn btn-info btn-1 color"> Add New </button></a></div>
                                    <div class="col-sm-12 btn-1 a<?php echo $value['id']?>">
                                        <button class="btn btn-info btn-1">Description</button>
                                        <div class="content-data-show" id="content-data-show<?php echo $value['id']?>">
                                            <p class=" "><?php echo $value['description']?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 closeeeee closeeeee<?php echo $value['id']?>" style="position: absolute;top:20px;right: 25px"><i class="fa fa-close "></i></div>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $(".a<?php echo $value['id']?>").click(function(){
                                    $("#content-data-show<?php echo $value['id']?>").show(300);
                                    $(".closeeeee<?php echo $value['id']?>").show(300);
                                });

                                $(".closeeeee<?php echo $value['id']?>").click(function(){
                                    $("#content-data-show<?php echo $value['id']?>").hide(300);
                                    $(this).hide(300);
                                });

                            });
                        </script>
                      <?php
                    }
                  ?>

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