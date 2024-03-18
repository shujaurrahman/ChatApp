<?php 
  session_start();
  include_once "../assets/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../index.php");
  }
?>
<?php include_once "header.php"; ?>
<body>

  <div class="wrapper">
  <div class="error-text">
            <?php  
          // $admin=$_SESSION['unique_id'];
          
          //  require "../userimages/profileImagefetch.php";
          //                   echo $profilepic;     
          // '<img src= "../assets/images/'.$row['img'].'"alt="">'
          echo $msg;
          
          ?>
          </div>
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>            
          <img src="../assets/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    var errorText = document.querySelector('.error-text');

    <?php
      if(isset($_SESSION['msg']) && isset($_SESSION['msg_display_time']) && $_SESSION['msg_display_time'] > time()) {
        echo 'errorText.innerHTML = "'.addslashes($_SESSION['msg']).'";
              errorText.style.display = "block";
              setTimeout(function() {
                errorText.style.display = "none";
              }, 5000);';
        unset($_SESSION['msg']);
        unset($_SESSION['msg_display_time']);
      }
    ?>
  });
</script>

  <script src="javascript/users.js"></script>

</body>
</html>
