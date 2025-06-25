<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    // Agregar el controlador EventoController
    use App\Http\Controllers\EventoController;
    use App\Http\Controllers\PonenteController;
    use App\Http\Controllers\AsistenteController;

   

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
    
    Route::post('/eventos', [EventoController::class, 'store']); // Almacenar un evento nuevo
    
    Route::put('/eventos/{evento}', [EventoController::class, 'update']); // Actualizar un evento específico
    
    Route::delete('/eventos/{id}', [EventoController::class, 'destroy']); // Eliminar un evento específico
    
    Route::post('/ponentes', [PonenteController::class, 'store']); // Almacenar un ponente nuevo
    
    Route::put('/ponentes/{ponente}', [PonenteController::class, 'update']); // Actualizar un ponente específico
    
    Route::delete('/ponentes/{id}', [PonenteController::class, 'destroy']); // Eliminar un ponente específico
    
    Route::get('/asistentes', [AsistenteController::class, 'index']); // Recuperar todos los asistentes
    
    Route::post('/asistentes', [AsistenteController::class, 'store']); // Almacenar un asistente nuevo
    
    Route::get('/asistentes/{id}', [AsistenteController::class, 'show']); // Recuperar un asistente específico
    
    Route::put('/asistentes/{asistente}', [AsistenteController::class,'update']); // Actualizar un asistente específico
     
    Route::delete('/asistentes/{id}', [AsistenteController::class,'destroy']); // Eliminar un asistente específico
     
});
