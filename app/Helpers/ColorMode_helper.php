<?php

function check_color_mode() {
    return $_COOKIE['color_mode'] ?? 'light_mode';
}

function set_color_mode($color_mode) {
    setcookie('color_mode', $color_mode, time() + 60*60*24*30, '/'. '', false, true);
}