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

function create_post_type() {
    register_post_type( 'page',
        array(
            'labels' => array(
                'name' => __( 'Test' ),
                'singular_name' => __( 'Test' )
            ),
            'public' => true,
            'has_archive' => true,


        )
    );

}
add_action( 'init', 'create_post_type' );







