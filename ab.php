<?php
include 'config.php';
//SESSION_DESTROY();
//echo $_SESSION['fb_access_token'];
if(isset($_SESSION['fb_access_token'])){
  $token = $_SESSION['fb_access_token'];
  try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name', $token);
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }

  $user = $response->getGraphUser();

  // echo 'Name: ' . $user['name'];
  // OR
  // echo 'Name: ' . $user->getName();
  echo '<a href="?logout">logout</a>';
}else{
  $helper = $fb->getRedirectLoginHelper();

  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://localhost/home/fb/fb-callback.php', $permissions);

  echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in</a>';
}

if(isset($_GET['logout'])){
  unset($_SESSION['fb_access_token']);
  header('location: ./');
  exit;
}

 ?>
