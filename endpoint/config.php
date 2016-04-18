<?php
  
  unset($config);
  $config = new stdClass();
  $config->password_file = '../private/password.txt';
  $config->updated_file = '../private/last_updated.txt';
  $config->timespan = '-2 minutes';
  $config->timezone = "Europe/London";
