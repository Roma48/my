<?php

class InstallDb {
    private $curr_ver = 1.5;
    private $prev_ver = 1.0;
    public function __construct(){
       $this->_installTables();
       if(get_option('exammatrix_db_version') == $this->prev_ver){
           $this->_upgradeTabels();
       }
       update_option( "exammatrix_db_version", $this->curr_ver );
       update_option("exammatrix_donation_camp",'N');
   }
   private function _installTables(){
       global $wpdb, $table_prefix;
       $sql = array(
                'testing_questions' =>'CREATE TABLE IF NOT EXISTS `'.$table_prefix.'testing` (
                            `questionID` int(30) NOT NULL,
                            `question` varchar(255) NOT NULL,
                            `completely` int(30) NOT NULL,
                            `mostly` int(30) NOT NULL,
                            `somewhat` int(30) NOT NULL,
                            `little` int(30) NOT NULL,
                            `not_all` int(30) NOT NULL,
                            PRIMARY KEY (`questionID`)
                          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;'
           );
       require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
       foreach($sql as $key=>$query){
           dbDelta( $query );
       }
   }
   function _upgradeTabels(){
       global $wpdb, $table_prefix;
       $up_sql = 'ALTER TABLE `'.$table_prefix.'ex_questions` ADD `multi` varchar(255) NOT NULL DEFAULT "N" after `answer`';
       require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
       $wpdb->query( $up_sql );
   }
}
