<?php
function dd($var) {
  echo '
    <script>
    console.log(' . $var . ');
    </script>
  ';
}
?>


