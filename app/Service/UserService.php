<?php


namespace App\Service;


use App\Models\User;
use Illuminate\Http\Request;

class UserService
{

    public function indexQuery(Request $request, User $user)
    {
        $perPage = null !== $request->query('per-page')
            ? $request->query('per-page')
            : $user->getPerPage();

        return $user->limit($perPage)->get([
            'id', 'name', 'email'
        ]);
    }
}
