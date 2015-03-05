<?php

    class UnInstall {
        function __construct(){
            $this->uninstall();
        }

        private function uninstall(){
            global $wpdb;
            $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}testing");
        }
    }