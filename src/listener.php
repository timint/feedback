<?php

  if (!$feedback = json_decode(file_get_contents('php://'), true)) {
    http_response_code(400);
    die('Invalid JSON');
  }

// Do something with the feedback
  // ...

  echo 1;
