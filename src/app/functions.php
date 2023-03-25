<?php 
// Returns a URL to a path
// Adds a leading '/' if one has not been provided.
function get_public_url($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

function get_src_path($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/src' . $path;
}

// Returns the location on the server to a path
// Adds a leading '/' if one has not been provided.
function get_path($path = "/") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return PROJECT_ROOT . $path;
}

// redirects to A given URL via the get_url function
function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

// Return special characters as HTML entities
function h($str) {
    return htmlspecialchars($str);
}

// Returns a URL safe string
function u($string) {
    return urlencode($string);
}

// Checks if a value is blank 
function is_blank($var) {
    if(!isset($var) || "" === trim($var, " ") ) {
        return true;
    } 
    return false;
}

// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}