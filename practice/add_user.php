<!DOCTYPE html>
<html>
    <head>
        <title>Add Users</title>
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
            .viewbutton{
                background: #0a02ad;
                color:#fff;
                border:none;
                height:30px;
                width:20%;
                border-radius:5px;
                box-shadow: 2px 2px 5px #9aa19b;
            }
            .viewbutton:hover{
                background: #0ee32a;
                transition: 0.5s;
            }
            h2{
                color:#0a02ad;
            }

        </style>
    </head>



    <body>
        <div>

        <?php
            include('db.php');
        ?>


            <form method="POST" style="marginTop:10px">
                <h1>Input your details here</h1>
                <label className="input">Name</label><br>
                <input type="text" name="name" placeholder="Enter Name" required><br><br>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Enter Email" required><br><br>
                
                <button type="submit"> Add </button>
                <button class="button viewbutton"><a href='View_user.php'>View</a></button> 
            </form>

            <?php 
                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
    
                    // Prepared statement
                    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
                    $stmt->bind_param("ss", $name, $email);
    
                    if ($stmt->execute()) {
                        echo "<h2>New record created successfully</h2>";
                    } else {
                        echo "<h2>Error: </h2>" . $stmt->error;
                    }
    
                    $stmt->close();
                    $conn->close();
                }
                ?>

        </div>


    </body>
</html>



