<html>
<body>
    <h1>Jouw bericht is verstuurd!</h1>
</body>
</html>


<?php
    $to = $_POST['naar'];
    $from = 'From: 25179@ma-web.nl';
    $subject = $_POST['onderwerp'];
    $message = $_POST['bericht'];

    mail($to, $subject, $message, $from)
?>.p