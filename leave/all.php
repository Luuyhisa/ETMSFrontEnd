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

                    <div class="page-header clearfix">
                        <h2 class="pull-left">leave Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New leave</a>
                    </div>

                    

                    <?php

                        const BASE_API = 'http://192.168.8.101:4500/leave/';
                        
                        $item_json = file_get_contents( BASE_API . 'all');
                        $item_array = json_decode($item_json, true);
                    
                        // echo "<pre>";

                    if( !empty($item_array) ){
                        echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>Leave ID.</th>";
                                    echo "<th>Leave Days</th>";
                                    echo "<th>Leave Desc</th>";
                                    echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            $i = 0;
                            foreach ($item_array as $leave_key => $leave_val) {
                                
                                echo "<tr>";
                                    echo "<td>" . $item_array[$i]['leaveID'] . "</td>";
                                    echo "<td>" . $item_array[$i]['leaveDaysAmt'] . "</td>";
                                    echo "<td>" . $item_array[$i]['leaveDescription'] . "</td>";
                                    echo "<td>";
                                        echo "<a href='read.php?id=".  $item_array[$i]['leaveID'] ."' title='View Leave' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                        echo "<a href='update.php?id=". $item_array[$i]['leaveID'] ."' title='Update Leave' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                        echo "<a href='delete.php?id=".  $item_array[$i]['leaveID'] ."' title='Delete Leave' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>"; 
                                echo "</tr>";
                                

                                $i++;
                            }
                            echo "</tbody>";                            
                        echo "</table>";

                    } else{
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
 
                    ?>

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