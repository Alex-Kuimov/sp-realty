<?php
define( 'TEMP_DIR', get_template_directory() );

require TEMP_DIR . '/app/patterns/class-singleton.php';
require TEMP_DIR . '/app/class-main.php';

site\Main::instance()->init();
