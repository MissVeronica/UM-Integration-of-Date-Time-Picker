<?php
add_filter( 'um_extend_field_classes', 'um_datepicker_replace_classes', 10, 3 );

function um_datepicker_replace_classes( $classes, $key, $data ) {

    $classes = str_replace( array( 'um-datepicker ', 'um-timepicker ' ), 
                            array( 'walcf7-datepicker ', 'walcf7-timepicker ' ), $classes );
    return $classes;
}
