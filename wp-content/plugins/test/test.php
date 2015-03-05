<?php

/*
Plugin Name: Testing
Plugin URI:
Description: A simple wordpress plugin template
Version: 1.0
Author: Paliy Roman
License: GPL2
*/
/*
Copyright 2014  Paliy Roman  (email : myzfann@mail.ru)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

require_once('InstallDb.php');
require_once('UnInstall.php');

     class Test {

         public function __construct(){
             add_action( 'init', array($this, 'create_post_type'));
             register_activation_hook(__FILE__, array($this, 'activate'));
             register_deactivation_hook(__FILE__, array($this, 'deactivate'));
         }

         public function create_post_type()
         {
             register_post_type('test',
                 array(
                     'labels' => array(
                         'name' => __('Test'),
                         'singular_name' => __('Test')
                     ),
                     'public' => true,
                     'has_archive' => true,
                 )
             );
         }

         public function activate(){
             $db_install = new InstallDb();
         }

         public function deactivate(){
             $db_uninstall = new UnInstall();
         }

     }




$my = new Test();











