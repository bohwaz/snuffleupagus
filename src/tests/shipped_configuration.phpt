--TEST--
Shipped configuration
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/../../config/default.ini
--FILE--
<?php 
system("echo 0");
?>
--EXPECTF--
0
