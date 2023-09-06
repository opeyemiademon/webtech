<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
    <ul>
        <li><a href="index.html">Dashboard</a></li>
        <li>Edit Student's Record</li>
    </ul>
    <div class="container p-0">
        <div class="header flex-center">
            <h3 >Edit Student's Record</h3>
        </div>

        <?php

$content = file_get_contents('student.json');
$studentData = json_decode($content, true);




?>
<form action="" class='p-20'>

        <div class="row">

            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control col-6" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control col-6" placeholder="Last Name">
            </div>


        </div>
        <div class="row">

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control col-6" placeholder="Address">
            </div>

            <div class="form-group">
                <label for="">Birthday</label>
                <input type="date" class="form-control col-6" placeholder="Birthday">
            </div>


        </div>

        <div class="row">

            <div class="form-group">
                <label for="">Department</label>
                <input type="text" class="form-control col-6" placeholder="Department">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control col-6" placeholder="Status">
            </div>


        </div>


        <div class="row">

            <div class="form-group">
                <label for="">Position</label>
                <input type="text" class="form-control col-6" placeholder="Position">
            </div>

            <div class="form-group">
                <label for="">Salary</label>
                <input type="text" class="form-control col-6" placeholder="Salary">
            </div>


        </div>

    </form>
    <div class="footer">
        <button type="button" class="btn-success"> Update</button>
    </div>
    </div>
</main>
</body>
</html>