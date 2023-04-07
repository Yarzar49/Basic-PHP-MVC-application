<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php 
        foreach($books as $book)
        {?>

        <tr>
            <td><a href="index.php?book=<?php echo $book->title; ?>">
            <?php echo $book->title; ?>
        </a></td>
            <td><?php echo $book->author; ?></td>
            <td><?php echo $book->description; ?></td>
        </tr>

        <?php 
        }
        ?>
        
    </table>
</body>
</html>