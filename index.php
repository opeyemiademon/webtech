

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <script type='text/javascript'>

        function edit(id){

            window.open("edit_record.php?id="+id, 'blank');
        }


    </script>
</head>
<body>
    
    <main>
    <ul>
        <li>Dashboard</li>
    </ul>
    <div class="container p-0">
        <div class="header">
            <h4 >STUDENT RECORDS</h4>
            <a href="add_new.html" class="btn-success">Add New Student</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php

$content = file_get_contents('student.json');
$studentData = json_decode($content, true);

$sn =0;
    foreach($studentData as $key => $row){
        
        $sn++;
        ?>

        
                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $row['firstName'].' '. $row['lastName']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['department']; ?> </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i> View</button>

                            <button type="button" onclick="edit(<?php echo $row['id']; ?>);" class="btn btn-secondary"><i class="fa fa-pencil"></i> Edit</button>


                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                    </td>
                </tr>

<?php

}

?>
               
            </tbody>
        </table>

        
    </div>

  
   
</main>
</body>
</html>