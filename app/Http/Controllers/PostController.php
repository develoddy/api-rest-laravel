<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Storage;
use DB;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth.api', [
            'except' => [
                'index', 
                'show', 
                'getImage',
                'getPostsbyCategory',
                'getPostsByUser'
            ]
        ]);
    }

    /**
     * RECUPERAR TODO LOS POSTS Y CATEGORIAS
     */
    public function index( Request $request) {
        try {
            $posts = Post::all()->load('category'); 
            if ( !is_object( $posts ) ) {
                return response()->json([
                    'status'     => false,
                    'message'    => 'Posts Failure'
                ], 401);
            }
            return response()->json([
                'status'     => true,
                'message'    => 'Categories Successfully',
                'posts' => $posts
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }        
    }

    /**
     * RECUPERAR UN POST ESPECEFICO Y CATEGORIA
     */
    public function show( $id )  {

        $post = Post::find( $id )->load('category'); ;

        if ( is_object( $id ) ) {
            return response()->json([
                'status'     => false,
                'message'    => 'Post Failure'
            ], 401);
        }
        
        return response()->json([
            'status'     => true,
            'message'    => 'Category Successfully',
            'post'   => $post
        ], 200);
    }

    /**
     * CREAR UN NUEVO POST
     */
    public function store( Request $request ) {

        $auth = new AuthController();

        try {
            // VALIDAR TOKEN
            $token       = $request->bearerToken();
            $accesstoken = $auth->getUserByToken( $token);
            $user        = $accesstoken['user'];
            $user_id     = $user['user']['id'];

            $validatePost = Validator::make( 
                $request->all(), [
                    'title'       => 'required' ,
                    'content'     => 'required' ,
                    'category_id' => 'required'
                ]);
    
            if ( $validatePost->fails() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha enviado ningun post, faltan datos',
                    'errors'  => $validatePost->errors()
                ], 401);
            }

            // GUARDAR POST EN LA DB
            $post = new Post();
            $post->user_id      = $user_id                  ;
            $post->category_id  = $request['category_id']   ;
            $post->title        = $request['title']         ;
            $post->content      = $request['content']       ;
            $post->image        = "";

            if ( !$post->save() ) {
                return response()->json([
                    'status'  => false,
                    'message' => '¡Ups Algo salio mal!, no se ha guardado el post',
                    'errors'  => $validateUser->errors()
                ], 401);
            }

            return response()->json([
                'status'    => true,
                'message'   => 'Post Successfully',
                'post'      => $post
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * MODIFICAR UN POST
     */
    public function update($id, Request $request) {
        
        try {
            // VALIDAR DATOS
            $validatePost = Validator::make( $request->all(), [
                'category_id' => 'required' ,
                'title'       => 'required' ,
                'content'     => 'required' 
            ]);

            if ( $validatePost->fails() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha enviado ninguna publicación',
                    'errors'  => $validatePost->errors()
                ], 401);
            }

            // CONSEGUIR USUARIO IDENTIFICADO
            $user = $this->getIdentity($request);

            $post = Post::where('id', '=', $id)
                        ->where('user_id', '=', $user['id'])
                        ->update(
                            array(
                                'category_id' => $request['category_id'],
                                'title'       => $request['title'],
                                'content'     => $request['content']
                            )
                        );
            if ( !empty( $post ) ) {
                
                $post = Post::find( $id ); 

                // DEVOLVER ALGO
                return response()->json([
                    'status'    => true,
                    'message'   => 'Post update Successfully',
                    'post'      => $post,
                    'changed'   => $request->all()
                ], 200);
            }

            return response()->json([
                'status'  => false,
                'message' => 'El post no existe'
            ], 401);

        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * BORRAR UN POST
     */
    public function destroy( $id, Request $request ) {
        try {
            $user = $this->getIdentity( $request );

            // CONSEGUIR EL REGISTRO
            $post = Post::where('id', $id)
                        ->where('user_id', $user['id'])
                        ->first();

            if ( !empty($post) ) {
                // BORRARLO
                $post->delete();

                return response()->json([
                    'status'    => true,
                    'message'   => 'Post delete Successfully',
                    'post'      => $post
                ], 200);
            }
            
            return response()->json([
                'status'  => false,
                'message' => 'El post no existe'
            ], 401);

        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
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

    /**
     * SUBIR UNA IMAGEN AL SERVIDOR
     */
    public function upload(Request $request) {

        try {
            $validator = Validator::make( 
                $request->all(), [
                    'file0' => 'required|mimes:png,jpg,jpeg|max:2048'
            ]);

            // VALIDAR IMAGEN
            if( !$request->hasFile('file0') || $validator->fails() ) {

                $data = array(
                    'code'    => 400,
                    'status'  => 'error',
                    'message' => 'Error al subir imagen'
                );

            } else {
                // GUARDAR LA IMAGEN
                $file = $request->file('file0');
                $filename = time().$file->getClientOriginalName();
                Storage::disk('images')
                        ->put(
                            $filename, 
                            \File::get($file)
                        );

                $data = array(
                    'code'   => 200,
                    'image'  => $filename,
                    'status' => 'success'
                );
            }

            // DEVOLVER DATOS
            return response()->json(
                $data, 
                $data['code']
            );

        } catch (\Throwable $th) {
            
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * RECUPERAR UNA IMAGEN SEL SERVIDOR
     */
    public function getImage( $filename ) {

        try {
            $isset = Storage::disk('images')->exists( $filename );

            if ( $isset ) {

                // CONSEGUIR LA IMAGEN
                $file = Storage::disk('images')->get( $filename );

                // DEVOLVER LA IMAGEN
                return new Response( $file, 200);

            } else {
                $data = [
                    'code' => 404,
                    'status' => false,
                    'message' => 'La imagen no existe'
                ];
            }

            return response()->json($data, $data['code']);

        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);

        }
    }

    /**
     * CONSEGUIR LOS POSTS POR EL ID DE CATEGORIA
     */
    public function getPostsbyCategory( $id ) {
        try {
            $posts = Post::where('category_id', '=' ,$id)->get();
            return response()->json([
                'status' => true,
                'posts' => $posts
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * CONSEGUIR LOS POSTS POR EL ID DE USUARIO
     */
    public function getPostsByUser( $id ) {
        try {
            $posts = Post::where('user_id', '=' ,$id)->get();
            return response()->json([
                'status' => true,
                'posts' => $posts
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
