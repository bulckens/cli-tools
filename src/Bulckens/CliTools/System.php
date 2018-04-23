<?php

namespace Bulckens\CliTools;

abstract class System {

  // Detect OS
  public static function os() {
    if ( exec( 'sw_ver > /dev/null  &' )) {
      return 'macOS';
    } elseif ( exec( 'lscpu > /dev/null  &' )) {
      return 'linux';
    } else {
      return 'other';
    }
  }

}
