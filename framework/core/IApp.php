<?php

namespace zz\core;
interface IApp {
    public function init();
    public function analyzeRoute();
    public function run();
    public function shutdown();
    public function readConfig();

}