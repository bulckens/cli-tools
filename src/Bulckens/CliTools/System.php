<?php

namespace Bulckens\CliTools;

abstract class System {

  // Detect OS
  public static function os() {
    if ( `which sw_ver` ) {
      return 'macOS';
    } elseif ( `which lscpu` ) {
      return 'linux';
    } else {
      return 'other';
    }
  }

}
