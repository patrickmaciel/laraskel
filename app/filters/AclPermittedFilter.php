<?php

class AclPermittedFilter {

  public function filter($route, $params)
  {
    $permitted = false;

    $user = Auth::user();
    $user->load('groups', 'groups.permissions');

    foreach ($user->groups as $group) {
      if ($group->permissions->contains($route->getName())) {
        $permitted = true;
        break;
      }
    }

    if (!$permitted) {
      return Redirect::route('user.denied');
    }
  }

}
