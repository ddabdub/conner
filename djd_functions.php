<?php

function send_email($email, $subject, $msg, $headers)
{
  return mail($email, $subject, $msg, $headers);
}
