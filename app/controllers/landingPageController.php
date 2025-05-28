<?php

require_once './iPSOF/ORM/db.php';
require_once './iPSOF/kernel.php';


class LandingPage extends db {

    public function __construct() {
        $this->env();

    }

    public function index() {
        $data['version'] = getenv('VERSION');
        $data['kernelFile'] = file_exists('./etc/kernel.php') ? true : false;
        $data['ORMDir'] = is_dir('./etc/ORM') ? true : false;
        $this->view('landingPage.php', $data);
    }


}

