<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
if ( $_POST['payload'] ) {
  shell_exec( 'cd /home/sites/blog.udelta.ru/public_html && git reset --hard HEAD && git pull' );
}
?>hi