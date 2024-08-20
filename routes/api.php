<?php

use App\Http\Controllers\API\ActiviteController;
use App\Http\Controllers\API\AgribusinessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlotsController;
use App\Http\Controllers\API\FarmerController;
use App\Http\Controllers\API\CultureController;
use App\Http\Controllers\API\ProduitController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use App\Http\Controllers\API\RegionController;
use App\Http\Controllers\API\SpeculationController;
use App\Http\Controllers\API\TypeProduitController;
use App\Http\Controllers\API\TypeActiviteController;
use App\Http\Controllers\API\TypeEntretienController;
use App\Http\Controllers\API\SynchronizationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


/**
 * API Namespace
 */
Route::namespace('API')->name('api.')->group(function() {
    /**
     * Auth routes
     */
    Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function () {
        //Login
        Route::post('login', [LoginController::class])
            ->name('login');

        Route::post('connexion', [AuthController::class, 'login'])
              ->name('connexion');

        Route::get('index', [AuthController::class, 'index'])
              ->name('index')
              ->middleware('auth:api');

        // Logout
        Route::post('logout', [AuthController::class, 'logout'])
            ->name('logout')
            ->middleware('auth:api');
        
        Route::post('sendCodeUser',[AuthController::class, 'sendCodeUser'])
            ->name('sendCodeUser');

        Route::post('checkCodeUser',[AuthController::class, 'checkCodeUser'])
            ->name('checkCodeUser');

        Route::post('resetPassword',[AuthController::class, 'resetPassword'])
            ->name('resetPassword');

        
    });

    /**
     * Farmer routes
     */
    Route::prefix('farmers')->name('farmers.')->group(function () {
        Route::get('/', [FarmerController::class,'index'])->name('index');
        Route::post('/updateFarmer',[FarmerController::class, 'updateFarmer'])->name('updateFarmer');
        Route::get('/getFarmerByPhone', [FarmerController::class,'getFarmerByPhone'])->name('getFarmerByPhone');
    });

    /**
     * Liste des Parcelles par producteur
     */
    Route::prefix('plots')->name('plots.')->group(function () {
        Route::get('/getPlotsByFarmer', [PlotsController::class,'getPlotsByFarmer'])->name('getPlotsByFarmer');
    });

   

    /**
     * Mise en place de la culture
     */
    Route::prefix('culture')->name('culture.')->group(function(){
        Route::post('/implementation_cultivation', [ActiviteController::class, 'implementation_cultivation'])->name('implementation_cultivation');
        Route::post('/synchronisation_implementation_cultivation', [ActiviteController::class, 'synchronisation_implementation_cultivation']);
       
        Route::get('/getCultureByPlot', [ActiviteController::class, 'getCultureByPlot'])->name('getCultureByPlot');
    });

    /**
     * liste des categories de produits
     */
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/index', [CategorieController::class, 'index'])->name('index');
    });

    /**
     * liste des types de produits
     */
    Route::prefix('typeProduits')->name('typeProduits.')->group(function(){
        Route::get('/index', [TypeProduitController::class, 'index'])->name('index');
        Route::get('/listingTypeProductsByCategory', [TypeProduitController::class, 'listingTypeProductsByCategory'])->name('listingTypeProductsByCategory');
    });

    /**
     * liste des types d'entretien
     */
    Route::prefix('typeEntretiens')->name('typeEntretiens.')->group(function(){
        Route::get('/index', [TypeEntretienController::class, 'index'])->name('index');
    });

    /**
     * liste des types d'activites
     */
    Route::prefix('typeActivites')->name('typeActivites.')->group(function(){
        Route::get('/index', [TypeActiviteController::class, 'index'])->name('index');
    });

    /**
     * distribution de  produits
     */
    Route::prefix('produits')->name('produits.')->group(function(){
        Route::get('/getListingProductDistribution', [ActiviteController::class, 'getListingProductDistribution'])->name('getListingProductDistribution');
        Route::post('/product_distribution', [ActiviteController::class, 'product_distribution'])->name('product_distribution');
        Route::post('/synchronisation_product_distribution', [ActiviteController::class, 'synchronisation_product_distribution']);
    });

    /**
     * Activite 
     */
    Route::prefix('activites')->name('activites.')->group(function(){
        Route::post('/productUse', [ActiviteController::class, 'productUse'])->name('productUse');
        Route::post('/synchronisation_productUse', [ActiviteController::class, 'synchronisation_productUse'])->name('synchronisation_productUse');
        Route::post('/getListingProductUse', [ActiviteController::class, 'getListingProductUse'])->name('getListingProductUse');

        Route::post('/plotMaintenance', [ActiviteController::class, 'plotMaintenance'])->name('plotMaintenance');
        Route::post('/synchronisation_plotMaintenance', [ActiviteController::class, 'synchronisation_plotMaintenance'])->name('synchronisation_plotMaintenance');
        Route::post('/getListingPlotMaintenance', [ActiviteController::class, 'getListingPlotMaintenance'])->name('getListingPlotMaintenance');

        
    });

    /**
     * Synchronization routes
     */
    Route::prefix('synchronizations')->name('synchronizations.')->group(function () {
        Route::post('/store', [SynchronizationController::class, 'store'])->name('store');
    });

    /**
     * Speculations
     */

    Route::prefix('speculations')->name('speculations.')->group(function(){
        Route::get('/',[SpeculationController::class, 'index'])->name('index');
    });

    /**
     * Agribusiness
     */

     Route::prefix('agribusinesses')->name('agribusinesses.')->group(function(){
        Route::get('/',[AgribusinessController::class, 'index'])->name('index');
    });

     /**
     * Recolte
     */

     Route::prefix('recolte')->name('recolte.')->group(function(){
        Route::get('/getListingHarvest',[ActiviteController::class, 'getListingHarvest'])->name('getListingHarvest');
        Route::post('/harvesting',[ActiviteController::class, 'harvesting'])->name('harvesting');
        Route::post('/synchronisation_harvesting',[ActiviteController::class, 'synchronisation_harvesting'])->name('synchronisation_harvesting');
    });

    Route::prefix('regions')->name('regions.')->group(function(){
        Route::get('/index',[RegionController::class, 'index'])->name('index');
    });


});