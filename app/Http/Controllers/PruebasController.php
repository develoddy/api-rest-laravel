<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PruebasController extends Controller
{
    public function index() {
        $titulo = 'Animales';
        $animales = ['Perro', 'Gato', 'Tigre'];
        return view('pruebas.index', [
            'titulo' => $titulo,
            'animales' => $animales
        ]);
    }

    public function testOrm() {
        /*$posts = Post::all();
        foreach ($posts as $post) {
            echo "<h1>".$post->title."</h1>";
            echo "<span style='color:gray' > {$post->user->name} - {$post->category->name}  </span>";
            echo "<p>".$post->content."</p>";
            echo "<hr/>";
        }*/

        $categories = Category::all();
        foreach ($categories as $category) {
            echo "<h1> {$category->name} </h1>";

            foreach ($category->posts as $post) {
                echo "<h1>".$post->title."</h1>";
                echo "<span style='color:gray' > {$post->user->name} - {$post->category->name}  </span>";
                echo "<p>".$post->content."</p>";
            }
            echo "<hr/>";
        }

        // Sirve para que no pida ninguna vista.
        die();

    }
}
