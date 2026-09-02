<?php require_once __DIR__ . '/include/cms.php'; ?>
<?php
include 'db.php';
if(!isset($_SESSION['user_id'])){
    header("location: signin");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Swades Foundation dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-animation.css">
  <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./assets/css/login-custom.css">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png">
</head>
<body>
    
  <div class="header">
    <div class="container">
      <div class="logo">
        <img src="./assets/images/logo.svg" alt="Swades Foundation">
      </div>
      <div class="custom-tabs">
        <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Account</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Donation Details</button>
          </li>
        </ul>
      </div><!---custom-tabs-->
      <div class="actions">
        <span class="logout"><a href="Donate">Donate</a></span>
        
        <span class="logout"><img src="./assets/images/logout.svg" alt=""> <a href="logout">LOGOUT</a></span>
        <div class="profile">KW</div>
      </div>
    </div>
  </div>
  <!-- Header -->




  <div class="dashboard-werrap">
    <div class="container">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="account-content">
            <div class="heading2">
                
            <?php echo $_SESSION['user_id']; ?>
              <h2>Account Details</h2>
              <h5><img src="./assets/images/vector-edit.svg" alt=""> Edit Profile</h5>
            </div>
            <?php 
            $sql = "SELECT * FROM `signup` WHERE id=".$_SESSION['user_id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="account-grid">
              <div class="details-cnt">
                <h3>Personal Details</h3>
                <ul>
                  <li>Name</li>
                  <li><span><?php echo $row['name']; ?></span></li>

                  <li>Gender</li>
                  <li><span>male</span></li>

                  <li>Date of Birth</li>
                  <li><span>August 27th, 1999</span></li>

                  <li>Nationality</li>
                  <li><span>Indian</span></li>
                </ul>
              </div>

              <div class="details-cnt">
                <h3>Address</h3>
                <ul>
                  <li>Address Line</li>
                  <li><span>Nishuvi, 3rd floor</span></li>

                  <li>City</li>
                  <li><span>Raigad</span></li>

                  <li>State</li>
                  <li><span>Maharashtra</span></li>

                  <li>Country</li>
                  <li><span>India</span></li>
                </ul>
              </div>


              <div class="details-cnt">
                <h3>Contact Details</h3>
                <ul>
                  <li>Phone Number</li>
                  <li><span><a href="#">+91 9034345666</a></span></li>
                  <li>Email</li>
                  <li><span><a href="#"><?php echo $row['email']; ?></a></span></li>
                </ul>
              </div>


              <div class="details-cnt">
                <h3>Personal Details</h3>
                <ul>
                  <li>GST Number</li>
                  <li><span>GSTIN000000000</span></li>
                  <li>Pan card Number</li>
                  <li><span>QKBOS4390N</span></li>
                </ul>
              </div>




            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="account-content">
            <div class="heading2">
              <h2>Donation Details</h2>
            </div>

            <div class="table-custom">
              <div class="table-scroll">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Payment ID</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Payment Method</th>
                      <th>Donation Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status success"><i class="fas fa-check-circle"></i> Successful</span></td>
                      <td>₹ 4,000</td>
                      <td>UPI Payment</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>
                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status success"><i class="fas fa-check-circle"></i> Successful</span></td>
                      <td>₹ 25,000,00</td>
                      <td>Online Bank Transfer</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>

                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status declined"> <i class="fas fa-minus-circle"></i> Declined</span></td>
                      <td>₹ 5,000</td>
                      <td>Online Bank Transfer</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>

                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status pending"> <i class="fas fa-clock"></i> Pending</span></td>
                      <td>₹ 25,000,00</td>
                      <td>Debit Card</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>

                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status success"><i class="fas fa-check-circle"></i> Successful</span></td>
                      <td>₹ 4,000</td>
                      <td>Debit Card</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>

                    <tr>
                      <td>#ORD482693</td>
                      <td><span class="status declined"> <i class="fas fa-minus-circle"></i> Declined</span></td>
                      <td>₹ 5,000</td>
                      <td>Debit Card</td>
                      <td>2024-11-22, 08:53:20 AM</td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="pagination">
                <button type="button">← <span>Previous</span></button>
                <div class="page-numbers">
                  <ul class="pagination justify-content-center">
                    <li class="page-item "><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                  </ul>
                </div>
                <button type="button"><span>Next</span> →</button>
              </div>
            </div><!--table-custom-->
          </div>
        </div>

      </div>
    </div>
  </div><!---dashboard-werrap-->



  <footer class="footer">
    <div class="container">
      <div class="copyright">
        <p> © Copyright 2025 Swades Foundation</p>
        <ul class="terms">
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Terms & Condition</a></li>
          <li><a href="#">Cookies policy</a></li>
        </ul>
      </div>
    </div>



  </footer>


  <script src="./assets/js/jquery-3.6.3.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/login-custom.js"></script>


</body>

</html>
