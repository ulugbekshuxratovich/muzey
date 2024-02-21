<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\v1\Auth\BaseController as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends BaseController
{

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('muzey.uz')->plainTextToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }


    public function destroy(Request $request)
    {

        // Revoke the token that was used to authenticate the current request...
        /** @var User $user */
        $user = $request->user();
        /** @var PersonalAccessToken $accessToken */

        $accessToken = $user->currentAccessToken();

        $accessToken->delete();


        return response(["message" => "Loggout is Succesfully"]);

    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('muzey')->plainTextToken;
            if (!empty($user->first_name)) {
                $success['name'] = $user->first_name;
            }

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }


    public function user(Request $request)
    {
        return $request->user();
    }


}
