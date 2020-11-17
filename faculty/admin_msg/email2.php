<?php
session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


if(isset($_POST['send']))
{
   $msgfrom='anil0001';

   $msg=$_POST['txtbox'];

     $day = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $date=$day->format('d-m-Y H:i:s');


$s = "insert into groupchat(frommsg,msg,date) values('$msgfrom','$msg','$date')";


$res=mysqli_query($con,$s);


}


?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
   <head>
      <title>Chat</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
<style type="text/css"> body,html{
         height: 100%;
         margin: 0;
         background: #7F7FD5;
          background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
           background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
      }

      .chat{
         margin-top: auto;
         margin-bottom: auto;
      }
      .card{
         height: 500px;
         border-radius: 15px !important;
         background-color: rgba(0,0,0,0.4) !important;
      }
      .contacts_body{
         padding:  0.75rem 0 !important;
         overflow-y: auto;
         white-space: nowrap;
      }
      .msg_card_body{
         overflow-y: auto;
      }
      .card-header{
         border-radius: 15px 15px 0 0 !important;
         border-bottom: 0 !important;
      }
    .card-footer{
      border-radius: 0 0 15px 15px !important;
         border-top: 0 !important;
   }
      .container{
         align-content: center;
      }
      .search{
         border-radius: 15px 0 0 15px !important;
         background-color: rgba(0,0,0,0.3) !important;
         border:0 !important;
         color:white !important;
      }
      .search:focus{
           box-shadow:none !important;
           outline:0px !important;
      }
      .type_msg{
         background-color: rgba(0,0,0,0.3) !important;
         border:0 !important;
         color:white !important;
         height: 60px !important;
         overflow-y: auto;
      }
         .type_msg:focus{
           box-shadow:none !important;
           outline:0px !important;
      }
      .attach_btn{
   border-radius: 15px 0 0 15px !important;
   background-color: rgba(0,0,0,0.3) !important;
         border:0 !important;
         color: white !important;
         cursor: pointer;
      }
      .send_btn{
   border-radius: 0 15px 15px 0 !important;
   background-color: rgba(0,0,0,0.3) !important;
         border:0 !important;
         color: white !important;
         cursor: pointer;
      }
      .search_btn{
         border-radius: 0 15px 15px 0 !important;
         background-color: rgba(0,0,0,0.3) !important;
         border:0 !important;
         color: white !important;
         cursor: pointer;
      }
      .contacts{
         list-style: none;
         padding: 0;
      }
      .contacts li{
         width: 100% !important;
         padding: 5px 10px;
         margin-bottom: 15px !important;
      }
   .active{
         background-color: rgba(0,0,0,0.3);
   }
      .user_img{
         height: 70px;
         width: 70px;
         border:1.5px solid #f5f6fa;
      
      }
      .user_img_msg{
         height: 40px;
         width: 40px;
         border:1.5px solid #f5f6fa;
      
      }
   .img_cont{
         position: relative;
         height: 70px;
         width: 70px;
   }
   .img_cont_msg{
         height: 40px;
         width: 40px;
   }
   .online_icon{
      position: absolute;
      height: 15px;
      width:15px;
      background-color: #4cd137;
      border-radius: 50%;
      bottom: 0.2em;
      right: 0.4em;
      border:1.5px solid white;
   }
   .offline{
      background-color: #c23616 !important;
   }
   .user_info{
      margin-top: auto;
      margin-bottom: auto;
      margin-left: 15px;
   }
   .user_info span{
      font-size: 20px;
      color: white;
   }
   .user_info p{
   font-size: 10px;
   color: rgba(255,255,255,0.6);
   }
   .video_cam{
      margin-left: 50px;
      margin-top: 5px;
   }
   .video_cam span{
      color: white;
      font-size: 20px;
      cursor: pointer;
      margin-right: 20px;
   }
   .msg_cotainer{
      margin-top: auto;
      margin-bottom: auto;
      margin-left: 10px;
      border-radius: 25px;
      background-color: #82ccdd;
      padding: 10px;
      position: relative;
   }
   .msg_cotainer_send{
      margin-top: auto;
      margin-bottom: auto;
      margin-right: 10px;
      border-radius: 25px;
      background-color: #78e08f;
      padding: 10px;
      position: relative;
   }
   .msg_time{
      position: absolute;
      left: 0;
      bottom: -15px;
      color: rgba(255,255,255,0.5);
      font-size: 10px;
   }
   .msg_time_send{
      position: absolute;
      right:0;
      bottom: -15px;
      color: rgba(255,255,255,0.5);
      font-size: 10px;
   }
      .msg_who_send{
      position: absolute;
      left:15px;
      top: -20px;
      color: rgba(255,255,255,0.5);
      font-size: 10px;
   }

   .msg_head{
      position: relative;
   }
   #action_menu_btn{
      position: absolute;
      right: 10px;
      top: 10px;
      color: white;
      cursor: pointer;
      font-size: 20px;
   }
   .action_menu{
      z-index: 1;
      position: absolute;
      padding: 15px 0;
      background-color: rgba(0,0,0,0.5);
      color: white;
      border-radius: 15px;
      top: 30px;
      right: 15px;
      display: none;
   }
   .action_menu ul{
      list-style: none;
      padding: 0;
   margin: 0;
   }
   .action_menu ul li{
      width: 100%;
      padding: 10px 15px;
      margin-bottom: 5px;
   }
   .action_menu ul li i{
      padding-right: 10px;
   
   }
   .action_menu ul li:hover{
      cursor: pointer;
      background-color: rgba(0,0,0,0.2);
   }
   @media(max-width: 576px){
   .contacts_card{
      margin-bottom: 15px !important;
   }
}
   html,
body {
    padding: 0;
    margin: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

nav {
    height: 80px;
    width: 100%;
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    align-items: center;
    background: rgb(255, 255, 255);
    z-index: 999;
    filter: drop-shadow(1px 5px 10px black);
    justify-content: space-between;
}

nav .label {
    font-weight: bold;
    font-size: 2em;
    margin-left: 10px;
    text-transform: capitalize;
    font-family: Arial, Helvetica, sans-serif;
}

.controls {
    display: flex;
    /* justify-self: flex-end; */
    justify-content: end;
    font-size: 1.5em;
}

.controls a {
    text-decoration: none;
}

.controls>div {
    margin: 0 10px;
    font-weight: bold;
    text-align: center;
    border-radius: 2px;
    cursor: pointer;
}

.home {
    color: blue;
    padding: 10px 0px;
    margin: 0px 30px;
    width: 4em;
    position: relative;
}

.home:hover {
    color: green;
}

.home::after {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    background: rgb(255, 0, 242);
    height: 3px;
    bottom: 0;
    transform: scaleX(1);
    transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
}

.home:hover::after {
    transform: scaleX(0);
}

   </style>

<script type="text/javascript">  $(document).ready(function(){
$('#action_menu_btn').click(function(){
   $('.action_menu').toggle();
});
   });</script>

   </head>
   <!--Coded With Love By Mutiullah Samim-->
   <body>
       <nav>
        <div class="label">online Proctoring System</div>
        <div class="controls">
            <a href="../../faculty/faculty_home/facultyHome.php" class="home" >
 <div>Home</div>

            <a href="../../logout.php" class="home">
                <div>Logout</div>
            

            </a>
        </div>
    </nav>












      <div class="container-fluid h-100">
         <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
              <!--  <div class="card-header">
                  <div class="input-group">
                     <input type="text" placeholder="Search..." name="" class="form-control search">
                     <div class="input-group-prepend">
                        <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                     </div>
                  </div>
               </div> -->
               <div class="card-body contacts_body">
                  <ui class="contacts">
       
                  <li class="active">
                     <div class="d-flex bd-highlight">
                        <div class="img_cont">
                           <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                          <!--  <span class="online_icon offline"></span> -->
                        </div>
                        <div class="user_info">
                           <span>Proctors Group</span>
                          
                        </div>
                     </div>
                  </li>

                             <a href="email.php">
                  <li>

                     <div class="d-flex bd-highlight">
                        <div class="img_cont">
                           <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                        <!--    <span class="online_icon"></span> -->
                        </div>
                        <div class="user_info">
                           <span>Admin</span>
          
                        </div>
                     </div>
                  </li>
               </a>


                  </ui>
               </div>
               <div class="card-footer"></div>
            </div></div>


            <div class="col-md-8 col-xl-6 chat">
               <div class="card">
                  <div class="card-header msg_head">
                     <div class="d-flex bd-highlight">
                        <div class="img_cont">
                         <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                        <!--    <span class="online_icon"></span> -->
                        </div>
                        <div class="user_info">
                           <span>Proctors Group</span>
                         
                        </div>
                     </div>
                  </div>


                  <div class="card-body msg_card_body">


                     <?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


$regdNo='anil0001';
                $s = "SELECT *
  FROM groupchat";

  $res=mysqli_query($con,$s);

  while($rows=mysqli_fetch_assoc($res))
{

if($rows['frommsg']==$regdNo)
{

?>
                     <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer">
                          <?php  echo $rows['msg'];?>
                           <span class="msg_time"> <?php  echo $rows['date'];?></span>
                        </div>
                     </div>
                     
<?php  } 
else{
?>
                     <div class="d-flex justify-content-start mb-4">
                       
                        <div class="msg_cotainer_send">
                            <span class="msg_who_send"> <?php  echo $rows['frommsg'];?></span>
                         <?php  echo $rows['msg'];?>
                           <span class="msg_time_send"> <?php  echo $rows['date'];?></span>
                        </div>
               
                     </div>
                
<?php 
}

}
?>


                  </div>
                  
                     <form name="chatform" method="post">


                  <div class="card-footer">
                     <div class="input-group">
                     <!--    <div class="input-group-append">
                           <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div> -->
   
                        <textarea name="txtbox" class="form-control type_msg" placeholder="Type your message..."></textarea>
                        <div class="input-group-append">
                          <input type="submit" name="send" value="send">
                        </div>

                     
                     </div>
                  </div>
                     </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
