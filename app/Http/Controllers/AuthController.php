<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

use App\User;

use App\Http\Resources\User as UserResource;

use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Events\PasswordReset;

class AuthController extends Controller
{

    use SendsPasswordResetEmails;
    use ResetsPasswords;

    use SendsPasswordResetEmails, ResetsPasswords {
        SendsPasswordResetEmails::broker insteadof ResetsPasswords;
        ResetsPasswords::broker as broker2;
    }


    public function register(Request $request) {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required'           
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->brand()->associate($request->brand);
        $user->save();

        $http = new Client;
        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'ORGZMZz3VHk8LSvwUE9bCz6zbp5h7Awoun3Rhgqt',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);

        return response(['auth' => json_decode((string) $response->getBody(), true), 'user' =>  new UserResource($user)]);
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $http = new Client();

        $res = $http->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'ValidateLogin',
                'email' => $request->email,
                'password2' => $request->password,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);
        $res = json_decode($res->getBody()->getContents());

        if($res->result === 'error') {
            return response(['status' => 'error', 'message' => 'Email and password credentials did not match.']);
        }

        $res->email = $request->email;
        $user = User::where('email', $res->email)->first();

        if(!$user) {
            return response(['status' => 'error', 'message' => 'User not found']);
        } else {
            Cache::remember('user', 9000, function () use ($res, $user) {
                $user->whmcs_id = $res->userid;
                return $user;
            });
        }

//        if(Hash::check($request->password, $user->password)) {
        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'ORGZMZz3VHk8LSvwUE9bCz6zbp5h7Awoun3Rhgqt',
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);
        return response(['auth' => json_decode((string) $response->getBody(), true), 'user' => new UserResource($user)]);

//        } else {
//            return response(['status' => 'error', 'message' => 'Email and password credentials did not match.']);
//        }
    }

    public function logout($id)
    {
       User::findOrFail($id)->OauthAcessToken()->delete();
    }

    public function sendPasswordResetLink(Request $request)
    {
        return $this->sendResetLinkEmail($request);
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response()->json([
            'message' => 'Password reset email sent.',
            'data' => $response
        ]);
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Email could not be sent to this email address.']);
    }

    public function callResetPassword(Request $request)
    {
        return $this->reset($request);
    }

    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();
        event(new PasswordReset($user));

        $client = new Client();
        $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php',
            [
                'form_params' => [
                    'action' => 'updateclient',
                    'clientemail' => $user->email,
                    'password2' => $password,
                    'username' => 'api',
                    'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                    'responsetype' =>  'json'
                ]
            ]
        );
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Password reset successfully.']);
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response()->json(['message' => 'Failed, Invalid Token.']);
    }

}
