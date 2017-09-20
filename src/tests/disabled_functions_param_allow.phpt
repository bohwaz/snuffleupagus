--TEST--
Disable functions - allow
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_disabled_functions_param_allow.ini
--FILE--
<?php 
system("echo win");
system("id");
?>
--EXPECTF--
win
[snuffleupagus][0.0.0.0][disabled_function][drop] The call to the function 'system' in %a/tests/disabled_functions_param_allow.php:3 has been disabled.