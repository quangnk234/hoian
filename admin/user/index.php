<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/top_bar.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/left_bar.php'; ?>

 <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  User Table
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="panel-body">
                 <a class="btn green" href="/hoian/admin/user/add.php">
                 Add New <i class="fa fa-plus"></i></a>
              </button>
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Fullname</th>
                  <th>Function</th>
              </tr>
              </thead>
              <tbody>
                 <?php 
                   $sql = "SELECT * FROM user";
                   $query = $conn->query($sql);
                   $link = $query->num_rows ;
                   if($link > 0){
                     $i = 0;
                     while($arrUser = mysqli_fetch_assoc($query)){
                       $id_user = $arrUser['id_user']; 
                       $username = $arrUser['username'];                     
                       $email = $arrUser['email']; 
                       $fullname = $arrUser['fullname']; 
                       $i++;
                ?>
              <tr class="gradeA">
                  <td><?php echo $i ?></td>
                  <td><?php echo $username ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $fullname ?></td>
                  <td><a href="/hoian/admin/user/edit.php?idUser=<?php echo $id_user?>"><i class="fa fa-edit"></i>Edit</a> - <a href="/hoian/admin/user/delete.php?idUser=<?php echo $id_user?>"><i class="fa fa-minus-circle"></i>Delete</a></td>
              </tr>
              <?php
                }
              }
              ?>
              </tbody>
              </table>
              </div>
              </div>
               </div>
              </section>
              </div>
              </div>
            </section>
          </section>
          </section>
      </section>
<?php require_once $_SERVER['DOCUMENT_ROOT']. '/hoian/templates/admin/inc/footer.php'; ?>