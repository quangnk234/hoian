<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/top_bar.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/left_bar.php'; ?>
 <?php
            if(isset($_POST['submit'])){
              if( empty($_POST['name'])){
                $tb="Nhập vào đầy đủ các trường!";
        }

        else {
            $name = $_POST['name'];
            $sql="INSERT INTO category(name) VALUES('{$name}')";
            $query = $conn->query($sql);
              if($query){
                  header('location: /hoian/admin/cat?msg=addsuccess');
                   }
                  else $tb = "Lỗi Thêm thất bại";
            }

        }
?>
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Category Form
                          </header>
                          <div class="panel-body">
                            <div class="col-lg-6">
                              <?php if(isset($tb)) { ?>
                              <div class="alert alert-block alert-danger fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="fa fa-times"></i>
                                  </button>
                                  <?php  echo $tb ?>
                              </div>
                              <?php }?>
                              <form role="form" method="post">
                                 <div class="form-group">
                                      <label for="">Name:</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name Category">
                                  </div>
                                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                  <button type="reset" class="btn btn-info" name="reset">Reset</button>
                              </form>
                           </div>
                          </div>
                      </section>
                  </div>
                </div>
              </section>
            </section>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/footer.php'; ?>
