<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function __construct() {
        $this->middleware('auth.api', ['except' => ['index', 'show']]);
    }

    /**
     * Mostrar todas las categorias
     * @param Request $request
     */
    public function index( Request $request ) {

        $categories = Category::all();

        return response()->json([
            'status'     => true,
            'message'    => 'Categories Successfully',
            'categories' => $categories
        ], 200);
    }

    /**
     * Mostrar la category por id
     * @param $id
     */
    public function show( $id ) {
        $category = Category::find( $id );

        if ( !is_object( $category ) ) {
            return response()->json([
                'status'     => false,
                'message'    => 'Category Failure'
            ], 401);
        }

        return response()->json([
            'status'     => true,
            'message'    => 'Category Successfully',
            'category'   => $category
        ], 200);
    }


    /**
     * Guardar categoria
     * @param Request $request
     */
    public function store( Request $request ) {

        try {

            $validateCategory = Validator::make( $request->all(), [
                'name' => 'required',
            ]);
    
            if ( $validateCategory->fails() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha enviado ninguna categoria',
                    'errors'  => $validateCategory->errors()
                ], 401);
            }

            $category = new Category();
            $category->name = $request['name'];

            if ( !$category->save() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha guardado la categoria',
                    'errors'  => $validateUser->errors()
                ], 401);
            }

            return response()->json([
                'status'    => true,
                'message'   => 'Category Successfully',
                'category'  => $category
            ], 200);
            
        } catch ( \Throwable $th ) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Actualizar datos de la categoria
     * @param Request $request
     * @param $id
     */
    public function update( $id, Request $request ) {

        try {
            $validateCategory = Validator::make( $request->all(), [
                'name' => 'required',
            ]);

            if ( $validateCategory->fails() ) {
                return response()->json([
                    'status'  => false,
                    'message' => 'No se ha enviado ninguna categoria',
                    'errors'  => $validateCategory->errors()
                ], 401);
            }

            $category = Category::where('id', $id)->update([
                'name' => $request['name'] 
            ]);

            return response()->json([
                'status'    => true,
                'message'   => 'Category update Successfully',
                'category'  => $category
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
        
    }
}
