<?php 

$filterRezult = showContact($result,$phone_type_data,$contact_type_data,$email_type_data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Contacts</h1>
        <div>               
            <a href="./index.php?id=create" class="text-success" title="Create new contact">Create New Contact</a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Group</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
              
                <?php foreach($filterRezult as $line) :?>
                    <tr>
                        <td><?php echo $line[0]?></td>
                        <td><?php echo $line[1]?></td>
                        <td><?php echo $line[2]?></td>
                        <td><?php echo $line[3] ."<br>".$line[9]?></td>
                        <td><?php echo $line[5] ."<br>".$line[11]?></td>
                        <td><?php echo $line[10] ?></td>
                        <td><?php echo $line[7]?></td>
                        <td>
                            <a href="./index.php?id=update&contact=<?= $line[0]; ?>" class="text-primary p-1">
                                <i>Modify</i>
                            </a>
                            <a href="./index.php?id=delete&contact=<?= $line[0]; ?>" class="text-danger p-1">
                                <i>Delete</i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
 
            </tbody>
        </table>
    </div>
</body>

</html>