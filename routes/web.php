    <?php

use App\Http\Controllers\LabController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AdminController;

Route::get('/equipamento/getCalendario/{equipamento}', [ReservaController::class, 'getCalendario']);

Route::get('/listarutil', [AdminController::class, 'listarutil']);

Route::get('/mMarcacoes', [LabController::class, 'marcacoesLab']);

Route::get('/labs/labProcI/{nLab}', [LabController::class, 'verLab']);

Route::get('/getReserva/{semana}/{equip}', [ReservaController::class, 'getReserva']);

Route::post('/reservar/inserir', [ReservaController::class, 'insere'])->name('insereReserva');

Route::get('/equipamentos', [FormularioController::class, 'index'])->name('equipaments');

Route::get('/adminEquip', [FormularioController::class, 'index1'])->name('adminEquip');

Route::get('/obter-projetos/{responsavelId}', [ProjetoController::class, 'obterProjetos']); 

Route::get('/administrador', [UserController::class, 'index'])->name('administrador');

Route::get('/labs', [LabController::class, 'index'])->name('labs');

Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

Route::get('/lab', function(){
        return view('index');
    })->name('labs');

Route::delete('/administrador/{id}',[UserController::class, 'destroy'])->middleware('auth');

Route::get('/edit/{id}', function($id = null){
        return view('edit', ['id' => $id]);
    });

Route::get('/editar', function(){
        return view('edit');
    });

Route::get('/reservar',  [AgendamentoController::class, 'form']);
   


Route::get('/visualizar', function(){
        return view('visualizar');
    });

Route::get('/edit/{nome}', 'AdminController@showEditPage')->name('edit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


