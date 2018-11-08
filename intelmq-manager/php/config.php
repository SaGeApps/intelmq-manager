<?php

    $FILES = array(
        'bots' 		=> '/etc/intelmq/BOTS',
        'defaults' 	=> '/etc/intelmq/defaults.conf',
        'harmonization' => '/etc/intelmq/harmonization.conf',
        'pipeline' 	=> '/etc/intelmq/pipeline.conf',
        'runtime' 	=> '/etc/intelmq/runtime.conf',
        'positions' => '/var/www/html/intelmq-manager/debian/positions.conf'
    );
    if(!($c = getenv("INTELMQ_MANGER_CONTROLER_CMD"))) {
        $c = "/usr/bin/intelmqctl";
    }
    $CONTROLLER_JSON = $c." --type json %s";
    $CONTROLLER = $c." %s";

    $BOT_CONFIGS_REJECT_REGEX = '/[^[:print:]\n\r\t]/';
    $BOT_ID_REJECT_REGEX = '/[^A-Za-z0-9.-]/';
    $VERSION = "1.0.2.alpha1";

    $ALLOWED_PATH = "/opt/intelmq/var/lib/bots/"; // PHP is allowed to fetch the config files from the current location in order to display bot configurations.
    $FILESIZE_THRESHOLD = 2000; // config files under this size gets loaded automatically; otherwise a link is generated