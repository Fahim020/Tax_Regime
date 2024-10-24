<?php
$conn=mysqli_connect("localhost","forms","Mahtab@001","forms") or die("connection Failed");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="report.css">
    <style>
        th,td{
border: 2px solid black;
text-align: left;
padding: 8px;
width: 20vw;
        }

        .container{
            display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
</head>
<body>
    <div class="container">

        <table>
            <tr>
                <th>Aadhaar</th>
                <th>Name</th>
                <th>Level</th>
                <th>Time</th>
                
            </tr>
            <?php
$sql="SELECT * FROM `CONTACTS`";
$qry=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($qry)){

            ?>
          <tr>
    <td><?php echo $res['aadhaar']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['level']; ?></td>
    <td><?php echo $res['dateandtime']; ?></td>   
</tr>

            <?php };  ?>
        </table>
    </div>


</body>
</html>