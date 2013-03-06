<?php

class Connect_Controller extends OneAuth\Auth\Controller {

public function action_error($provider = null, $e = '') {
        dd($e);
}
	
}