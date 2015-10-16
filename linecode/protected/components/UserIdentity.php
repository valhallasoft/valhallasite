<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
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
		$users = User::model()->findByAttributes(array('us_user'=>$this->username,'ps_user'=>$this->password,'hak_id_hak'=>2));
		if($users == null )
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users->ps_user!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
                        $this->_id = $users->id_user ;
                        $this->setState('id', $users->id_user);
                        $this->setState('username', $users->us_user);
                        $this->setState('name', 'users');
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}