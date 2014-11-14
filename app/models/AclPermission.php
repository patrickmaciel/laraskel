<?php

/**
 * Class AclPermission
 *
 * @author Patrick Maciel <patrickmaciel.info@gmail.com>
 */
class AclPermission extends BaseModel
{

  protected $table = 'acl_permissions';

  protected $fillable = ['ident', 'description'];

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
  public function groups()
  {
    return $this->belongsToMany('AclGroup', 'acl_group_permission', 'permission_id', 'group_id');
  }

  /**
   * @version 1.0
   * @since 1.0
   * @return mixed
   */
  public function getKey()
  {
    return $this->attributes['ident'];
  }

}
