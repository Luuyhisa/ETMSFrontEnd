<?php
// Include config file
// require_once "config.php";
 
// Define variables and initialize with empty values
$role_id = $role_desc = "";
$role_id_err = $role_desc_err = "";
 
const BASE_API = 'http://192.168.8.101:4500/Timekeeping/';
                        
$id = $_GET['id'];
$item_json = file_get_contents( BASE_API . 'read/' . $id );
$item_array = json_decode($item_json, true);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Role</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="page-header clearfix">
                        <a href="../index.php" class="btn btn-primary pull-right btn-lg">
                            <svg width="1em" height="1em" viewBox="0 0 16 12" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                            </svg>  
                            Home
                        </a>
                        <br>
                        <br>
                    </div>

                    <div class="page-header">
                        <h2>Update Time Records</h2>
                        <br>
                        <h4>Time ID: <?php echo $item_array["recID"] ?></h4>
                    </div>
                    
                     <form action="../functions.php" method="post">
                        <div class="form-group <?php echo (!empty($role_desc_err)) ? 'has-error' : ''; ?>">
                            <label>Time In</label>
                            <input type="text" name="time_In" class="form-control" value="<?php echo $item_array["time_In"] ?>">
                        </div>

                        <div class="form-group <?php echo (!empty($role_desc_err)) ? 'has-error' : ''; ?>">
                            <label>Time Out</label>
                            <input type="text" name="time_Out" class="form-control" value="<?php echo $item_array["time_Out"] ?>">
                        </div>

                        <?php
                                
                            $item_json = file_get_contents('http://192.168.8.101:4500/employee/all');
                            $item_array = json_decode($item_json, true);
                        ?>
                        <label>Employee</label>
                        <select name="empID"  class="form-control" id="sel1">
                            <?php
                                 $i = 0;
                                foreach ($item_array as $key => $value) {
                                    
                                    echo "<option value='". $item_array[$i]['empID']."'>" . $item_array[$i]['empName'] . " " . $item_array[$i]['empLastName'] . "</option>";
                                    $i++;
                                }
                            ?>
                          
                        </select>
                        <br>
                       
                        <input type="hidden" name="source" class="form-control" value="Timekeeping">
                        <input type="hidden" name="type" class="form-control" value="update">


                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="all.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>