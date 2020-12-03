<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1024px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="center">Employees Time Management System</h2>
                    </div>
                    <div class="col-md-4 clearfix">
                        <a href="employee/all.php" class="btn btn-success btn-lg btn-block">View Employees</a>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <a href="leave/all.php" class="btn btn-success btn-lg btn-block">View Leave</a>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <a href="role/all.php" class="btn btn-success btn-lg btn-block">View Roles</a>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <a href="store/all.php" class="btn btn-success btn-lg btn-block">View Stores</a>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <a href="report/all.php" class="btn btn-success btn-lg btn-block">View Reports</a>
                        <br>
                    </div>

                    <div class="col-md-4">
                        <a href="timekeeping/all.php" class="btn btn-success btn-lg btn-block">View Time Tracking</a>
                        <br>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>

<?php
    // echo "<pre>";
    // print_r( $item_array );
?>
</html>