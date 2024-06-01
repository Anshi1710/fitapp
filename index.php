<html>
<head>
        <title> Login </title> 
        

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styleguide.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">


</head> 

<body class="body">

<span>
    <h1 class="title-login">Login</h1>

    <form action= "validation.php" method="post">
    
    <input class="usernameemail pop-light-t-16" type="text" placeholder="username" name="user" required>

    <input class="password pop-light-t-16" type="password" name="password" placeholder="password" required>
    
    <!-- <img class="bxuser" src="user-mm.png" alt="bx:user"/>  -->
    
    <hr class="hr-login-1">
            
    <hr class="hr-login-2">
   
    <!-- <img class="lock-icon" src="password-lock.png" alt="akar-icons:lock-on" /> -->

    <input type="checkbox" id="remember me" class="checkbox">
    
    <div class="remember-me pop-nor-t-13">Remember me</div>

   
    
    <button class="login-1 mm-b3"  type="submit" onclick="link">Login</button>

    <p class="remember-me-2 pop-nor-t-13">Don't have an Account yet?</p>

    <a href="index2.php" class="remember-me-3 pop-med-t-13">Sign Up</a>

    </form>

    <div class="rectangle-half">

        <div class="welcome-back">Welcome Back!</div>

        <!-- <img class="hello-rafiki" src="Creative thinking-pana.png" alt="Creativethinking-pana 1"/> -->
        <svg class="hello-rafiki" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg" id="Outline"><path d="M440,248H408a7.981,7.981,0,0,1-8-8v-4.484a84.269,84.269,0,0,0,37.693-52.028A32,32,0,0,0,440,121.013V88a56.065,56.065,0,0,0-51.315-55.789A36.7,36.7,0,0,0,358.111,16H328a72.081,72.081,0,0,0-72,72v24a8,8,0,0,0,8,8h8v1.009a32,32,0,0,0,2.274,62.468q.312,1.317.666,2.623l15.439-4.2A68.174,68.174,0,0,1,288,164V119.758a197.684,197.684,0,0,0,89.72-26.443,52.317,52.317,0,0,0,34.108,36.393L424,133.766V164a68.006,68.006,0,0,1-107.363,55.454l-9.274,13.038A84.192,84.192,0,0,0,320,239.905V240a8.009,8.009,0,0,1-8,8h-8V224a32.036,32.036,0,0,0-32-32H48a32.036,32.036,0,0,0-32,32v24H32V224a16.019,16.019,0,0,1,16-16H272a16.019,16.019,0,0,1,16,16V368a16.019,16.019,0,0,1-16,16H183.61l8.212-38.324A8,8,0,0,0,184,336H128a8,8,0,0,0-7.353,4.849L102.154,384H48a16.019,16.019,0,0,1-16-16V264H16V368a32.036,32.036,0,0,0,32,32H95.3L74.725,448H24a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8H488a8,8,0,0,0,8-8V456a8,8,0,0,0-8-8H474.264A63.85,63.85,0,0,0,496,400v-8H480v8a48.055,48.055,0,0,1-48,48H304V432a24.028,24.028,0,0,1,24-24H432a8,8,0,0,0,8-8V344h40v32h16V304A56.064,56.064,0,0,0,440,248Zm0-84V138.165a15.978,15.978,0,0,1,3.32,25.142,16.2,16.2,0,0,1-3.367,2.561C439.966,165.245,440,164.626,440,164ZM264,152a15.923,15.923,0,0,1,4.68-11.307,16.159,16.159,0,0,1,3.32-2.532V164c0,.619.017,1.236.031,1.854A16,16,0,0,1,264,152ZM376,75.66A181.933,181.933,0,0,1,278.311,104H272V95.089c68.483-8.969,92.63-32.406,93.657-33.432L354.394,50.293c-.058.056-5.877,5.589-19.922,11.985C322.657,67.659,302.7,74.652,272.761,78.84a55.568,55.568,0,0,1,4.69-14.92c29.93-.845,45.445-8.424,46.127-8.765l-7.112-14.332c-.114.056-9.07,4.292-26.61,6.229A55.784,55.784,0,0,1,328,32h30.111A20.816,20.816,0,0,1,376,42.048Zm40.888,38.87A36.351,36.351,0,0,1,392,80V48.8A40.071,40.071,0,0,1,424,88v28.9ZM335.371,245.439a84.069,84.069,0,0,0,48.835-2.325,23.888,23.888,0,0,0,6.827,13.872,24.215,24.215,0,0,0,3.875,3.137l-2.28,3.039a42.031,42.031,0,0,1-68.885-2.243A24.079,24.079,0,0,0,335.371,245.439ZM288,432v16H248V432Zm-16.984-32H272a31.94,31.94,0,0,0,8-1.013V416H264.616Zm-64,0h46.768l-6.4,16H240a8,8,0,0,0-8,8v24H216V424a8,8,0,0,0-8-8h-7.384Zm-26.835,0h9.6l-6.4,16h-6.631ZM200,432v16H169.9l3.428-16Zm-66.725-80H174.1l-20.571,96h-61.4ZM480,464v16H32V464Zm0-136H440V304H424v88H328a39.964,39.964,0,0,0-32,16.028v-18.9A31.86,31.86,0,0,0,304,368V264h3.061a58.083,58.083,0,0,0,98.369,8.76L412,264h28a40.045,40.045,0,0,1,40,40Zm-88.617-23.2,6.975,14.4A88,88,0,0,1,316,316.21l8-13.856a72,72,0,0,0,67.384,2.446ZM336,144a16,16,0,1,1-16-16A16.019,16.019,0,0,1,336,144Zm32,0a16,16,0,1,1,16,16A16.019,16.019,0,0,1,368,144Zm3.637,26.2,8.726,13.411a52.043,52.043,0,0,1-56.726,0l8.726-13.411A36.026,36.026,0,0,0,371.637,170.2ZM128,248H96V232h32Zm48-16v16H144V232Zm48,0v16H192V232Zm48,16H240V232h32ZM80,232v16H48V232Z" fill="#f7f5f3" data-original="#000000" class=""></path></g></g></svg>
        
    </div>
</span>

</div>
