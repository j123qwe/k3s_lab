<?php
$podName = getenv('MY_POD_NAME');
$podIP = getenv('MY_POD_IP');
$nodeName = getenv('MY_NODE_NAME');
$nodeIP = getenv('MY_NODE_IP');

echo "Pod Name: $podName, Pod IP: $podIP, Node Name: $nodeName, Node IP: $nodeIP\n";
?>
