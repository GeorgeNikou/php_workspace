<?php
    $json = json_decode(file_get_contents("php://input"), true);
    $branch = $json['push']['changes'][0]['new']['name'];
    switch ($branch) {
        case 'dev':
            $command = "cd /var/www/html/dev && git fetch --all && git reset --hard origin/dev";
            break;
        case 'master':
            $command = "cd /var/www/html/prod && git fetch --all && git reset --hard origin/master";
            break;
        default:
            $command = "echo Error.";
            break;
    }

    $output = shell_exec($command . " 2>&1");
    echo $output;
