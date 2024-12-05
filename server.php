<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
// PHP WebSocket Server
// Save this as `server.php`
<?php
require_once 'vendor/autoload.php'; // Use Ratchet WebSocket library

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class ChatServer implements MessageComponentInterface {
    private $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $decodedMessage = base64_decode($msg); // Decrypt message
        foreach ($this->clients as $client) {
            if ($from !== $client) {
                $client->send($decodedMessage);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }
}

$server = \Ratchet\App::factory('localhost', 8080);
$server->route('/chat', new ChatServer, ['*']);
$server->run();
?>

    <div class="chat-container">
        <div class="chat-header">Secure Chat</div>
        <div id="chat-box" class="chat-box"></div>
        <form id="chat-form" class="chat-form">
            <input type="text" id="message" placeholder="Type a message..." required>
            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        const socket = new WebSocket('ws://localhost:8080');

        socket.onmessage = function(event) {
            const chatBox = document.getElementById('chat-box');
            const message = event.data;
            const messageElement = document.createElement('div');
            messageElement.className = 'message';
            messageElement.innerText = message;
            chatBox.appendChild(messageElement);
        };

        document.getElementById('chat-form').onsubmit = function(event) {
            event.preventDefault();
            const messageInput = document.getElementById('message');
            const encryptedMessage = btoa(messageInput.value); // Encrypt using Base64 for simplicity
            socket.send(encryptedMessage);
            messageInput.value = '';
        };
    </script>
</body>
</html>



