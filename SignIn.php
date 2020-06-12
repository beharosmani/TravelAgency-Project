
<?php
include('Include/header.php');
?>



<!DOCTYPE html>
<html>
<style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

        button:hover {
            opacity: 0.8;
        }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: auto;
            background-color:red;
        }
    }

   #loginHeader {
        text-align:center;
    }
</style>
<body>

    <h2 id="loginHeader">Login </h2>


    <form method="post" action="SignInUsers.php" width="50%" height="50%">

          <input type="submit"  name='submit' value='Upload' />
        <div class="imgcontainer">
           <img src="./img/ICON.png" alt="Avatar" id="iconLogin" width="200px" height="200px" />

        </div>

        <div class="container">
            <label>
                <b>Username</b>
            </label>
            <input type="text" placeholder="Enter Username" name="uname" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" minlength="6" />

            <label>
                <b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="psw" required />

            <button type="submit">Login</button>

        </div>

        <div class="container" style="background-color:red">
            <button type="button" class="cancelbtn">Cancel</button>

        </div>
    </form>

</body>
</html>
<?php
include("Include/footer.php");

?>




<!--
<h2>Login </h2>

<form method="post" action="SignInUsers.php" width="50%" height="50%">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
   
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>

</body>
</html>-->

