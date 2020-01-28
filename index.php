<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JACOB - JTI Complaint and Compliment Box</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">

  <!--logo-->
  <link rel="shortcut icon" href="img/logo_box.png" />
</head>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <img src="img/logo_box.png" style="width: 100px;height : 100px">
            <br>
            <h1 class="mb-3">JACOB</h1>
            <p class="mb-5">JTI Complaint and Compliment Box. <br />
              Please enter your criticisms and suggestions below. <br />
            Convey in a polite manner.</p>
            <div class="input-group input-group-newsletter">
            <form method="post" action="index.php">
              <textarea name="komen" class="form-control" rows="6" cols="50" placeholder="Your text here..." aria-label="Your text here..." aria-describedby="basic-addon"></textarea>
            </div>
            <br>
            
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" value="Submit" name="submit">Submit</button>
              </div>
            </form>
            <?php
              if(isset($_POST['submit']))
              {
                $params = array(
                  "saran" => $_POST['komen']
                );

                httpPost("http://ruangtunggu.id/jacob/index.php/Saran/saran",$params);

                alert("Saran Berhasil Dikirim");
              } 

              function httpPost($url,$params)
              {
                $postData = '';
                //create name value pairs seperated by &
                foreach($params as $k => $v) 
                { 
                    $postData .= $k . '='.$v.'&'; 
                }
                $postData = rtrim($postData, '&');
              
                  $ch = curl_init();  
              
                  curl_setopt($ch,CURLOPT_URL,$url);
                  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                  curl_setopt($ch,CURLOPT_HEADER, false); 
                  // curl_setopt($ch, CURLOPT_POST, count($postData));
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
              
                  $output=curl_exec($ch);
              
                  curl_close($ch);
                  // return $output;
              }

              function alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
              
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <!-- <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-web"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li> -->
      <li class="list-unstyled-item">
        <a href="instagram.com/jtipolinema">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>

</html>
