<!DOCTYPE html>
<html lang='en' class='nojs'>
  <head>
    <meta charset='UTF-8'>
    <title>Illinois Institute of Technology</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' media='screen' href='css/reset.css'/>
    <link rel='stylesheet' media='screen' href='css/normalize.css'/>
    <link rel='stylesheet' media='screen' href='css/global.css' />
    <link rel='stylesheet' media='screen' href='css/iit.css' />
    <script src='js/iit.js'></script> 
  </head>
  
  <body>
    <div id='sideNav' class='nav'>
      <p class='closebtn' onclick='closeNav()'>&times;</p>
      <p onclick="closeNav(); openPage('Welcome')">Welcome</p>
      <p onclick="closeNav(); openPage('Academics')">Academics</p>
      <p onclick='closeNav()'>Student Life</p>
      <p onclick='closeNav()'>Work</p>
      <p onclick='closeNav()'>Library</p>
      <p onclick='closeNav()'>Research</p>
      <p onclick='closeNav()'>My Stuff</p>
      <p onclick='closeNav()'>Training and Support</p>
    </div>
    <div id='main'>
      <div id='iitBanner'>
        <div id='iitBannerBG'>
          <img src='img/header_blk_red.gif' alt='IIT banner'>
        </div>
      </div>
      <div>
      <span id='menu' onclick='openNav()'>&#9776;</span>
       <span>
        <a>My Account</a>
        <a>Content Layer</a>
       </span>
      <span id ='userInfo'> 
        <p>Welcome: <?php echo $_POST['user_name']; ?></p>
        <p>You are Currently Signed in</p>
      </span>
    </div>
    <div id='content'
      <div id ='Welcome' class='pages'>
        <h1>Test</h1>
      </div>
       <div id ='Academics' class='pages'>
        <h1>Test2</h1>
      </div>
    </div>
  </body>
</html>