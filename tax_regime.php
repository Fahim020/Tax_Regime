<?php

$conn=mysqli_connect("localhost","forms","Mahtab@001","forms") or die("connection Failed");
if(isset($_GET['name'])){
$aadhaar=$_GET['aadhaar'];
$name=$_GET['name'];
$level=$_GET['level'];

$sql="INSERT INTO `contacts` (`Id`, `aadhaar`, `name`, `level`, `dateandtime`) VALUES (NULL, '$aadhaar', '$name', '$level', current_timestamp());";
$qry=mysqli_query($conn,$sql);
};

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link rel="stylesheet" href="tax_regime.css">
</head>
<body>
    <div class="content">
        <div class="form-container">
            <h3>Tax Regime Switch option facility from default (New Tax Regime) to Old Tax Regime for Financial Year 2024-25</h3>
            <div class="form-header">
                <h4>Record Details</h4>
            </div>





            <form action="tax_regime.php" method="GET"  class="tax-form">
                <label for="pno">Aadhaar Number</label>
                <input type="text" id="Pno" name="aadhaar" placeholder="Enter your user ID" required>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your Name" required>

                <label for="userid">Level</label>
                <input type="text" id="level" name="level" placeholder="Enter your level" required>


                <label>Document:</label>
                <div class="document-buttons">
                    <button type="button">Circular</button>
                    <button type="button">Tax Calculator</button>
                </div>

                <p>You are currently under Income Tax default Option-I (New tax Regime)</p>

                <label for="switch">Do You want to switch from option-I (New Tax Regime) to Option-II (Old Tax Regime)?</label>
                <select id="switch" name="switch">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

                <div class="checkbox-container">
                    <input type="checkbox" id="confirm1" name="confirm1">
                    <label for="confirm1">I Have read the enclosed document attached carefully before exercising the switching option.</label>
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" id="confirm2" name="confirm2">
                    <label for="confirm2">I can switch only once in a Financial Year.</label>
                </div>

                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>




        </div>
    </div>
</body>
</html>