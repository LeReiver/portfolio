<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 6/29/16
 * Time: 4:25 PM
 */
require_once ('head_files.php');
?>
<script>
// carousel slider function for homepage hero text
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("header_slider");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 1200);
}
</script>
