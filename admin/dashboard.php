<?php
date_default_timezone_set('Asia/Dhaka');
include('database.inc.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dash.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <ul class="navbar p-5 mb-0">
          <div class="logo"><h2>Cinemaflix Admin Panel</h2></div>
          <div class="nav-el">
            <li><a href="../index.html">Web Home</a></li>
            <li><a href="../chatbox/index.php">Messages</a></li>
            <li><a href="../movierec/inpack.php">Movie Request</a></li>
            <li><a href="userinfo.php">User Information</a></li>
          </div>
        </ul>
      </nav>
    </header>
    <main class="bodyy">
      <section class="messages">

      <div class="container">
         <div class="row justify-content-md-center mb-4">
            <div class="col-12">
               <!--start code-->
               <div class="card">
                  <div class="card-body messages-box">
					 <ul class="list-unstyled messages-list">
							<?php
							$res=mysqli_query($con,"select * from message");
							if(mysqli_num_rows($res)>0){
								$html='';
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-me";
										$imgAvatar="user.png";
										$name="Admin";
									}else{
										$class="messages-you";
										$imgAvatar="bott.png";
										$name="Client";
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="image/'.$imgAvatar.'" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								echo $html;
							}else{
								?>
								<li class="messages-me clearfix start_chat">
								   Please start
								</li>
								<?php
							}
							?>
                    
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code-->
            </div>
         </div>
      </div>
      <script type="text/javascript">
		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){
			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Admin</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){
						var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bott.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Cinema Chat</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		 }
      </script>

        <!-- <h2>Messages</h2>
        <ul class="mesg">
          <div>
            <li><h3>Sakib</h3></li>
            <p class="c-mesg">Hey Your Website is great</p>
            <input type="text" id="name" name="name" />
            <input type="submit" value="Reply" />
          </div>
          <div>
            <li><h3>Sifat</h3></li>
            <p class="c-mesg"> Hi, there i need help</p>
            <input type="text" id="name" name="name" />
            <input type="submit" value="Reply" />
          </div>
          <div>
            <li><h3>Nusrat</h3></li>
            <p class="c-mesg"> valo movie nai ektao, need good movies</p>
            <input type="text" id="name" name="name" />
            <input type="submit" value="Reply" />
          </div>
          
        </ul> -->
      </section>
      <section class="feedback">
        <h2>Feedback</h2>
        <div class="reviewlist">
          <div class="review">
            <h3>Habib</h3>
            <p>It was great</p>
            <p>Movie : Ra-One</p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>

          <div class="review">
            <h3>Habib</h3>
            <p>It was great</p>
            <p>Movie : Ra-One</p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>

          <div class="review">
            <h3>Habib</h3>
            <p>It was great</p>
            <p>Movie : Ra-One</p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              
            </div>
          </div>
        </div>
      </section>
      
    </main>
    <footer class="footer p-5">
      <p class="">Copyright © 2023 Created By Constant <br>
        Habib, Sifat, Sakib, Nusrat</p>
    </footer>
    <script src="https://kit.fontawesome.com/ee4acf5645.js" crossorigin="anonymous"></script>
  </body>
</html>
