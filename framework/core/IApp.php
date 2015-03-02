<?php

namespace zz\core;
interface IApp {
    public function init();
    public function run();
    public function shutdown();
    public function readConfig();

}