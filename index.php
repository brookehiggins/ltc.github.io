<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: New Member'
    $to = 'brooke@cantforget.me'
    $subject = 'Hello'

    $body = "From: $name\n E-mail: $email\n Message:\n $message"
?>
<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Oops, something went wrong! Please go back and try again.</p>';
    }
}
?>