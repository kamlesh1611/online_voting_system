<?php 
    $con=mysqli_connect("localhost","root","","registration_data");
    if(!$con){
    exit("Database Not Connected....!");
    }
    if (isset($_REQUEST['ID'])) {
        $id = $_REQUEST['ID'];
        $q = "SELECT * FROM game_collection WHERE ID = " . mysqli_real_escape_string($con, $id);
        $res = mysqli_query($con, $q);
        $row=mysqli_fetch_object($res);
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/Game_Details.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .poster {
            height: 250px;
            width: 200px;
        }

        .screenshot {
            height: 300px;
            width: 500px;
        }
    </style>
</head>

<body>
    <?php include('backgroundVideo.php'); ?>
    <div class="main">
        <div class="container">
            <table align="center">
                <th><h1 style="color:red;">Details</h1></th>
                <tr>
                    <td>
                        <img src="<?php echo " uploaded/".$row->poster; ?>" alt="" class="poster">
                    </td>
                </tr>
                <tr>
                    <td class="gname">
                        <?php echo $row->name; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="lbl">Description</label></td>
                </tr>
                <tr>
                    <td class="dsc">
                        <?php echo $row->description; ?>
                    </td>
                </tr>
                <tr>
                    <th><h2 style="color:red;font-weight: bolder;">Screenshot</h2></th>
                </tr>
                <tr>
                    <td><img src="<?php echo " uploaded/screenshots/".$row->image1; ?>" target="_blank" class="screenshot"></td>
                </tr>
                <tr>
                    <td><img src="<?php echo " uploaded/screenshots/".$row->image2; ?>" target="_blank" class="screenshot"></td>
                </tr>
                <tr>
                    <td><img src="<?php echo " uploaded/screenshots/".$row->image3; ?>" target="_blank" class="screenshot"></td>
                </tr>
                <th>
                    <h1 style="color:red;">Minimum Requirement</h1>
                </th>
                <tr>
                    <td>
                        <table align="center" style="justify-content: left;">
                            <tr>
                                <td><label class="lbl">RAM(GB):</label>&nbsp;</td>
                                <td><?php echo $row->ram; ?></td>
                            </tr>
                            <tr>
                                <td><label class="lbl">GPU:</label>
                                &nbsp;</td>
                                <td><?php echo $row->gpu; ?></td>
                            </tr>
                            <tr>
                                <td><label class="lbl">CPU:</label>
                                &nbsp;
                                <td><?php echo $row->cpu; ?></td>   
                            </tr>  
                            <tr>
                                <td><label class="lbl">Storage(GB)</label>:
                                &nbsp;</td>
                                <td><?php echo $row->storage; ?></td>                                
                            </tr> 
                            <tr>
                                <td><label class="lbl">Price(rs.):</label>&nbsp;</td>
                                <td><?php echo "₹".$row->price; ?></td>
                            </tr>                                                                
                        </table>
                    </td>
                </tr>  
                <tr>
                    <td class="btn-row">
                        <a href="#"><button class="buy-btn">ADD TO CART </button></a>
                    </td>
                </tr>                                                                              
                <tr>
                    <td class="btn-row">
                        <a href="./Edit_Codes/EditGame.php?ID=<?php echo $row->ID; ?>" ><button class="btn-edit">Edit</button></a>
                        <a href="./delete_code/DeleteGame.php?ID=<?php echo $row->ID; ?>" ><button class="btn-delete">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>

                        <a href="Home.php?ID=<?php echo $row->ID ?>"><input type="button" value="Offer-Live" class="live-btn"></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>