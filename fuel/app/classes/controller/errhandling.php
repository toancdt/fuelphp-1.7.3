<?php
class Controller_ErrHandling extends Controller {
    public function action_index() {
        try {
            if(!View::forge("abcde"))
            throw new HttpNotFoundException;
            }
        catch (HttpNotFoundException $var404) {
            echo var_dump($var404);
        }
    }
        
    public function action_throw500() {
        try {
            if(!View::forge("abcde"))
                throw new HttpServerErrorException;
        }
        catch (HttpServerErrorException $var500) {
            echo $var500;
        }
    }
}