<?php
namespace App\Helpers;
use Firebase\JWT\JWT;
use Firebase\Suport\Facades\DB;
use App\Models\User;

class JwtAuth 
{
    public $key;

    public function __construct() {
        $this->key = 'esto_es_una_clave_super_secreta-201290';
    }

    public function signup( $email, $getToken = null ) {

        // Buscar si existe el usuario con sus credenciales
        $user = User::where([
            'email' => $email
            //'password' => $password,
        ])->first();

        //var_dump($user);die();
        

        // Comprobar si son correctas (objeto)
        $signup = false;
        if ( is_object($user)  ) {
            $signup = true;
        }

        // Generar el token con los datos del usuario identificado
        if ( $signup ) {
            $token = array(
                'sub' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'surname' => $user->surname,
                'iat' => time(),
                'exp' => time() + (7*24*60*60) // dentro de una semana, se caducaria
            );

            $jwt = JWT::encode($token, $this->key, 'HS256');
            //$decoded = JWT::decode($jwt, $this->key, ['HS256']);

            // Devolver los datos decodificados o el token, en funcion de un parametro
            if ( is_null( $getToken ) ) {
                $data = $jwt;
            } 
        } else {
            $data = array(
                'status' => 'error',
                'message' => 'Login incorrecto!'
            );
        }
        return $data;
    }
}