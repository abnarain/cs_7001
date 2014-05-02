<?php
// multiple recipients
$to  = 'abhinavnarain10@gmail.com' . ', '; // note the comma
$to .= 'abhinavnarain10.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: abhinav <abhinavnarain10@gmail.com>' . "\r\n";
#$headers .= 'From: Birthday Reminder <gnroses.inflames@gmail.com>' . "\r\n";
#$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
#$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

echo("done with mail ") ; 
?>
