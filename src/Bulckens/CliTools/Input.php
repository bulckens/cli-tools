<?php

namespace Bulckens\CliTools;

abstract class Input {

  // Boolean user input needed
  public static function yesOrNo( $question ) {
    // Ask a question
    Output::message( "\033[35m$question [Y/n]" );

    // Get the answer
    $answer = self::get();
    
    // Return boolean
    return in_array( $answer, [ '', 'y', 'yes' ]);
  }


  // Boolean user input needed
  public static function noOrYes( $question ) {
    // Ask a question
    Output::message( "\033[35m$question [y/N]" );

    // Get the answer
    $answer = self::get();
    
    // Return boolean
    return in_array( $answer, [ '', 'n', 'no' ]);
  }


  // String input value from user
  public static function answer( $question ) {
    // Ask a question
    Output::message( "\033[35m$question", false );

    // Get the answer
    return self::get();
  }


  // Fetches the answer
  private static function get() {
    return trim( fgets( STDIN ));
  }

}