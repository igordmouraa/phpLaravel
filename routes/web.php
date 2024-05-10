<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);

// Route::get('/initial', function(){
//     return view('init');
// });

// Usando prefix
// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard', function(){
//         return "dashboard";
//     });
    
//     Route::get('/users', function(){
//         return "users";
//     });
    
//     Route::get('/clientes', function(){
//         return "clientes";
//     });
// });

// Usando name
// Route::name('admin')->group(function(){
//     Route::get('/admin/dashboard', function(){
//         return "dashboard";
//     })->name('admin.dashboard');
    
//     Route::get('/admin/users', function(){
//         return "users";
//     })->name('admin.users');
    
//     Route::get('/admin/clientes', function(){
//         return "clientes";
//     })->name('admin.clientes');
// });

// Route::any('/any', function(){
//     return 'Permite todo tipo de requisição(post, put, get, delete)';
// });

// Route::match(['put', 'delete'], '/any', function(){
//     return 'Permite apenas as requisições definidas';
// });

// Parametros
// Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
//     return "O Id do produto é:".$id."<br>"."Sua categoria é:".$cat;
// });

// Redirecionamento
// Route::redirect('/about', '/initial');
// Route::view('/initial', 'site/initial');

// Rota nomeada
// Route::get('/news', function(){
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });