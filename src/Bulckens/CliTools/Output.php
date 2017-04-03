<?php

namespace Bulckens\CliTools;

abstract class Output {

  // Output a message (black)
  public static function message( $message ) {
    echo Style::end( $message, true );
  }

  // Just FYI (light grey)
  public static function hey( $message ) {
    self::message( Style::grey( $message ) );
  }

  // Happy notification (green)
  public static function good( $message ) {
    self::message( Style::green( $message ) );
  }

  // Notify but leave it at that (yellow)
  public static function meh( $message ) {
    self::message( Style::yellow( $message ) );
  }

  // Something is going wrong (red); always exits
  public static function bad( $message, $exit = true ) {
    self::message( Style::red( $message ) );
    if ( $exit ) exit;
  }
  
}