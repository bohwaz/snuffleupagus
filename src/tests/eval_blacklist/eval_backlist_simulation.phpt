--TEST--
Eval blacklist simulation
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/eval_backlist_simulation.ini
--FILE--
<?php 
$a = strtoupper("1337 1337 1337");
echo "Outside of eval: $a\n";
eval('$a = strtoupper("1234");');
echo "After eval: $a\n";
?>
--EXPECTF--
Outside of eval: 1337 1337 1337

Warning: [snuffleupagus][0.0.0.0][eval][simulation] A call to 'strtoupper' was tried in eval. logging it. in %a/eval_backlist_simulation.php(4) : eval()'d code on line 1
After eval: 1234
