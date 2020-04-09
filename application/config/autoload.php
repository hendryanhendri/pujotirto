<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('curl', 'session', 'form_validation');

$autoload['helper'] = array('url','form','file');

$autoload['config'] = array();
$autoload['language'] = array();

$autoload['model'] = array('Secure_access');
