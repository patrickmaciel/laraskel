<?php

/**
 * Class AclGroup
 *
 * @author Patrick Maciel <patrickmaciel.info@gmail.com>
 */
class AclGroup extends BaseModel
{

  protected $table = 'acl_groups';

  protected $fillable = ['name', 'description'];

//  public $timestamps = false;

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
  public function users()
  {
    return $this->belongsToMany('User', 'acl_user_groups', 'group_id', 'user_id');
  }

  /**
   * @version 1.0
   * @since 1.0
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function permissions()
  {
    return $this->belongsToMany('AclPermission', 'acl_group_permissions', 'group_id', 'permission_id');
  }

  /* ----------------------------------------------------------------------------
  | Custom queries
  | -----------------------------------------------------------------------------
  */

  /**
   * get a list of groups for html select
   * @param  integer $onlyActives only active groups?
   * @param  boolean $optional    key value with optional message?
   * @return mixed
   */
  public static function getList($onlyActives = 1, $optional = false)
  {
    $data = false;
    if ($onlyActives) {
      $data = static::active()->lists('name', 'id');
    } else {
      $data = static::lists('name', 'id');
    }

    if ($optional) {
      $data = ['' => 'Selecione'] + $data;
    }

    return $data;

  }

  /**
   * Get an group by id (show view)
   * @param  integer $id Group id
   * @return Eloquent
   */
  public static function getById($id)
  {
    return static::findOrFail($id);
  }

}
