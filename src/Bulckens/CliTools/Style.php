<?php

namespace Bulckens\CliTools;

abstract class Style {

  // Reset to plain
  public static function end( $output, $newline = false ) {
    $output = "$output\033[0m";

    if ( $newline )
      $output .= "\n";

    return $output;
  }

  public static function grey( $output ) {
    return "\033[90m$output";
  }

  public static function green( $output ) {
    return "\033[32m$output";
  }

  public static function yellow( $output ) {
    return "\033[33m$output";
  }

  public static function red( $output ) {
    return "\033[31m$output";
  }

  public static function purple( $output ) {
    return "\033[35m$output";
  }

  public static function colored( $type, $output ) {
    switch ( $type ) {
      case 'error':   $color = 'red';    break;
      case 'warning': $color = 'yellow'; break;
      case 'good':    $color = 'green';  break;
      case 'alert':   $color = 'purple'; break;
      default:        $color = 'grey';   break;
    }

    return self::$color( $output );
  }
  
}