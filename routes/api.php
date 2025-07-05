use App\Http\Controllers\ComputerController;

Route::get('/computers', [ComputerController::class, 'index']);   // Listar todos
Route::post('/computers', [ComputerController::class, 'store']);  // Crear nuevo
Route::get('/computers/{id}', [ComputerController::class, 'show']); // Ver por ID


