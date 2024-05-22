<?php 
    $con=mysqli_connect("localhost","root","","registration_data"); 
    if(!$con){
        exit("Database Not Connected !");
    }   
    $q="select * from game_collection";
    $res=mysqli_query($con,$q);
    $res2=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/gamestore.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Store</title>
    <style>
           
    </style>
</head>
<body>
    <?php include('navigation.php'); ?>
    <div class="main">
        <video autoplay muted loop>
            <source src="./images/BGVIDEO2.mp4" type="video/mp4">
        </video>
        <table align="center">
            <tr><th colspan='2' align="center"><h1 >Game Collection List</h1> </th></tr>                                    
            <tr>
                <?php 
                    while($row=mysqli_fetch_object($res))
                    {
                ?> 
                    <td><img src="<?php echo "uploaded/".$row->poster; ?>" width="220px" height="300px" alt=""></td>
                <?php } ?>
            </tr>
            <tr>
                <?php 
                    while($row=mysqli_fetch_object($res2))
                    {
                ?>
                <td><a href="GameDescription.php?ID=<?php echo $row->ID; ?>"><label style="font-size:30px;font-weight:bolder;color:red;text-shadow:1px 1px 2px black"><?php echo $row->name; ?></label></a></td>
                <?php } ?>
            </tr>
            <tr>
                <!-- <?php 
                    while($row=mysqli_fetch_object($res2))
                    {
                ?> -->
                <td><button class="btn-buy"><a href="#">BUY</a></button></td>
                <!-- <?php } ?> -->
            </tr>
                
        </table>
        
    </div>
    <?php include('Footer_Page.php');?>
</body>
</html>