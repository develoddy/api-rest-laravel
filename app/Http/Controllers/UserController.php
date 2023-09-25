<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\AccessToken;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Http\Controllers\AuthController;

class UserController extends Controller
{
    /**
     * Devuelve todos los usuarios 
     * @param
     * @return JSON User
     */
    public function index() {
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Registrar usuario
     * @param $request
     */
    public function register( Request $request ) {

        //echo "User.Register.php";
        //dd($request);die();
        
        // Recoger los datos del usuario por post
        $validator = Validator::make( $request->all(), [
            'name'      => 'required',
            'surname'   => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',
        ]);

        // Validar datos
        if ( $validator->fails() ) {

            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'El usuario no se ha creado correctamente!',
                'errors' => $validator->errors()
            );

        } else {

            $pwd = Hash::make($request->password);

            $params = $request->all();
            $user = new User();
            $user->name         = $params["name"];
            $user->surname      = $params["surname"];
            $user->email        = $params["email"];
            $user->password     = $pwd;
            $user->role         = 'ROLE_USER';
            $user->description  = 'null';
            $user->image        = 'null';

            // Guardar el usuario
            $user->save();
        
            // crear usuario
            $data = array(
                'status' => 'success',
                'code' => 200,
                'message' => 'El usuario se ha creado correctamente!',
                'user' => $user
            );
        }

        return response()->json($data, $data['code']);
    }

    /**
     * subida de imagen
     * @param Request
     */
    public function upload( Request $request ) {
        
        // Validacion de imagen
        $validator = Validator::make( $request->all(), [
            'file0' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if( !$request->hasFile('file0') || $validator->fails() ) {

            $data = array(
                'code' => 400,
                'status' => 'error',
                'message' => 'Error al subir imagen'
            );

        } else {

            $file = $request->file('file0');
            $filename = time().$file->getClientOriginalName();
            Storage::disk('users')
                    ->put(
                        $filename, 
                        \File::get($file)
                    );
            //$file->storeAs('public/images',$filename);
            // Guardar imagen en DB
            /**$image_save = new User();
            $image_save->name = $filename;
            $image_save->save();*/
            
            $data = array(
                'code' => 200,
                'image' => $filename,
                'status' => 'success'
            );
        }
        
        return response()->json($data, $data['code']);
    }


    /**
     * Obtener imagen
     * @param $filename
     */
    function getImage($filename) {

        $isset = Storage::disk('users')->exists($filename);

        if ( $isset ) {

            $file = Storage::disk('users')->get($filename);
            //return new Response($file, 200);
            return Response::make( $file, 200 );

        } else {

            $data = array(
                'code' => 400,
                'status' => 'error',
                'message' => 'La imagen no existe'
            );

        }

        return response()->json( $data, $data['code'] );
    }

    /**
     * Obtener datos de un usuario en concreto
     * @param Request $request
     * @param $id
     */
    function getUser( $id, Request $request ) {

        $auth = new AuthController();
        
        try {
            $token = $request->bearerToken();
            $accessToken = $auth->verifyToken( $token, $id );

            if ( !$accessToken["status"] ) {
                return response()->json([ 
                    'message' => 'Usuario no autorizadoo' 
                ], Response::HTTP_UNAUTHORIZED ); 
            } 
                
            $data = array(
                'code' => 200,
                'status' => 'success',
                'user' => $accessToken["user"]
            );
            return response()->json( $data, $data['code'] );    
            
        } catch ( \Throwable $th ) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    function update(Request $request) {
        // COMPROBAR SI EL USUARIO ESTÁ IDENTIFICADO
        $auth = new AuthController();

        try {
            

            $validateUser = Validator::make( $request->all(), [
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
            ]);

            if ( $validateUser->fails() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha enviado ninguna usuario',
                    'errors'  => $validateUser->errors()
                ], 401);
            }

            // CONSEGUIR USUARIO IDENTIFICADO
            $user = $this->getIdentity($request);

            $userUpdate = user::where('id', '=', $user['id'])
                        ->update(
                            array(
                                'name' => $request['name'],
                                'surname' => $request['surname'],
                                'email' => $request['email']
                            )
                        );

            if ( !empty( $userUpdate ) ) {
    
                $user = User::find( $user['id'] ); 

                // DEVOLVER ALGO
                return response()->json([
                    'status'    => true,
                    'message'   => 'Post update Successfully',
                    'post'      => $user,
                    'changed'   => $request->all()
                ], 200);
            }

            return response()->json([
                'status'  => false,
                'message' => 'El usuario no existe'
            ], 401);


        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }

    public function getIdentity( $request ) {
        $auth = new AuthController();
        $token = $request->bearerToken();
        $user = $auth->getUserByToken( $token)['user']['user'];

        return $user;

    }
}
