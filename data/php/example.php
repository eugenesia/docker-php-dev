<p>Hello world!<p/>

<p>This is PHP version <?php print phpversion(); ?>
  on port <?php print $_SERVER['SERVER_PORT']; ?></p>

<?php
  // Connect to MySQL server on container "mysql" (defined as service name in
  // docker-compose.yml). Credentials are configured in docker-compose.yml.
  $db_host = 'mysql';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'php';
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  // Create a table and show it.
  $result = $conn->query('CREATE TABLE IF NOT EXISTS tbl1');
  $result = $conn->query('SHOW TABLES');

  if (! $result) {
    print 'MySQL query failed.';
  }
  else {
    print_r($result->fetch_assoc());
  }

