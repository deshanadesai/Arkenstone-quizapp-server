<?php
/**
*	This file UserResponse.php contains the UserResponse Class which is the ORM for table 'Response'
*	@author Prateek Chandan <prateekchandan5545@gmail.com>
*/

/**
* The UserResponse Class is the ORM for table 'Response'
*/

class UserResponse extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Response';
	protected $hidden = array('created_at' , 'quiz' , 'keystate');

}
