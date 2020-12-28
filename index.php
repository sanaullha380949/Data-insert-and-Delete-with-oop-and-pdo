
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <title>Add New User</title>
    </head>
    <body>
        
        <div class="container">
            <div style="margin-top: 30px;" class="card">
                <div class="card-header bg-info">
                    <h3 style="text-align: center;">Add New User</h3>
                </div>

                <div  class="card-body">
                    <form action="./user_save.php" method="POST">
                        <div  class="form-group">
                            <label for="name"> Your Name</label> 
                            <input type="text" class="form-control" id="name" placeholder="ENTER YOUR NAME"
                                   name="user_name" required="" />
                        </div>
                       
                        <div  class="form-group">
                            <label for="phone"> Your Phone</label> 
                            <input type="number" class="form-control" id="phone" placeholder="ENTER YOUR PHONE"
                                   name="user_phone" required=""/>
                        </div>
                     
                        
                        <div  class="text-left">
                            <button type="submit" name="submit" class="btn btn-success">
                                Save  
                            </button>

                        </div>
                    </form>
                </div>
            </div> 
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>