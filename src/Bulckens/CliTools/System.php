<?php

namespace Bulckens\CliTools;

abstract class System {

  // Detect OS
  public static function os() {
    if ( exec( 'sw_ver', $output )) {
      return 'macOS';
    } elseif ( exec( 'lscpu', $output )) {
      return 'linux';
    } else {
      return 'other';
    }
  }

}
