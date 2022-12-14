<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!---bootstrap cdn----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---fontawsome cdn----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <style>
        table, th, td {
             border: 1px solid black;
             margin-top: 30px;
             border-color: #0A2558;
         }
        th, td{
            padding: 10px;
        }
        th{
            text-align: left;
        }
        
        .button{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
        .button a{
            margin-top: 10px;
            margin-right: 5px;
            color: #fff;
            background: #0A2558;
            padding: 4px 12px;
            font-size: 15px;
            font-weight: 400;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .button a:hover{
            background: #0d3073;
        }

    </style>
   
     
    <div class="text-white py-3" style="background-color: #0A2558;">
        <h1>&nbsp;&nbsp;Products</h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="projectdashboard.html" class="navbar-brand">&nbsp;&nbsp;
         
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link" >
                        <i class="fas fa-chart-bar"></i> Dashboard
                    </a>
                </li> 

                <li class="nav-item">
                   <a href= "addMobile.php" class="nav-link">
                    <i class="fas fa-box"></i> Add Mobile Products
                   </a>
                </li>   
                <li class="nav-item">
                   <a href= "addAccessories.php" class="nav-link">
                    <i class="fas fa-box"></i> Add Accessories
                   </a>
                </li>   
                    
                <!-- <li class="nav-item">
                    <a href="updateProduct.php" class="nav-link">
                    <i class="fas fa-box"></i> Update Products
                    </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a href="deleteProduct.php" class="nav-link">
                        <i class="fas fa-box"></i> Delete Products
                    </a>
                </li>
                 -->
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>                -->
            </ul>
        </div>
    </nav>
    </div>
    
     
   <table style="width:100%">
  <tr style="background-color:#0A2558">

    <th class="table-dark">Product ID</th>
    <th class="table-dark">Category</th>
    <th class="table-dark">Brand Name</th>
    <th class="table-dark">Product Name</th>
    <th class="table-dark">Price</th>
    <th class="table-dark">Camera</th>
    <th class="table-dark">Storage</th> 
    <th class="table-dark">RAM</th>
    <th class="table-dark">Battery</th>
    <th class="table-dark">Display Size</th>
    <th class="table-dark"> </th>
    
   
  </tr>

  <?php include("../../dbh/config.php");
      include("../../dbh/function.php");
  
  $sql = "SELECT * FROM product";
        $res = $con->query($sql);
        if($res->num_rows > 0){
            while($row = $res ->fetch_assoc()){
                echo '<tr>  
                <td class="table-danger">'.$row['ID'].'</td>
                <td class="table-primary">'.$row['CATEGORY'].'</td>
                <td class="table-secondary">'.$row['BNAME'].'</td>
                <td class="table-secondary">'.$row['PNAME'].'</td>
                <td class="table-secondary">Rs. '.$row['PRICE'].'</td>
                <td class="table-secondary">'.$row['CAMERA'].' MP</td>
                <td class="table-secondary">'.$row['STORAGE'].' GB</td>
                <td class="table-secondary">'.$row['RAM'].' GB</td>
                <td class="table-secondary">'.$row['BATTERY'].'mAh</td>
                <td class="table-secondary">'.$row['DISPLAY'].' </td>
              
                <td><a href="deleteProduct.php?id='.$row['ID'].'" class="btn btn-sm btn-danger">Delete</a></td>
                
        </tr>';
        }
    }
?>
</table>

    
    
<!---javaScript cdn----->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>