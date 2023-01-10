<?php
session_start();
?>
<?php
    $host="localhost";
    $dbuser="root";
    $pass="";
    $dbname="project";
    $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
    if(mysqli_connect_errno())
    {
        die("Connection Failed!".mysqli_connect_errno());
    }
    else
    {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  user-select: none;
  text-decoration: none;
  font-family: Goudy Old Style;
}
body{
 background: #9e81af;
 background-image: url(image2.jpg);
 
}
.parnt{
    display: flex;
    position: relative;
}
.parnt .sb{
    position: fixed;
    width: 250px;
    height: 100%;
    left: 0;
   
    background: #201831;
    padding: 30px 0;
}
.parnt .sb h2{
   color:#fff;
   cursor: pointer;
   font-size: 25px;
   text-transform: uppercase;
   font-weight: 600;
   line-height: 25px;
   text-align: center;
   margin-bottom: 30px;
}
 .sb ul li{
    padding: 20px;
    border-bottom: 2px solid  rgba(225,225,225,0.05);
    line-height: 30px;
    border-left: 3px solid transparent;
 }
.parnt .sb ul li a{
   color: #bdb8d7;
   display: block;
   text-decoration: none;
   font-size: 18px;
   padding-left: 25px;
   width: 100%;
   position: relative;
  
}
.parnt .sb ul li a .fas{
    width: 30px;

}
.parnt .sb ul li:hover{
    background: #7e769c;
    border-left-color: white;
   
}
.parnt .sb ul li:hover a{
    color: #fff;
    background: #7e769c;

 }
.parnt .cont{
   width: 100%;
   margin-left: 250px;
}
.parnt .cont
 .headr{
    padding: 30px;
    background: thistle;
    color: #201831;
    font-size: 30px;
    cursor: pointer;
    border-bottom: 3px solid #201831;
}


.are{
        display: inline-block;
        padding: 12px 20px;
        background: #fff;
        border-radius: 30px;
        text-decoration: none;
        color: #000;
        border: 2px solid black;
        font-weight: 500;
        margin-top: 20px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        
}
.are:hover{
    background-color: #201831;
    color: #fff;
}

.area{
    display: inline-block;
    padding: 12px 20px;
    align-items: center;
    justify-content: center;
    margin-top: 60px;
    margin-left: 360px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
    border: 2px solid black;
    background: #fff;
    font-weight: 70px;
    text-decoration: none;
    color: #000;
    font-size: 20px;
}
.area:hover{
    background-color: #201831;
    color: #fff;
}
.para {
   
   margin-left: 50px;
}
}
.ser{
    
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-family: Goudy Old Style;
        flex-wrap: wrap;
       
}
.ser .bx{
        position: relative;
        width: 200px;
        padding: 50px;
        background: thistle;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        font-size: 25px;
        border-radius: 2px;
        margin: 30px;
        border: 2px solid #201831;
        overflow: hidden;
        text-align: center;
}
.ser .box{
        position: relative;
        width: 90%;
        padding: 50px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        font-size: 25px;
        border-radius: 2px;
        margin: 15px;
        border: 5px solid #201831;
       
        overflow: hidden;
        text-align: center;
}
.ser .box:before{
        content: '';
        width: 50%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgb(255,255,255,.1);
        
}
.ser .box .icon{
        position: relative;
        width: 80px;
        height: 80px;
        color: #fff;
        background:  #201831;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        border-radius: 50%;
        font-size: 40px;
        font-weight: 700;
        transition: 1s;
}

.ser .box .content{
        position: relative;
        justify-content: center;
        transition: 0.5s;
        text-align: center;
        
}
.ser h1{
    color: #fff;
    text-align: center;
}

.container{
    margin-top: 80px;
    background-color: #fff;
    width: 90px;
    background-color: transparent;
    padding: 20px;
    margin: 30px;
    margin-bottom: 5px;
}
.container .col1 img
{
    padding: 0;
}

.container h4{
    margin: 20px 0;
    font-size: 22px;
    font-weigth: bold;
}
.row{
        display: inline-flex;
        text-align: center;
        width: auto;
        justify-content: space-between;
        font-family: Goudy Old Style;
       
        
}

.row .col1{
        background: white;
        border: 4px solid#201831;
        margin: 15px;
        margin-bottom: 10px;
        width: 175px;
        padding: 15px;
        line-height: 24px;
        overflow: hidden;
        color: #000;
        position: relative;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        
}
.col1 h3{
    border: 3px solid #201831;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}
.logo img{
	    width: 50px;
	    float: left;
	    height: 50px;
        margin-left: 10px; 
	    border: 5px solid #201831;
        cursor: pointer;
        
        
}
.big{
    display: inline-flex;
    margin: 6px;
    padding: 10px;
    background-color: thistle;
    border-radius: 15px;
    width: 300px;
    height: 250px;
    margin-top: 50px;   
    margin-bottom: 5px;
    border: 3px solid #000;
}
.col2 h3{
    text-align: center;
    font-size: 40px;
    color: white;
    
    font-family: Segoe Script;
}
.recharge{
    padding: 10px;
    margin: 6px;
    height: 250px;
    font-family: Segoe Script;
}

 </style>
    <meta charset="utf-8">
    <title >SIZO TELECOMMUNICATIONS</title>
    <script src="https://kit.fontawesome.com/f04db26bb7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="parnt">
            <div class="sb">
                        <div class="logo">
                            <a href="home.html">
                                <img src="logo1.svg">
                            </a>
                        </div>
                <h2 style="margin-top: 14px;">My Account</h2>
                <ul>
                    <li><a href="customerhome.php"><i class="fas fa-home"></i>HOME</a></li>
                    <li><a href="query3.php"><i class="fas fa-user"></i>DASHBOARD</a></li>
                    
                    <li><a href="afterlogout.html"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>
                    <li><a href="feedback.php"><i class="fas fa-comments"></i>FEEDBACK</a></li>
                </ul> 
            </div>
            <div class="cont">
        
                    <div class="headr" >
                            
                    <?php
                            
                            $a='Welcome ';
                            $b=$_SESSION['username'];
                            $d='!';
                            $c=$a .$b.$d;
                            echo "$c";
                            ?>
                    </div>
                
                <div class="para">
                        <div class="recharge">   
                            <div class="col2">
                       
                                    <h3>Click on Recharge to Avail your pack</h3>
                                    <br>
                                    
                                    <a href="recharge.php" class="area">Recharge Now</a><br><br>
                            </div>
                        </div>
                     
                <p style="color: #fff; font-size: 50px; text-align: center;font-family: Segoe Script; margin-top: 0px;">Releasing  Soon</p>
                    <div class="container">
                    
                            <div class="row">
                                <div class="col1">
                                    <img src="samsung.jfif" width="150px">
                                    <h4>Samsung S20</h4>
                                    
                                    <h4>128 GB, 8 GB RAM</h4><br><br>
                                    <h3>₹59,990</h3>
                                </div>
                                <div class="col1">
                                    <img src="vivo.jpg" width="150px">
                                    <h4> New Apple IPHONE 11</h4>
                                    <h4></h4>
                                    <h4>128 GB, 8 GB RAM</h4><br> 
                                    <h3>₹99,999</h3x>
                                </div>
                                <div class="col1">
                                    <img src="vivo1.jpeg" width="70px" >
                                    <p></p>
                                    <h4>Vivo X50 Pro1</h4>
                                    <h4>8 GB RAM | 256 GB ROM</h4><br> <br> 
                                    <h3>₹49,990</h3>
                                </div>
                                <div class="col1">
                                    <img src="mi.png" width="150px">
                                    <p></p>
                                    <h4>Mi 10i</h4>
                                    <h4>8GB+128GB, Midnight Black</h4><br> 
                                    <h3>₹23,999</h3>
                                </div>
                                
                            </div>
                    </div>
                <div class="ser">
                    <h1 style="font-family: Segoe Script;"> Stay Updated With Some News </h1>
                        <div class="box">
                            <div class="icon">01</div>
                            <div class="content">
                                <h3>Latest News</h3>
                                <p>Airtel offers better download speed, latency; Vodafone Idea leads in upload speeds: Report </p>
                                <a href="https://telecom.economictimes.indiatimes.
                                com/news/airtel-offers-better-download-speed-latency-vodafone-idea-leads-in-upload-speeds-report/80152295" 
                                class="are">Read More</a>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="box">
                                <div class="icon">02</div>
                                <div class="content">
                                    <h3>Lastest News</h3>
                                    <p> ‘Jio exclusive’ smartphones to hit market as telco looks to convert JioPhone users</p>
                                    <a href="https://telecom.economictimes.indiatimes.com/news/
                                    jio-exclusive-smartphones-to-hit-market-as-telco-looks-to-convert-jiophone-users/79428390" 
                                    class="are" >Read More</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="box">
                                <div class="icon">03</div>
                                <div class="content">
                                    <h3>Latest News</h3>
                                    <p>Vodafone Idea moves SC, pointing out calculation errors in AGR dues</p>
                                    <a href="https://telecom.economictimes.indiatimes.
                                    com/news/vodafone-idea-moves-sc-pointing-out-calculation-errors-in-agr-dues/80154659" 
                                    class="are">Read More</a>
                                </div>
                            </div>
                </div><br>
        </div>
    </div>        
   
</div>
</body>
</html>
   