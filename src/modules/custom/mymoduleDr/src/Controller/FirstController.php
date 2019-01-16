<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\MyModuleController.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class  FirstController extends  ControllerBase{
  public function content(){
    return array(
     'type'   =>  'markup',
      'markup'=> t( 'this is my menu costum page'),
    );
  }
}


//function rsvplist_schema() {
//  dump('here');
//
//// $schema = array();
//  $schema['rsvplist'] = array(
//    'description' => 'Stores email, timestamp, nid and uid for an rsvp',
//    'fields' => array(
//      'id' => array(
//        'description' => 'The primary identifier for the record.',
//        'type' => 'serial',
//        'unsigned' => TRUE,
//        'not null' => TRUE,
//      ),
//    ),
//    'primary key' => array('id'),
//    'indexes' => array(
//      'node' => array('nid'),
//      'node_user' => array('nid', 'uid'),
//    ),
//  );
//  return $schema;
//
//}
