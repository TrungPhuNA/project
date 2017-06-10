<?php 

    require_once ('validation.php');


    $rules = array(
        'username'    => 'required|min:5',
        'phone'       => 'required|number',
        'email'       => 'required|email',
        'password'    => 'required|password',
        're_password' => 'required|re_password:password'
    );
    if(isset($_POST['validation']))
    {
        $val = new Validation($_POST, $rules);
        if ($val->checkerror() === FALSE)
        {
           foreach ($val->get_all_errors() as $errors) {
               $error[] = $errors;
            }
        }
        else
        {
            echo "OK";
        }
        
    }
 ?>
<!DOCTYPE html>
    <html>
    <head>
        <title> FORM VALIDATION </title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <?php if($error) :?>
                        
                        <ul class="alert alert-danger">
                            <?php foreach($error as $item) :?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach ;?>
                            
                        </ul>
                    <?php endif ;?>
                    <form action="" method="POST">
                        

                        <div class="form-group">
                            <label for="email"> Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter email" name="username">
                        </div>
                        <div class="form-group">
                            <label for="phone"> Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="phone"> Email :</label>
                            <input type="email" class="form-control" id="phone" placeholder="Enter phone" name="email">
                        </div>

                        <div class="form-group">
                            <label for="phone"> password :</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="password">
                        </div>


                        <div class="form-group">
                            <label for="phone"> Config password :</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="re_password">
                        </div>
                        
                        <input type="submit" value="validation" name="validation" class="btn btn-default" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>