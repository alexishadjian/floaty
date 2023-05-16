<?php 

namespace Utils;

class Front {

    /**
    * Get a date
    *
    * @param string $date The content to be transformed
    * @return string
    */

    public static function getDate( $date ) {
        $date = explode(' ', $date);
        $date = $date[0];
        $date = str_replace( '-', '/', $date );
        return $date;
    }

    /**
    * Get an excerpt
    *
    * @param string $content The content to be transformed
    * @param int    $length  The number of words
    * @param string $more    The text to be displayed at the end, if shortened
    * @return string
    */

    public static function getExcerpt( $content, $length = 40, $more = '...' ) {
        $excerpt = strip_tags( trim( $content ) );
        $words = str_word_count( $excerpt, 2 );
        if ( count( $words ) > $length ) {
            $words = array_slice( $words, 0, $length, true );
            end( $words );
            $position = key( $words ) + strlen( current( $words ) );
            $excerpt = substr( $excerpt, 0, $position ) . $more;
        }
        return $excerpt;
    }

}