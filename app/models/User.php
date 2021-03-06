<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

  /* ----------------------------------------------------------------------------
  | Mutator
  | -----------------------------------------------------------------------------
  */

  /**
   * Active mutator
   * @param boolean $value
   */
  public function setActiveAttribute($value)
  {
    return $this->attributes['active'] = (empty($value) ? 0 : 1);
  }

	/*
	 |--------------------------------------------------------------------------
	 | Relationships
	 |--------------------------------------------------------------------------
	 */

	/**
	 * @version 1.0
	 * @since 1.0
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function groups()
	{
		return $this->belongsToMany('AclGroup', 'acl_user_groups', 'user_id', 'group_id');
	}

  /* ----------------------------------------------------------------------------
  | Custom queries
  | -----------------------------------------------------------------------------
  */

  /**
   * Get an user by id (show view)
   * @param  integer $id User id
   * @return Eloquent
   */
  public static function getById($id)
  {
    return static::with('groups')->findOrFail($id);
  }

}
