<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    // Agregar el controlador EventoController
    use App\Http\Controllers\EventoController;
    use App\Http\Controllers\PonenteController;
    use App\Http\Controllers\AsistenteController;

    Route::apiResource('ponentes', PonenteController::class);
    Route::apiResource('asistentes', AsistenteController::class);

/*  rutas publicas */
// Recuperar todos los eventos
Route::get('/eventos', [EventoController::class, 'index']);
// Recuperar un evento específico
Route::get('/eventos/{id}', [EventoController::class, 'show']);
// Recuperar todos los ponentes
Route::get('/ponentes', [PonenteController::class, 'index']);
// Recuperar un ponente específico
Route::get('/ponentes/{id}', [PonenteController::class, 'show']);


/**
* Rutas privadas
*/
Route::middleware('auth:api')->group(function () 
{
    // Almacenar un evento nuevo
    Route::post('/eventos', [EventoController::class, 'store']);
    // Actualizar un evento específico
    Route::put('/eventos/{evento}', [EventoController::class, 'update']);
    // Eliminar un evento específico
    Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);
    // Almacenar un ponente nuevo
    Route::post('/ponentes', [PonenteController::class, 'store']);
    // Actualizar un ponente específico
    Route::put('/ponentes/{ponente}', [PonenteController::class, 'update']);
    // Eliminar un ponente específico
    Route::delete('/ponentes/{id}', [PonenteController::class, 'destroy']);
    // Recuperar todos los asistentes
    Route::get('/asistentes', [AsistenteController::class, 'index']);
    // Almacenar un asistente nuevo
    Route::post('/asistentes', [AsistenteController::class, 'store']);
    // Recuperar un asistente específico
    Route::get('/asistentes/{id}', [AsistenteController::class, 'show']);
    // Actualizar un asistente específico
    Route::put('/asistentes/{asistente}', [AsistenteController::class,'update']);
    // Eliminar un asistente específico
    Route::delete('/asistentes/{id}', [AsistenteController::class,'destroy']);
    Route::get('/asistentes', [PonenteController::class, 'index']);
    Route::get('/asistentes/{id}', [PonenteController::class, 'show']);
});
