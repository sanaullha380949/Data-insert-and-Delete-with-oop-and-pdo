<?php
include './dbconnection.php';
include './User.php';
//create database object
$database=new Database;
$db=$database->connection();
//create user object
$userobj=new User($db);


$users = $userobj->selectAllUser();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <title>User List</title>
  </head>
  <body>
      <div class="container">
          <?php
          if(!empty($_GET)){
              if($_GET['added']==1){
                  ?>
          <div class="alert alert-info">
              Data added Successfully
          </div>
          <?php
              }
          }
          
          ?>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  if($users){ 
                      foreach ($users as $user){
                          ?>
                  <tr>
                      <td><?php echo $user['user_id'];?></td>
                      <td><?php echo $user['user_name'];?></td>
                      <td><?php echo $user['user_phone'];?></td>
                      <td>
                          <a href="#" class="btn btn-danger delete" data-id="<?php echo $user['user_id'];?>">delete</a>
                      </td>
                  </tr>
                  <?php
                      }
                  }
                  ?>
                  
              </tbody>
          </table>
      </div>

      <script>
       $(document).ready(function(){
        $('.delete').on('click',function(e){
          e.preventDefault();
          message = confirm("Are You Sure?");
          if (message==true) 
          {
            el = $(this);
            id = el.data('id');

            $.ajax({
              url:"delete.php",
              type:"POST",
              data:{user_id: id},
              success : function(data){
                if (data==1){
                  el.closest('tr').css('background','red');
                  el.closest('tr').hide(300);
                }
              } 
            })

          }else{
            // console.log('don\'t Delete');
          }
        });
       });
      </script>

    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  </body>
</html>