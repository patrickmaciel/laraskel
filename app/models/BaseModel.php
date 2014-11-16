<?php

class BaseModel extends Eloquent
{

  /* ----------------------------------------------------------------------------
  | Scopes
  | -----------------------------------------------------------------------------
  */

  /**
   * Active items
   * @param  Eloquent $query
   * @return Eloquent
   */
  public function scopeActive($query)
  {
    return $query->where('active', 1);
  }
}
