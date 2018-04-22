<?php

namespace Bulckens\CliTools;

abstract class System {

  // Detect OS
  public static function os() {
    if ( exec( 'sw_ver' )) {
      return 'macOS';
    } elseif ( exec( 'lscpu' )) {
      return 'linux';
    } else {
      return 'other';
    }
  }

}
