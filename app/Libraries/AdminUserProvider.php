<?php 

namespace App\Libraries;

use Illuminate\Auth\EloquentUserProvider;

class AdminUserProvider extends EloquentUserProvider
{
	public function retrieveByCredentials(array $credentials)
	{
		$user = parent::retrieveByCredentials($credentials);

		if($user === null || !$user->is_admin)
		{
			return null;
		}

		return $user;
	}
}