#!/usr/bin/env php
<?php

if (! isset($_SERVER['HOME'])) {
    $_SERVER['HOME'] = $_SERVER['USERPROFILE'];
}

require __DIR__.'/cli/valet.php';
