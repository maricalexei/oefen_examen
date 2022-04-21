<?php
    class Reserves extends Controller{
        public function __construct() {
            $this->itemModel = $this->model('reserve');
        }
    }