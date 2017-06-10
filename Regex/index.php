<?php 

    


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = isset($_POST['name']) && $_POST['name'] != NULL ? $_POST['name'] : '';
    }

    $pattern = '/[0-9]/'; // kiểm tra số
    $pattern = '/[a-z]/'; // kiểm tra chữ thường 
    $pattern = '/[A-Z]/'; // kiểm tra chữ in hoa
    $partern = '/[a-zA-Z]/'; // ktra chữ in hoa hoạc thường
    $pattern = '/[a-zA-Z0-9]/'; // kiểm tra có phải số , in hoa , thường

    $pattern = '/^[a-z]{5,10}$/'; // chữ in thường dài  5- 10 ký tự
    $subject = $name;
    if (preg_match($pattern, $subject)){
        echo 'Ký tự nhập vào  đúng định dạng';
    }
    else
    {
        echo "ko phải số";
    }

   
 ?>

<!DOCTYPE html>
    <html>
    <head>
        <title>  TEST</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                <div class="col-md-6"> 
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2 class="text-danger text-center">Biểu thức đệ quy</h2>
                            <form action="" method="POST" class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input type="text" name="name" class="form-control col-md-3">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Biểu thức đệ quy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>