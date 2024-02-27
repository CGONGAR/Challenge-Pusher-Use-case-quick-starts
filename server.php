<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "a2174ecd73aba294c17f", // Replace with 'key' from dashboard
    "6dfd5fb6184381855dcb", // Replace with 'secret' from dashboard
    "1760143", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 0; $i < 100 ; $i++) {
    $pusher->trigger('barra', 'new-barras', array(
        array(
            rand(3000, 5000), rand(3000, 5000), rand(3000, 5000), rand(-3000, 5000), rand(3000, 5000), rand(3000, 5000), rand(-500, 5000), rand(3000, 5000), rand(-300, 5000), rand(3000, 5000)
        ),
        array(
            rand(1000, 1500), rand(-1000, 1500), rand(1000, 1500), rand(1000, 1500), rand(1000, 1500), rand(1000, 1500), rand(1000, 1500), rand(1000, 1500), rand(1000, 500), rand(1000, 1500)
        ),
        array(
            rand(300, 2500), rand(300, 4000), rand(300, -2500), rand(300, 1500), rand(300, 500), rand(300, 2500), rand(-300, 500), rand(-300, 500), rand(-300, -500), rand(300, -2500)
        )

    ));
    sleep(1);
}