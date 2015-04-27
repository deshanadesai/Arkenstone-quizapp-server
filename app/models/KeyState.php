<?php
/**
*	This file keyState.php contains the Keystate Class which is the ORM for table 'KeyStates'
*	@author Prateek Chandan <prateekchandan5545@gmail.com>
*/
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
* The KeyState Class is the ORM for table 'KeyStates'
*/
class keyState extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'KeyStates';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('created_at' , 'update_at');

}
