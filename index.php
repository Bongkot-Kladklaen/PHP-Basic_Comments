<?php
    include_once 'controller/comment.php';
    $com = new Comment();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment system oop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h3>All comment:</h3>
    <div class="box">
        <ul>
            <?php
            if($result = $com->select()){
                while ($data=$result->fetch_assoc()) {
                    ?>
            <li>
                <b><?php echo $data['name'];?></b> - <?php echo $data['comment'];?> - <?php echo $com->dateFormat($data['comment_time']);?>
            </li>

            <?php 
                }
            }
            ?>
        </ul>
    </div>
    
    <br><br>

    <?php 
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<span style='color:green; font-size:20px'>".$msg."</span>";
        }
        ?>

    <form action="post_comment.php" method="post">
        <table>
            <tr>
                <td>Your name:</td>
                <td><input type="text" name="name" placeholder="enter name"></td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td>
                    <textarea name="comment" placeholder="enter comment" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Post">
                </td>
            </tr>
        </table>
    </form><br>
</div>
</body>
</html>
