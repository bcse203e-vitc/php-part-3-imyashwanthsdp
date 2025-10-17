<?php
$to = "receiver@example.com";
$from = "admin@example.com";
$subject = "Email with Attachment";
$message = "Hello,\n\nPlease find the attached file.\n\nRegards";
$file = "path/to/your/file.txt";

$content = file_get_contents($file);
$content = chunk_split(base64_encode($content));

$separator = md5(time());
$eol = PHP_EOL;

$headers = "From: $from" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;

$body = "--" . $separator . $eol;
$body .= "Content-Type: text/plain; charset=\"utf-8\"" . $eol;
$body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
$body .= $message . $eol;

$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment; filename=\"" . basename($file) . "\"" . $eol . $eol;
$body .= $content . $eol;
$body .= "--" . $separator . "--";

if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

