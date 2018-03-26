<?php

namespace Bulckens\CliTools;

abstract class Output {

  // Output a message (default color)
  public static function message( $message ) {
    echo Style::end( $message, true );
  }

  // Just FYI (light grey)
  public static function hey( $message ) {
    self::message( Style::grey( $message ));
  }
  public static function info( $message ) { self::hey( $message ); }
  public static function grey( $message ) { self::hey( $message ); }


  // Happy notification (green)
  public static function good( $message ) {
    self::message( Style::green( $message ));
  }
  public static function green( $message ) { self::good( $message ); }


  // Flashy notification (green)
  public static function flash( $message ) {
    self::message( Style::purple( $message ));
  }
  public static function purple( $message ) { self::flash( $message ); }


  // Notify but leave it at that (yellow)
  public static function meh( $message ) {
    self::message( Style::yellow( $message ));
  }
  public static function warn( $message ) { self::meh( $message ); }
  public static function yellow( $message ) { self::meh( $message ); }


  // Something is going wrong (red); always exits by default
  public static function bad( $message, $exit = true ) {
    self::message( Style::red( $message ));
    if ( $exit ) exit;
  }
  public static function error( $message, $exit = true ) { self::bad( $message ); }
  public static function red( $message, $exit = true ) { self::bad( $message ); }

}
