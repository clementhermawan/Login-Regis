<?php

session_start();
session_destroy();

?>
<script type="text/javascript">
    alert("Selamat, Anda berhasil logout");
    window.location.replace("login.php");
</script>
