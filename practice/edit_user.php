<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <style>
            body{
                background: #f0f0f0;
            }
            div{
                background:#fff;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                margin-top:10%;
                padding-bottom:60px;
                border: 1px solid #c3c3c3;
                text-align: center;
                box-shadow: 10px 10px 5px #9aa19b;

            }
            input{
                border: 1px solid;
                height:30px;
                width: 40%;
                border-radius: 5px;
                text-align: left;
            }
            button{
                background: #0ee32a;
                color:#fff;
                border:none;
                height:30px;
                width:20%;
                border-radius:5px;
                box-shadow: 2px 2px 5px #9aa19b;
            }
            a{
                color:#fff;
                text-decoration:none;
            }
            button:hover{
                background: #0a02ad;
                transition: 0.5s;
            }
            h2{
                color: #0a02ad;
            }

        </style>
    </head>



<body>
    <div>

    <?php
        include('db.php');

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = $conn->query($sql);
            $user = $result->fetch_assoc();
        }
    ?>

            <form method="POST" style="marginTop:10px">
                <h1>Update details from here</h1>
                <label className="input">Name</label><br>
                <input type="text" name="name" value="<?php echo $user['name']; ?>"><br><br>
                <label>Email</label><br>
                <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
                
                <button type="submit"> Update </button>
                <button><a href='View_user.php'>View</a></button> 

                <?php 
                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
        
                    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        
                    if ($conn->query($sql) === TRUE) {
                        echo "<h2>Record updated successfully</h2>";
                    } else {
                        echo "Error: " . $conn->error;
                    }
                }
                
                ?>

            </form>
        </div>


    </body>
</html>
