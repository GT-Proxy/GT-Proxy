<?php

if (!is_dir('log')) {
    if (mkdir('log', true)) {
        die("Could not create log dir\n");
    }
}
$log = 'log/'.date('YmdHis').'.log';
file_put_contents($log, var_export($_POST, true));
echo 'Done';
