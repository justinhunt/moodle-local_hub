<?php

    require('../../../../config.php');
    require_once('../toplib.php');

    $strings = array('downloadintro',
                     'downloadcoretitle',
                     'downloadcore',
                     'http://download.moodle.org/|downloadcoretitle',
                     'downloadviagitcvs',
                     'downloadlangtitle',
                     'downloadlang',
                     'http://download.moodle.org/langpack/|downloadlangtitle');

    print_moodle_page('downloads', $strings);
