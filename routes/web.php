use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::resource('turmas', TurmaController::class);
Route::resource('alunos', AlunoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/formulario', function () {
    return view('formulario');
});

