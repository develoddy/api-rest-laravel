<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\AccessToken;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        try {

            $validateUser = Validator::make( $request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ( $validateUser->fails() ) {
                return response()->json([
                    'status' => false,
                    'message' => 'El usuario no se ha podido identificar',
                    'errors' => $validateUser->errors()
                ], 401);
            } else {
                // COMPROBAR SI EL USUARIO ESTÁ LOGUEADO Y TIENE TOKEN
                if ( !empty( $request['gettoken'] ) ) {
                    $user = User::where('email', $request->email)->first();
                    $accessToken = AccessToken::where('user_id', $user->id)->first();

                    if ( !$accessToken ) {
                        $data = array(
                            'status' => false,
                            'code' => 401,
                            'message' => 'El usuario no está identificado'
                        );
                    } else {
                        $data = array(
                            'status' => true,
                            'code' => 200,
                            'message' => 'El usuario está identificado',
                            'user' => $user
                        );
                    }
        
                    return response()->json($data, $data['code']);

                } else {
                    // SE FILTRA USER SIN PARAM GETTOKEN
                    $user = User::where('email', $request->email)->first();
                }
            }

            if ( !$user ) {
                return response()->json([ 'message' => 'Invalid credential' ]);
            }

            $check = Hash::check($request->password, $user->password);
            if ( !$check ) {
                return response()->json([ 'message' => 'Invalid credential' ]);
            }
            
            $accessToken = AccessToken::updateOrCreate(
                [ 'user_id' => $user->id ],
                [ 'access_token' => Str::random(255) ]
            );

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'access_token' => $accessToken->access_token
            ], 200);

        } catch (\Throwable $th) {
            throw $th;
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $accessToken = AccessToken::where('access_token', $request->access_token)->first();
            if ( $accessToken ) {
                $accessToken->delete();
                return response()->json([ 'success' => true ]);
            }
            
            return response()->json([ 'success' => false ]); 
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function verifyToken( $token, $id ) 
    {
        try {
            $accessToken = AccessToken::where([
                ['access_token', $token],
                ['user_id', $id]
            ])->first();

            if ( $accessToken ) {

                $user = User::find( $id );
                
                if ( is_object( $user ) ) {
                    return array(
                        'status' => true,
                        'message' => 'User Successfully',
                        'user' => $user
                    );
                } else {
                    return array(
                        'status'     => false,
                        'message'    => 'User Failure'
                    );
                }

            } else {
                return array(
                    'status'     => false,
                    'message'    => 'User Failure'
                );
            }
        } catch (\Throwable $th) {
            return array(
                'status'     => false,
                'message'    => $th->getMessage()
            );
        }
    }

    public function getUserByToken($token) 
    {
        try {
            $accessToken = AccessToken::where([
                ['access_token', $token]
            ])->first();

            if ( $accessToken ) {
                $user_id = $accessToken[ 
                    'user_id' 
                ];

                $user = $this->verifyToken(
                    $token, 
                    $user_id
                );
                
                return array(
                    'status' => true,
                    'message' => 'User Successfully',
                    'user' => $user
                );
            } else {
                return array(
                    'status'     => false,
                    'message'    => 'User Failure'
                );
            }
        } catch (\Throwable $th) {
            return array(
                'status'     => false,
                'message'    => $th->getMessage()
            );
        }
    }
}
