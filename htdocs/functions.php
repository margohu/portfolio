<?php
function getCurrentYear() {
return date('Y');
}
add_shortcode('CurrentYear', 'getCurrentYear');
?>
