<?php
namespace Brain\Games\Cli;
require '/var/www/hexlet/vendor/autoload.php';

  use function cli\line;
  use function cli\prompt;

  line('Welcome to the Brain Game!');
  $name = prompt('May I have your name?');
  line("Hello, %s!", $name);