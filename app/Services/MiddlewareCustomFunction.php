<?php

use App\Models\RolePermission;
use Illuminate\Support\Facades\Auth;

class MiddlewareCustomFunction
{
  public function checkPermission($permissionId)
  {


    return true;
  }
}
