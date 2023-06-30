<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> <?php echo "Welcome " . $_SESSION['username'] . ""; ?></title>
    <link rel="stylesheet" href="dashes.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Rangga</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
     
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     
     <li>
       <a href="/contact">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Contact Us</span>
       </a>
       <span class="tooltip">Contact Us</span>
     </li>
     <li>
       <a href="editor.php">
         <i class='bx bx-edit' ></i>
         <span class="links_name">Editor</span>
       </a>
       <span class="tooltip">Editor</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
    

     <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">profile</span>
       </a>
       <span class="tooltip">profile</span>
     </li>
     <a href="logout.php">
     <li class="profile">
         <div class="profile-details">
           <img src="profile.png" alt="profileImg">
           <div class="name_job">
             <div class="name"> <?php echo "" . $_SESSION['username'] . ""; ?></div>
             <div class="job">log out</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </a>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
  </section>

  <script src="dashes.js"></script>

</body>
</html>
