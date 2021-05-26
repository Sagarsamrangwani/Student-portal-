<?php
    session_start();
    if (isset($_POST["submitBtn"])) {
        
        $uemail = $_POST["username"];
        $upass = $_POST["pass"];
        $servername="localhost";
        $username="root";
        $password= "";
        $filename="undergraduate";
        $con=mysqli_connect($servername, $username, $password, $filename);

        $_SESSION["userEmail"] = $uemail;

        $sql="SELECT * From `batch 19` WHERE `EMAIL ADDRESS` = '$uemail' AND `PASSWORD` = '$upass'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
        if ($row == 1) {
            header("Location: studentdashboard.php");
        }

    }
?>
<html>
    <head>
        <title>Sign in</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url(Bground.jpg);
                background-size: cover;
                background-position: center;
                font-family: sans-serif;}
                .loginbox{
                    width: 320px;
                    height: 420px;
                    background: grey;
                    color: #fff;
                    top: 50%;
                    left: 50%;
                    position: absolute;
                    transform: translate(-50%,-50%);
                    box-sizing: border-box;
                padding: 70px 30px;  }
                    .avatar{
                        width: 100px;
                        height: 100px;
                        border-radius: 50%;
                        position: absolute;
                        top: -50px;
                        
                        margin-right: auto;
                        
                        }
                    h1{
                        margin: 0;
                        padding: 0 0 20px;
                        text-align: center;
                        font-size: 22px;}
                        .loginbox p{
                            margin: 0;
                            padding: 0;
                            font-weight: bold;}
                            .loginbox input{
                                width: 250px;
                                margin-bottom: 40px;}
                                .loginbox input[type="text"], input[type="password"]

                                {
                                    border: none;
                                    border-bottom: 1px solid #fff;
                                    background:transparent;
                                    outline: none;
                                    height: 40px;
                                color: #fff;
                            font-size: 16px; }
                            .loginbox input[type="submit"]
                            {
                                border: none;
                                outline: none;
                                height: 40px;
                                background: #fb2525;
                                color: #fff;
                                font-size: 18p;
                                border-radius: 20px; }
                                .loginbox input[type="submit"]:hover
                                {
                                    cursor: pointer;
                                    background: #ffc107;
                                    color: #000;
                                }
                            
</style>
        
    </head>
    <body>
       <div class="loginbox">
           <img src="profile.jpg" class="avatar">
           <h1>Login Here</h1>
           <form method="post">
               <p>Username</p>
               <input type="text" name="username" placeholder="Enter Username">
               <p>Password</p>
               <input type="Password" name="pass" placeholder="Enter Password"><br>
               <input type="submit" name="submitBtn" value="Login"><br>

           </form>
       </div>
    </body>
</html>
<?php
    session_start();
    $passedEmail = $_SESSION["userEmail"];
    $servername="localhost";
    $username="root";
    $password= "";
    $filename="undergraduate";
    $con=mysqli_connect($servername, $username, $password, $filename);

    

    $sql="SELECT `ID NUMBER` From `batch 19` WHERE `EMAIL ADDRESS` = '$passedEmail'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $idnumber = $row["ID NUMBER"];
    
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: "Roboto", sans-serif; }
            header{
                position: fixed;
                background: #22242A;
                padding: 20px;
                width: 1330px;
                height: 40px;}
            .left_area h3{
                 color: #fff;
                 margin: 0;
                 text-transform: uppercase;
                font-size: 22px;
                 font-weight: 900;}
           .left_area span{
                  color: #1DC4E7;}
            .logout_btn{
                  padding: 5px;
                  background: #19B3D3;
                  text-decoration: none;
                  float: right;
                  margin-top: -30px;
                  margin-right: 30px;
                  border-radius: 2px;
                  font-size: 15px;
                  font-weight: 900;
                  color: #fff;}
            .logout_btn hover{
                  background: #0D9DBB;}
            .sidebar{
                  background: #2F323A;
                  margin-top: 80px;
                  padding-top: 30px;
                  position: fixed;
                  left: 0;
                  width: 250px;
                  height: 100%;}
            .sidebar .profile_image{
                  width: 100px;
                  height: 100px;
                  border-radius: 100px;
                  margin-bottom: 10px; }
            .sidebar h4{
                  color: #ccc;
                margin-top: 0;
                   margin-bottom: 20px;}
            .sidebar a{
                color: #fff;
               display: block;
               width: 100%;
              line-height: 60px;
              text-decoration: none;
            padding-left: 40px;
             box-sizing: border-box; }
            .sidebar a:hover{
             background: #19B3D3;
            font-family:sans-serif; }

.content{
    margin-left: 20px;
    background: url(Dashboard.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;}

        </style>
        <title>student dashboard</title>
       
    </head>
    <body>
        <header>
            <div class="left_area">
                <h3>STUDENT <span>DASHBOARD</span></h3></div>
                <div class="right_area">
                    <a href="student.php" class="logout_btn">Logout</a> </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="profile.jpg" class="profile_image" alt="fkfmfrc">
                <h4><?php echo $idnumber ?></h4>
            </center>
            <a href="#"<span style="  font-family:serif">HOME</a>
            <a href="corses.php"<span style="  font-family:serif">COURSES</a>
            <a href="stdassignment.php"<span style="  font-family:serif">ASSIGNMENTS</a>
            <a href="#"<span style="  font-family:serif">SETTING</a>
        </div>

       <div class="content"></div>
    </body>
</html>
<?php
    session_start();
    $passedEmail = $_SESSION["userEmail"];
    $servername="localhost";
    $username="root";
    $password= "";
    $filename="teacher";
    $con=mysqli_connect($servername, $username, $password, $filename);

    

    $sql="SELECT `EMAIL_ADDRESS` From `TEACHERINFO` WHERE `EMAIL_ADDRESS` = '$passedEmail'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $Name = $row["EMAIL_ADDRESS"];
    
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: "Roboto", sans-serif; }
            header{
                position: fixed;
                background: #22242A;
                padding: 20px;
                width: 1330px;
                height: 40px;}
            .left_area h3{
                 color: #fff;
                 margin: 0;
                 
                 text-transform: uppercase;
                font-size: 22px;
                 font-weight: 900;}
           .left_area span{
                  color: #1DC4E7;}
            .logout_btn{
                  padding: 5px;
                  background: #19B3D3;
                  text-decoration: none;
                  float: right;
                  margin-top: -30px;
                  margin-right: 30px;
                  border-radius: 2px;
                  font-size: 15px;
                  font-weight: 900;
                  color: #fff;}
            .logout_btn hover{
                  background: #0D9DBB;}
            .sidebar{
                  background: #2F323A;
                  margin-top: 80px;
                  padding-top: 30px;
                  position: fixed;
                  left: 0;
              
                  width: 250px;
                  height: 100%;}
            .sidebar .profile_image{
                  width: 100px;
                  height: 100px;
                  border-radius: 100px;
                  margin-bottom: 10px; }
            .sidebar h4{
                  color: #ccc;
                margin-top: 0;
                   margin-bottom: 20px;}
            .sidebar a{
                color: #fff;
               display: block;
               width: 100%;
              line-height: 60px;
              text-decoration: none;
            padding-left: 40px;
             box-sizing: border-box; }
            .sidebar a:hover{
             background: #19B3D3;
            font-family:sans-serif; }

.content{
    margin-left: 20px;
    background: url(124378.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;}

        </style>
        <title>student dashboard</title>
       
    </head>
    <body>
        <header>
            <div class="left_area">
                <h3>TEACHER <span>DASHBOARD</span></h3></div>
                <div class="right_area">
                    <a href="teacherlogin.php" class="logout_btn">Logout</a> </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="teacherloginprofile.PNG" class="profile_image" alt="fkfmfrc">
                <h4><?php echo $Name ?></h4>
            </center>
            <a href="#"<span style="  font-family:serif">HOME</a>
            <a href="#"<span style="  font-family:serif">COURSES</a>
            <a href="#"<span style="  font-family:serif">ASSIGNMENTS</a>
            <a href="#"<span style="  font-family:serif">SETTING</a>
        </div>

       <div class="content"></div>
    </body>
</html>

<?php
session_start();
if (isset($_POST["submitBtn"])) {
    
    $uemail = $_POST["username"];
    $upass = $_POST["pass"];
    $servername="localhost";
    $username="root";
    $password= "";
    $filename="teacher";
    $con=mysqli_connect($servername, $username, $password, $filename);

    $_SESSION["userEmail"] = $uemail;

    $sql="SELECT * From `TEACHERINFO` WHERE `EMAIL_ADDRESS` = '$uemail' AND `PASSWORD` = '$upass'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        header("Location: teacherdashboard.php");
    }

}
?>
<html>
    <head>
        <title>Sign in</title>
        <style>
            
            body{
                margin: 0;
                padding: 0;
                background: url(loginteacher.PNG);
                background-size: cover;
                background-position: center;
                font-family: sans-serif;}
                .loginbox{
                    width: 320px;
                    height: 420px;
                    background: #6f978f;
                    color: #fff;
                    top: 50%;
                    left: 50%;
                    position: absolute;
                    transform: translate(-50%,-50%);
                    box-sizing: border-box;
                padding: 70px 30px;  }
                    .avatar{
                        width: 100px;
                        height: 100px;
                        border-radius: 50%;
                        position: absolute;
                        top: -50px;
                        
                        margin-right: auto;
                        
                        }
                    h1{
                        margin: 0;
                        padding: 0 0 20px;
                        text-align: center;
                        font-size: 22px;}
                        .loginbox p{
                            margin: 0;
                            padding: 0;
                            font-weight: bold;}
                            .loginbox input{
                                width: 250px;
                                margin-bottom: 40px;}
                                .loginbox input[type="text"], input[type="password"]

                                {
                                    border: none;
                                    border-bottom: 1px solid #fff;
                                    background: transparent;
                                    outline: none;
                                    height: 40px;
                                color: #fff;
                            font-size: 16px; }
                            .loginbox input[type="submit"]
                            {
                                border: none;
                                outline: none;
                                height: 40px;
                                background: blue;
                                color: #fff;
                                font-size: 18p;
                                border-radius: 20px; }
                                .loginbox input[type="submit"]:hover
                                {
                                    cursor: pointer;
                                    background: #ffc107;
                                    color: #000;
                                }
                                img{
                                    text-align: center;
                                }
                            

</style>
        
    </head>
    <body>
       <div class="loginbox">
           <img src="teacherloginprofile.PNG" class="avatar">
           <h1>Login Here</h1>
           <form method="post">
               <p>Username</p>
               <input type="text" name="username" placeholder="Enter Username">
               <p>Password</p>
               <input type="Password" name="pass" placeholder="Enter Password"><br>
               <input type="submit" name="submitBtn" value="Login"><br>

           </form>
       </div>
    </body>
</html>
<?php
$servername="localhost";
    $username="root";
    $password= "";
    $filename="courseschairman";
    $con=mysqli_connect($servername, $username, $password, $filename);
    
?>
<html>
    <head>
        <title> Assigning courses</title>
        <style>
            .h1{
                
                text-align: center;
                font-size: 50px;
                color: black;
            }
            .h{
                text-align: center;
                color: black;
                font-size: 30px;
            }
            .h3{
                color: black;
            }
            .body{
                background-image: url("Chairman.PNG");
                position: relative;
                background-repeat: no-repeat;
                background-position: center ;
                background-size: cover;
                
            }
            .div{
                border: none;
                
                width: 200px;
                padding: 15px 32px;
                
                text-decoration: none;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                background-color: blueviolet
                 ;    
            }
        </style>
    </head>
    <body class="body">
        <h1 class="h1" >Chairman's portal</h1>
       <h1 class="h" >Courses</h1>
       <form method="POST">
          <fieldset><label  ><h3 class="h3" >1.Web Engineering </h3>
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Sir Saleem" value="Sir Saleem">Sir Saleem</label> </p> 
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Madam Maria Abdullah" value="Madam Maria Abdullah">Madam Maria Abdullah</label> </p> 
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Sir Shahid Suleman" value="Sir Shahid Suleman">Sir Shahid Suleman</label> </p> 
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Sir Fahad Iqbal" value="Sir Fahad Iqbal">Sir Fahad Iqbal</label> </p> 
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Sir Shafquat" value="Sir Shafquat">Sir Shafquat</label> </p> 
             <p> <label for="teacher">
                 <input type="radio" name="teacher" id="Sir Ramesh Kumar" value="Sir Ramesh Kumar">Sir Ramesh Kumar</label> </p> 
            </label>
        </fieldset> <br>
        <fieldset><label ><h3 class="h3">2.Operating System</h3>
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Sir Saleem" value="Sir Saleem">Sir Saleem</label> </p> 
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Madam Maria Abdullah" value="Madam Maria Abdullah">Madam Maria Abdullah</label> </p> 
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Sir Shahid Suleman" value="Sir Shahid Suleman">Sir Shahid Suleman</label> </p> 
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Sir Fahad Iqbal" value="Sir Fahad Iqbal">Sir Fahad Iqbal</label> </p> 
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Sir Shafquat" value="Sir Shafquat">Sir Shafquat</label> </p> 
            <p> <label for="teacher">
                <input type="radio" name="teacher" id="Sir Ramesh Kumar" value="Sir Ramesh Kumar">Sir Ramesh Kumar</label> </p> 
           </label>
       </fieldset> <br>
       <fieldset><label ><h3 class="h3">3.Microprocessor Based System Design </h3>
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Sir Saleem" value="Sir Saleem">Sir Saleem</label> </p> 
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Madam Maria Abdullah" value="Madam Maria Abdullah">Madam Maria Abdullah</label> </p> 
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Sir Shahid Suleman" value="Sir Shahid Suleman">Sir Shahid Suleman</label> </p> 
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Sir Fahad Iqbal" value="Sir Fahad Iqbal">Sir Fahad Iqbal</label> </p> 
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Sir Shafquat" value="Sir Shafquat">Sir Shafquat</label> </p> 
        <p> <label for="teacher">
            <input type="radio" name="teacher" id="Sir Ramesh Kumar" value="Sir Ramesh Kumar">Sir Ramesh Kumar</label> </p> 
       </label>
   </fieldset> <br>
   <fieldset><label ><h3 class="h3">4.Signal & Systems </h3> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Saleem" value="Sir Saleem">Sir Saleem</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Madam Maria Abdullah" value="Madam Maria Abdullah">Madam Maria Abdullah</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Shahid Suleman" value="Sir Shahid Suleman">Sir Shahid Suleman</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Fahad Iqbal" value="Sir Fahad Iqbal">Sir Fahad Iqbal</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Shafquat" value="Sir Shafquat">Sir Shafquat</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Ramesh Kumar" value="Sir Ramesh Kumar">Sir Ramesh Kumar</label> </p> 
   </label>
</fieldset> <br>
<fieldset><label ><h3 class="h3">5.Probability & Statistics</h3>
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Saleem" value="Sir Saleem">Sir Saleem</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Madam Maria Abdullah" value="Madam Maria Abdullah">Madam Maria Abdullah</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Shahid Suleman" value="Sir Shahid Suleman">Sir Shahid Suleman</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Fahad Iqbal" value="Sir Fahad Iqbal">Sir Fahad Iqbal</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Shafquat" value="Sir Shafquat">Sir Shafquat</label> </p> 
    <p> <label for="teacher">
        <input type="radio" name="teacher" id="Sir Ramesh Kumar" value="Sir Ramesh Kumar">Sir Ramesh Kumar</label> </p> 
   </label>
</fieldset>
      
          
      <button class="div" style="text-align: center;" >Submit </button> 
       </form> 
    </body>
</html>


<?php
    session_start();
    $passedEmail = $_SESSION["userEmail"];
    $servername="localhost";
    $username="root";
    $password= "";
    $filename="undergraduate";
    $con=mysqli_connect($servername, $username, $password, $filename);

    

    $sql="SELECT `ID NUMBER` From `batch 19` WHERE `EMAIL ADDRESS` = '$passedEmail'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $idnumber = $row["ID NUMBER"];
    
?>
<html>

<head>
<meta charset="utf-8">
<style>
            body{
                margin: 0;
                padding: 0;
                font-family: "Roboto", sans-serif; }
                h3{
                  color: black;
                  font-size: 50px;}
            h4{
                  color: black;
                  font-size: 30px; }
            
 .container{
position: absolute;
top: 50px;
left: 550px; 
font-family:serif; }


            header{
                position: fixed;
                background: #22242A;
                padding: 20px;
                width: 1330px;
                height: 40px;}
            .left_area h3{
                 color: #fff;
                 margin: 0;
                 text-transform: uppercase;
                font-size: 22px;
                 font-weight: 900;}
           .left_area span{
                  color: #1DC4E7;}
            .logout_btn{
                  padding: 5px;
                  background: #19B3D3;
                  text-decoration: none;
                  float: right;
                  margin-top: -30px;
                  margin-right: 30px;
                  border-radius: 2px;
                  font-size: 15px;
                  font-weight: 900;
                  color: #fff;}
            .logout_btn hover{
                  background: #0D9DBB;}
            .sidebar{
                  background: #2F323A;
                  margin-top: 80px;
                  padding-top: 30px;
                  position: fixed;
                  left: 0;
                  width: 250px;
                  height: 100%;}
            .sidebar .profile_image{
                  width: 100px;
                  height: 100px;
                  border-radius: 100px;
                  margin-bottom: 10px; }
            .sidebar h4{
                  color: #ccc;
                margin-top: 0;
                   margin-bottom: 20px;
                   font-family:serif;
                   font-size: 20px;}
                   .sidebar a{
                color: #fff;
               display: block;
               width: 100%;
              line-height: 60px;
              text-decoration: none;
            padding-left: 40px;
             box-sizing: border-box; }
.sidebar a:hover{
             background: #19B3D3;
            font-family:sans-serif; }

            
            


        </style>
        <title>student dashboard</title>
       
    </head>
    <body>
        <header>
            <div class="left_area">
                <h3>STUDENT <span>DASHBOARD</span></h3></div>
                <div class="right_area">
                    <a href="student.php" class="logout_btn">Logout</a> </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="profile.jpg" class="profile_image" alt="fkfmfrc">
                <h4><?php echo $idnumber ?></h4>
               
            </center>
            <a href="studentdashboard.php"<span style="  font-family:serif">HOME</a>
            <a href="#"<span style="  font-family:serif">COURSES</a>
            <a href="stdassignment.php"<span style="  font-family:serif">ASSIGNMENTS</a>
            <a href="#"<span style="  font-family:serif">SETTING</a>
             </div>

        <div class="container">
 <h3><u>5th Semester</u></h3>
       <h4><u>COURSES</u></h4>
       <a href="#"<span style="font-size:20px; font-family:serif; text-decoration:none; color:black">WEB ENGINEERING</a><br><br><br>
       <a href="#"<span style="font-size:20px; font-family:serif; text-decoration:none; color:black">OPERATING SYSTEM</a><br><br><br>
       <a href="#"<span style="font-size:20px; font-family:serif; text-decoration:none; color:black">MICROPROCESSOR BASED SYSTEM DESIGN</a><br><br><br>
       <a href="#"<span style="font-size:20px; font-family:serif; text-decoration:none; color:black">PROBABILITY & STATISTICS</a><br><br><br>
       <a href="#"<span style="font-size:20px; font-family:serif; text-decoration:none; color:black">SIGNALS & SYSTEMS</a><br><br><br>
            </div>

    </body>
</html>
<style>
            body{
                margin: 0;
                padding: 0;
                font-family: "Roboto", sans-serif; }
                h3{
                  color: black;
                  font-size: 50px;}
            h4{
                  color: black;
                  font-size: 30px; }
            a{
                  font-size: 20px;
                  color: black;
                  font-family: serif;
                  text-decoration: none;  }
                  
 .container{
position: absolute;
top: 50px;
left: 550px;  }
a:hover{
      cursor: pointer;
                                    background: grey;
                                    color: #000;
}

            header{
                position: fixed;
                background: #22242A;
                padding: 20px;
                width: 1330px;
                height: 40px;}
            .left_area h3{
                 color: #fff;
                 margin: 0;
                 text-transform: uppercase;
                font-size: 22px;
                 font-weight: 900;}
           .left_area span{
                  color: #1DC4E7;}
            .logout_btn{
                  padding: 5px;
                  background: #19B3D3;
                  text-decoration: none;
                  float: right;
                  margin-top: -30px;
                  margin-right: 30px;
                  border-radius: 2px;
                  font-size: 15px;
                  font-weight: 900;
                  color: #fff;}
            .logout_btn hover{
                  background: #0D9DBB;}
            .sidebar{
                  background: #2F323A;
                  margin-top: 80px;
                  padding-top: 30px;
                  position: fixed;
                  left: 0;
                  width: 250px;
                  height: 100%;}
            .sidebar .profile_image{
                  width: 100px;
                  height: 100px;
                  border-radius: 100px;
                  margin-bottom: 10px; }
            .sidebar h4{
                  color: #ccc;
                margin-top: 0;
                   margin-bottom: 20px;}
            .sidebar a{
                color: #fff;
               display: block;
               width: 100%;
              line-height: 60px;
              text-decoration: none;
            padding-left: 40px;
             box-sizing: border-box; }
            .sidebar a:hover{
             background: #19B3D3;
            font-family:sans-serif; }



        </style>
        <title>student dashboard</title>
       
    </head>
    <body>
        <header>
            <div class="left_area">
                <h3>STUDENT <span>DASHBOARD</span></h3></div>
                <div class="right_area">
                    <a href="#" class="logout_btn">Logout</a> </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="profile.jpg" class="profile_image" alt="fkfmfrc">
               
            </center>
            <a href="#"<span style="  font-family:serif">HOME</a>
            <a href="#"<span style="  font-family:serif">COURSES</a>
            <a href="#"<span style="  font-family:serif">ASSIGNMENTS</a>
            <a href="#"<span style="  font-family:serif">SETTING</a>
        </div>

        <div class="container">
 <h3><u>5th Semester</u></h3>
       <h4><u>COURSES</u></h4>
       <a href="#">WEB ENGINEERING</a><br><br>
       <a href="#">OPERATING SYSTEM</a><br><br>
       <a href="#">MICROPROCESSOR BASED SYSTEM DESIGN</a><br><br>
       <a href="#">PROBABILITY & STATISTICS</a><br><br>
       <a href="#">SIGNALS & SYSTEMS</a><br><br>
            </div>

    </body>
</html>
<?php
    session_start();
    $passedEmail = $_SESSION["userEmail"];
    $servername="localhost";
    $username="root";
    $password= "";
    $filename="undergraduate";
    $con=mysqli_connect($servername, $username, $password, $filename);

    

    $sql="SELECT `ID NUMBER` From `batch 19` WHERE `EMAIL ADDRESS` = '$passedEmail'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $idnumber = $row["ID NUMBER"];
    
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: "Roboto", sans-serif; }
            header{
                position: fixed;
                background: #22242A;
                padding: 20px;
                width: 1330px;
                height: 40px;}
            .left_area h3{
                 color: #fff;
                 margin: 0;
                 text-transform: uppercase;
                font-size: 22px;
                 font-weight: 900;}
           .left_area span{
                  color: #1DC4E7;}
            .logout_btn{
                  padding: 5px;
                  background: #19B3D3;
                  text-decoration: none;
                  float: right;
                  margin-top: -30px;
                  margin-right: 30px;
                  border-radius: 2px;
                  font-size: 15px;
                  font-weight: 900;
                  color: #fff;}
            .logout_btn hover{
                  background: #0D9DBB;}
            .sidebar{
                  background: #2F323A;
                  margin-top: 80px;
                  padding-top: 30px;
                  position: fixed;
                  left: 0;
                  width: 250px;
                  height: 100%;}
            .sidebar .profile_image{
                  width: 100px;
                  height: 100px;
                  border-radius: 100px;
                  margin-bottom: 10px; }
            .sidebar h4{
                  color: #ccc;
                margin-top: 0;
                   margin-bottom: 20px;}
            .sidebar a{
                color: #fff;
               display: block;
               width: 100%;
              line-height: 60px;
              text-decoration: none;
            padding-left: 40px;
             box-sizing: border-box; }
            .sidebar a:hover{
             background: #19B3D3;
            font-family:sans-serif; }

        </style>
        <title>student dashboard</title>
       
    </head>
    <body>
        <header>
            <div class="left_area">
                <h3>STUDENT <span>DASHBOARD</span></h3></div>
                <div class="right_area">
                    <a href="student.php" class="logout_btn">Logout</a> </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="profile.jpg" class="profile_image" alt="fkfmfrc">
                <h4><?php echo $idnumber ?></h4>
            </center>
            <a href="studentdashboard.php"<span style="  font-family:serif">HOME</a>
            <a href="corses.php"<span style="  font-family:serif">COURSES</a>
            <a href="#"<span style="  font-family:serif">ASSIGNMENTS</a>
            <a href="#"<span style="  font-family:serif">SETTING</a>
        </div>
    </body>
</html>
<?php
$servername="localhost";
$username="root";
$password= "";
$filename="undergraduate";
$con=mysqli_connect($servername, $username, $password, $filename);

/*if(!$con){
die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully";*/

$sql="SELECT `ID NUMBER`, `EMAIL ADDRESS`, `PASSWORD` From `batch 19`";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
while($row != null){
echo "<p>".$row["ID NUMBER"]."</p>";
echo "<p>".$row["EMAIL ADDRESS"]."</p>";
echo "<p>".$row["PASSWORD"]."</p>";
$row=mysqli_fetch_assoc($result);
}
?>
