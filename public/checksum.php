<?php

  require_once('../private/initialize.php');

  $message = '';
  $result_checksum = '';
  $checksum = '';
  $result_text = '';
  $checksum_algorithm = '';

  if(isset($_POST['submit'])) {

    if(!isset($_POST['checksum'])) {

      // This is a create checksum request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $checksum_algorithm = isset($_POST['checksum_algorithm']) ? $_POST['checksum_algorithm'] : 'crc32';
      $result_checksum = create_checksum($message, $checksum_algorithm);
      $checksum = $result_checksum;

    } else {

      // This is a verify checksum request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $checksum_algorithm = isset($_POST['checksum_algorithm']) ? $_POST['checksum_algorithm'] : 'crc32';
      $checksum = isset($_POST['checksum']) ? $_POST['checksum'] : nil;
      $result = verify_checksum($message, $checksum, $checksum_algorithm);
      $result_text = $result === 1 ? 'Valid' : 'Not valid';
    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Checksum: Create/Verify Checksum</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Checksum</h1>

    <div id="encoder">
      <h2>Create Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="checksum_algorithm">Algorithm</label>
          <select name="checksum_algorithm">
            <option value="crc32">crc32</option>
            <option value="md5">md5</option>
            <option value="sha1">sha1</option>
          </select>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="create">
        </div>
      </form>

      <div class="result"><?php echo h($result_checksum); ?></div>
      <div style="clear:both;"></div>
    </div>

    <hr />

    <div id="decoder">
      <h2>Verify Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="checksum_algorithm">Algorithm</label>
          <select name="checksum_algorithm">
            <option value="crc32">crc32</option>
            <option value="md5">md5</option>
            <option value="sha1">sha1</option>
          </select>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <label for="checksum">Checksum</label>
          <textarea name="checksum"><?php echo h($checksum); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Verify">
        </div>
      </form>

      <div class="result"><?php echo h($result_text); ?></div>
      <div style="clear:both;"></div>
    </div>

  </body>
</html>
