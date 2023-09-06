<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpMqtt\Client\MqttClient;

// MQTT broker configuration
$server   = '127.0.0.1';
$port     = 1883;
$clientId = 'my_php_client';

try {
    // Create an MQTT client
    $mqtt = new MqttClient($server, $port, $clientId);

    // Connect to the MQTT broker
    $mqtt->connect();

    // Publish a message to a topic
    $mqtt->publish('my/topic', 'Send Data!', 0);

    // Disconnect from the MQTT broker
    $mqtt->disconnect();
} catch (Exception $e) {
    // Handle exceptions
    echo 'Error: ' . $e->getMessage();
}
