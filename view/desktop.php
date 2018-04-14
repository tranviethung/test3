<?php include_once '../view/header.php'?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->

          <div class="row">
              <div class="col-sm-12">

                  <p class="col-sm-7" style="font-size: 20px;color: rgb(42, 63, 84);margin: 20px">Chào mừng đến với Vinsofts</p>
<!--                  <img src="../../Project1/images/benner/vinsofts.png">-->
              </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-sm-5 benner box-shadow">
                    <div class="col-sm-12 benner-name">Quản lý User </div>
                    <img src="../images/benner/user1.png">
                    <div class="col-sm-5 " style="float: right;margin-top: 60px">
                        <div class="col-sm-12 btn-1 "><a href="../controllers/index_controllers.php"><button class="btn btn-1 color1" style="color: ">Show User</button></a></div>
                        <div class="col-sm-12 btn-1 "><a href="../controllers/index_controllers.php?action=addnew"><button class="btn color1 btn-1"> Add New</button></a></div>
                        <div class="col-sm-12"><p class="count1">Number User: <?php echo $data ?></p></div>
                    </div>
                </div>
                <div class="col-sm-5 benner box-shadow" >
                    <div class="col-sm-12 benner-name">Quản lý Team </div>
                    <img src="../images/benner/team.png">
                    <div class="col-sm-5 " style="float: right;margin-top: 60px">
                        <div class="col-sm-12 btn-1 "><a href="../controllers/team_controllers.php"><button class="btn btn-1 color1" style="color: ">Show Team</button></a></div>
                        <div class="col-sm-12 btn-1 "><a href="../controllers/team_controllers.php?action=addnewTeam"><button class="btn color1 btn-1"> Add New     </button></a></div>
                        <div class="col-sm-12 "><p class="count1">Number Team: <?php echo $data2 ?></p></div>
                    </div>
                </div>
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