<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminIdentity extends CUserIdentity
{
        private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users = User::model()->findByAttributes(array('us_user'=>$this->username,'ps_user'=>$this->password,'hak_id_hak'=>1));
		if($users == null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users->ps_user!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
                        $this->_id = $users->id_user ;
                        $this->setState('id', $users->id_user);
                        $this->setState('username', $users->us_user);
                        $this->setState('name', 'admin');
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}