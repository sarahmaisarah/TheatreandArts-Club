<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Theatre and Arts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-white" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo1.jpeg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Theatre and Arts</b></h4>
    <p class="w3-text-white">Owned By Club TA</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
    <a href="#abouttheatreandarts" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT THEATRE AND ARTS</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a> 
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>
    <a href="#club collab" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CLUB COLLAB</a> 
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENT</a><a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->

  <header id="home">
    <a href="#"><img src="photo/logo2.jpeg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Theatre and Arts Club</b></h1>
    


    
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/logo2.jpeg" alt="Me" style="width:100%"></p>
    </div>
    
<!-- About Theathre and Arts -->
  <div class="w3-container w3-padding-large" style="margin-bottom:32px" id="abouttheatreandarts" >
    <h4><b>About Theatre and Arts Club</b></h4>
    <p>Theatre and the arts collectively represent a diverse spectrum of creative expressions that encompass various forms of human communication and self-expression. Theatre specifically involves live performances by actors on a stage, utilizing dialogue, music, and visual elements to convey stories and emotions. In the broader realm of the arts, encompassing visual, performing, and literary arts, creativity takes myriad forms—from painting, sculpture, and photography to dance, music, and literature. The arts serve as powerful vehicles for reflecting and shaping culture, challenging societal norms, and providing platforms for meaningful exploration and communication, contributing significantly to the richness of the human experience.</p>
    <hr>

<!-- Team Section -->
<div id="committee" class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM </h2>
<p>Meet The Team Of Theater and Arts Club:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/gambar1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Zahaifi Halmi</h3>
  <p>President</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Anis Mazlan</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar3.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Wafi Azman</h3>
  <p>Secretary</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar4.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aina Maisarah</h3>
  <p>Treasurer</p>
</div>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/gambar5.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nik Harith</h3>
  <p>Program Director</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar6.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rabiatul Adawiyah</h3>
  <p>Assistant Program Director</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar7.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmad Ishak</h3>
  <p>Technical Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar8.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Saleha Salleh</h3>
  <p>Classic Dance Manager</p>
</div>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/gambar9.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Fariz Hakim</h3>
  <p>Hip Hop Dance Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar10.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nik Fattah</h3>
  <p>Art Program Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar11.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Farah Athirah</h3>
  <p>Theater Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar12.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Iskandar Mahmud</h3>
  <p>Vice Theater</p>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photo/gambar19.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Batrisya Sabrina</h3>
  <p>Makeup Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar20.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nur Maisarah</h3>
  <p>Assistant Makeup</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar21.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aiman Hakim</h3>
  <p>Costume Manager</p>
</div>

<div class="w3-quarter">
  <img src="photo/gambar22.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Bella Yaati</h3>
  <p>Assistant Costume</p>
</div>


</div>
</div>
  <hr>
    
    <!-- Membership Section -->
    <h4><b>Theatre and Arts Membership</b></h4>
    
   <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  <!-- Membership Section -->
  <p id="membership" align="center"><h3>Membership form for UCIS</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

    <hr>
    
 <title>Activity Theaters and Arts</title>
</head>

<body>
 
  <!-- Activity Section -->
  <div id="activity" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for Theaters and Arts Club</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
  </div>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

<hr>

 <!-- Club Collaboration Section -->
   <div id="club collab" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
    ?>
  <p align="center"><h3>Club form for UiTMCK Club Information System  (UCIS)</h3></p>
    <a href="add_club.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
          <th scope="col">Action</th>
          \
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          
            <td>
              <a href="edit_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_club.php?club_id=<?php echo $row["club_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

   <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
<body>

<hr>
  <!-- Achievement Section -->
  <p id="achievement" align="center"><h3>Achievement of Theatre and Arts Club</h3></p>
<div class="w3-container w3-teal">
  <h1>2023 - 2024</h1>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar13.jpeg" style="width:100%">
      <div class="w3-container">
        <h5> Naib Johan Tarian Tradisional</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar14.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Johan Zumba</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar15.jpeg" style="width:100%">
      <div class="w3-container">
        <h5>Malam Muzikal</h5>
      </div>
    </div>
  </div>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar16.jpeg" style="width:100%">
      <div class="w3-container">
        <h5>Juara Program Seni Halus</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar17.jpg" style="width:100%">
      <div class="w3-container">
        <h5>Naib Johan Seni Khat</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="photo/gambar18.jpeg" style="width:100%">
      <div class="w3-container">
        <h5>Bengkel Seni dan Kraf</h5>
      </div>
    </div>
  </div>
</div>

</body>
<hr>

   <!-- Contact Section -->
   <div id="contact" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Contact Us for UiTMCK Club Information System (UCIS)</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
  
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Us</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>Uitmckta@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>UITMCK</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>019-9801680</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Faculty</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Phone</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>JOIN US NOW</button>
    </form>
  </div>

  
  <div class="w3-black w3-center w3-padding-24">CLUB THEATER AND ARTS<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">UITMCK</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
