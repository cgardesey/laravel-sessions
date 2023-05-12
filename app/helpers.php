<?php
/**
 * Created by PhpStorm.
 * User: Cyril
 * Date: 3/19/2019
 * Time: 12:35 AM
 */
function flash($message) {
    session()->flash('message', $message);
}