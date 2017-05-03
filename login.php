$fb = new Facebook\Facebook([
  'app_id' => '203484856776617', // Replace {app-id} with your app id
  'app_secret' => '24b818d4beb003376c1828a25c504bcc',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://skytamm123.github.io/skytamm/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
