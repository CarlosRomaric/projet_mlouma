<?php

namespace App\Http\Controllers\API;

use App\Models\Plot;
use App\Models\Farmer;
use App\Models\Activity;
use App\Models\Speculation;
use App\Models\TypeProduit;
use Illuminate\Support\Str;
use App\Models\TypeActivite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController;

class ActiviteController extends BaseController
{
    public function __construct()
    {
        $this->middleware("auth:api");
    }

    //MISE EN PLACE DE CULTURE
    public function implementation_cultivation(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required|exists:farmers,id',
            'plot_id'=>'required|exists:plots,id',
            'speculation_id'=>'required|exists:speculations,id',
            'date_debut'=>'required',
            'date_fin'=>'required|date|after:date_debut'
        ],[
            'farmer_id.required'=>'le choix du producteur est obligatoire',
            'farmer_id.exists' => 'Le producteur sélectionné est invalide',
            'plot_id.required'=>'le choix de la parcelle est obligatoire',
            'plot_id.exists' => 'La parcelle sélectionnée est invalide',
            'speculation_id.required'=>'le choix de la culture est nécessaire',
            'date_debut.required'=>"la date de mise en place de culture est obligatoire",
            'date_debut.required' => 'La date de mise en place de culture est obligatoire',
            'date_debut.date'=>"la date de mise en place de culture doit être de type date",
            'date_fin.required'=>"la date de mise en place de culture est obligatoire",
            'date_fin.date' => 'La date de fin doit être de type date',
            'date_fin.after' => 'La date de fin doit être après la date de début'
        ]);

        if ($data->fails()) {

            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
            $data = $request->only('farmer_id', 'plot_id', 'speculation_id', 'date_debut', 'date_fin');
            $data['type_activity']="AJOUT-CULTURE";
            $data['user_id'] = Auth::user()->id;
            $activites = Activity::create($data);
            $success['activites']=$activites;
            return $this->sendResponse($success, 'la mise en place de la culture a bien été enregistré');
        }
    }
    // SYNCHRONISATION MISE EN PLACE DE CULTURE
    // public function synchronisation_implementation_cultivation(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'data' => 'required|array',
    //     ], [
    //         'data.required' => 'Les données sont requises',
    //         'data.array' => 'Les données doivent être un tableau',
    //     ]);

    //     if ($validator->fails()) {
    //         return $this->sendError('Une erreur s\'est produite', $validator->errors());
    //     }

    //     $allEntries = [];
    //     $errors = [];
    //     $successCount = 0;
    //     $errorCount = 0;

    //     foreach ($request->data as $entry) {
    //         $entryValidator = Validator::make($entry, [
    //             'farmer_id' => 'required|exists:farmers,id',
    //             'plot_id' => 'required|exists:plots,id',
    //             'speculation_id' => 'required|exists:speculations,id',
    //             'date_debut' => 'required|date',
    //             'date_fin' => 'required|date|after:date_debut'
    //         ], [
    //             'farmer_id.required' => 'Le choix du producteur est obligatoire',
    //             'farmer_id.exists' => 'Le producteur sélectionné est invalide',
    //             'plot_id.required' => 'Le choix de la parcelle est obligatoire',
    //             'plot_id.exists' => 'La parcelle sélectionnée est invalide',
    //             'speculation_id.required' => 'Le choix de la culture est nécessaire',
    //             'speculation_id.exists' => 'La speculation choisie est invalide',
    //             'date_debut.required' => 'La date de mise en place de culture est obligatoire',
    //             'date_debut.date' => 'La date de mise en place de culture doit être de type date',
    //             'date_fin.required' => 'La date de fin de mise en place de culture est obligatoire',
    //             'date_fin.date' => 'La date de fin doit être de type date',
    //             'date_fin.after' => 'La date de fin doit être après la date de début'
    //         ]);

    //         if ($entryValidator->fails()) {
    //             $errors[] = [
    //                 'entry' => $entry,
    //                 'errors' => $entryValidator->errors(),
    //             ];
    //             $errorCount++;
    //         } else {
               
    //             $validatedEntry = $entryValidator->validated();
              
    //             $validatedEntry['type_activity'] = 'AJOUT-CULTURE';
    //             $validatedEntry['user_id'] = Auth::user()->id;

    //             $allEntries[] = $validatedEntry;
    //             $successCount++;
    //         }
    //     }
    //     //dd($allEntries);
    //     if (!empty($allEntries)) {
    //         Activity::upsert(
    //             $allEntries,
    //             ['farmer_id', 'plot_id', 'speculation_id', 'date_debut', 'type_activity'], // Colonnes à vérifier pour les conflits
    //             ['user_id', 'date_fin'] // Colonnes à mettre à jour en cas de conflit
    //         );
    //     }

    //     $response = [
    //         'success' => 'Les mises en place de cultures ont bien été enregistrées',
    //         'success_count' => $successCount,
    //         'error_count' => $errorCount,
    //     ];

    //     if (!empty($errors)) {
    //         $response['errors'] = $errors;
    //     }

    //     return response()->json($response, 200);
    // }

    public function synchronisation_implementation_cultivation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
        ], [
            'data.required' => 'Les données sont requises',
            'data.array' => 'Les données doivent être un tableau',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Une erreur s\'est produite', $validator->errors());
        }

        $errors = [];
        $successCount = 0;
        $errorCount = 0;
        $dataToUpsert = [];

        foreach ($request->data as $entry) {
            $entryValidator = Validator::make($entry, [
                'farmer_id' => 'required|exists:farmers,id',
                'plot_id' => 'required|exists:plots,id',
                'speculation_id' => 'required|exists:speculations,id',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date|after:date_debut'
            ], [
                'farmer_id.required' => 'Le choix du producteur est obligatoire',
                'farmer_id.exists' => 'Le producteur sélectionné est invalide',
                'plot_id.required' => 'Le choix de la parcelle est obligatoire',
                'plot_id.exists' => 'La parcelle sélectionnée est invalide',
                'speculation_id.required' => 'Le choix de la culture est nécessaire',
                'date_debut.required' => 'La date de mise en place de culture est obligatoire',
                'date_debut.date' => 'La date de mise en place de culture doit être de type date',
                'date_fin.required' => 'La date de fin de mise en place de culture est obligatoire',
                'date_fin.date' => 'La date de fin doit être de type date',
                'date_fin.after' => 'La date de fin doit être après la date de début'
            ]);

            if ($entryValidator->fails()) {
                $errors[] = [
                    'entry' => $entry,
                    'errors' => $entryValidator->errors(),
                ];
                $errorCount++;
            } else {
                $validatedEntry = $entryValidator->validated();
                $validatedEntry['type_activity'] = 'AJOUT-CULTURE';
                $validatedEntry['user_id'] = Auth::user()->id;

                $uniqueKeys = [
                    'farmer_id' => $validatedEntry['farmer_id'],
                    'plot_id' => $validatedEntry['plot_id'],
                    'speculation_id' => $validatedEntry['speculation_id'],
                    'date_debut' => $validatedEntry['date_debut'],
                    'type_activity' => $validatedEntry['type_activity'],
                ];
    
                $updateData = [
                    'date_fin' => $validatedEntry['date_fin'],
                    'user_id' => $validatedEntry['user_id'],
                    'updated_at' => now(),
                ];

                $activity = Activity::where($uniqueKeys)->first();

                if ($activity) {
                    // Mettez à jour les champs nécessaires
                    $activity->update($updateData);
                } else {
                    // Ajoutez un ID UUID
                    //$validatedEntry['id'] = Str::uuid()->toString();
                    Activity::create($validatedEntry);
                }

                $successCount++;
            }
        }

        if (!empty($dataToUpsert)) {
            Activity::upsert($dataToUpsert, ['farmer_id', 'plot_id', 'speculation_id', 'date_debut', 'type_activity'], ['date_fin', 'user_id', 'updated_at']);
        }

        $response = [
            'success' => 'Les mises en place de cultures ont bien été enregistrées',
            'success_count' => $successCount,
            'error_count' => $errorCount,
        ];

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        return response()->json($response, 200);
    }


    //DISTRIBUTION DE PRODUIT 
    public function product_distribution(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'farmer_id' => 'required|exists:farmers,id',
            'name' => 'required',
            'date_debut' => 'required|date',
            'categorie_id' => 'required|exists:categories,id',
            'type_produit_id' => 'required|exists:type_produits,id'
        ], [
            'farmer_id.required' => 'Le choix du producteur est obligatoire',
            'farmer_id.exists' => 'Le producteur sélectionné est invalide',
            'categorie_id.required' => 'La catégorie du produit est obligatoire',
            'categorie_id.exists' => 'La catégorie sélectionnée est invalide',
            'type_produit_id.required' => 'Le type de produit est obligatoire',
            'type_produit_id.exists' => 'Le type de produit sélectionné est invalide',
            'name.required' => 'Le nom du produit est obligatoire',
            'date_debut.required' => 'La date de début de la distribution du produit est obligatoire',
            'date_debut.date' => 'La date de début doit être une date',
            'date_fin.required' => 'La date de fin de la distribution du produit est obligatoire',
            'date_fin.date' => 'La date de fin doit être une date'
        ]);

        if ($validator->fails()) {

            return $this->sendError('une erreur s\'est produite', $validator->errors());
        }
            $data = $request->only('farmer_id', 'name', 'qte', 'date_debut', 'date_fin', 'categorie_id', 'type_produit_id');
            $data['type_activity']="DISTRIBUTION-PRODUIT";
            $data['user_id']=Auth::user()->id;
            $activites = Activity::create($data);
            $success['activites']=$activites;
            return $this->sendResponse($success, 'la distribution du produit '.$request->name.' a bien été effectué');
        
    }

    //SYNCHRONISATION MISE EN PLACE DE CULTURE
    public function synchronisation_product_distribution(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
        ], [
            'data.required' => 'Les données sont requises',
            'data.array' => 'Les données doivent être un tableau',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Une erreur s\'est produite', $validator->errors());
        }
    
        $allEntries = [];
        $dataToUpsert = [];
        $errors = [];
        $successCount = 0;
        $errorCount = 0;
    
        foreach ($request->data as $entry) {
            $entryValidator = Validator::make($entry, [
                'farmer_id' => 'required|exists:farmers,id',
                'name' => 'required|string',
                'qte' => 'required|integer',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date',
                'categorie_id' => 'required|exists:categories,id',
                'type_produit_id' => 'required|exists:type_produits,id',
            ], [
                'farmer_id.required' => 'Le choix du producteur est obligatoire',
                'farmer_id.exists' => 'Le producteur sélectionné est invalide',
                'name.required' => 'Le nom du produit est obligatoire',
                'name.string' => 'Le nom du produit doit être une chaîne de caractères',
                'qte.required' => 'La quantité est obligatoire',
                'qte.integer' => 'La quantité doit être un nombre entier',
                'date_debut.required' => 'La date de début est obligatoire',
                'date_debut.date' => 'La date de début doit être une date valide',
                'date_fin.required' => 'La date de fin est obligatoire',
                'date_fin.date' => 'La date de fin doit être une date valide',
                'categorie_id.required' => 'La catégorie du produit est obligatoire',
                'categorie_id.exists' => 'La catégorie sélectionnée est invalide',
                'type_produit_id.required' => 'Le type de produit est obligatoire',
                'type_produit_id.exists' => 'Le type de produit sélectionné est invalide',
            ]);
    
            if ($entryValidator->fails()) {
                $errors[] = [
                    'entry' => $entry,
                    'errors' => $entryValidator->errors(),
                ];
                $errorCount++;
            } else {
               
                $validatedEntry = $entryValidator->validated();
                $validatedEntry['type_activity'] = "DISTRIBUTION-PRODUIT";
                $validatedEntry['user_id'] = Auth::user()->id;

                $uniqueKeys = [
                    'farmer_id' => $validatedEntry['farmer_id'],
                    'name' => $validatedEntry['name'],
                    'date_debut' => $validatedEntry['date_debut'],
                    'categorie_id' => $validatedEntry['categorie_id'],
                    'type_produit_id' => $validatedEntry['type_produit_id'],
                    'type_activity' => $validatedEntry['type_activity'],
                ];

                $updateData = [
                    'qte' => $validatedEntry['qte'],
                    'date_fin' => $validatedEntry['date_fin'],
                    'user_id' => $validatedEntry['user_id'],
                    'updated_at' => now(),
                ];

                // Vérifiez si une entrée existe déjà
                $activity = Activity::where($uniqueKeys)->first();

                if ($activity) {
                    // Mettez à jour les champs nécessaires
                    $activity->update($updateData);
                } else {
                    // Ajoutez un ID UUID
                    //$validatedEntry['id'] = Str::uuid()->toString();
                    Activity::create($validatedEntry);
                }
                
                $successCount++;
            }
        }
    
    
        $response = [
            'success' => 'Les distributions de produits ont bien été effectuées',
            'success_count' => $successCount,
            'error_count' => $errorCount,
        ];
    
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
    
        return response()->json($response, 200);
    }


    //UTITILISATION DE PRODUIT
    public function productUse(Request $request)
    {   
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required|exists:farmers,id',
            'plot_id'=>'required|exists:plots,id',
            'categorie_id'=>'required|exists:categories,id',
            'type_produit_id'=>'required|exists:type_produits,id',
            'date_debut'=>'required|date',
            'date_fin'=>'required|date|after:date_debut',
            'name'=>'required',
        ],[
            'farmer_id.required'=>'Le choix du producteur est obligatoire',
            'farmer_id.exists'=>'Le producteur sélectionné n\'existe pas',
            'name.required'=>'Le nom du produit est obligatoire',
            'plot_id.required'=>'Le choix de la parcelle est obligatoire',
            'plot_id.exists'=>'La parcelle sélectionnée n\'existe pas',
            'categorie_id.required'=>'Le choix de la catégorie est obligatoire',
            'categorie_id.exists'=>'La catégorie sélectionnée n\'existe pas',
            'type_produit_id.required'=>'Le choix du type de produit est nécessaire',
            'type_produit_id.exists'=>'Le type de produit sélectionné n\'existe pas',
            'date_debut.required'=>"La date d'utilisation du produit est obligatoire",
            'date_fin.required'=>"La date d'utilisation du produit est obligatoire",
            'date_fin.after'=>"La date de fin doit être après la date de début",
        ]);

        if ($data->fails()) {
            return $this->sendError('Une erreur s\'est produite', $data->errors());
        } else {
            $validatedData = $data->validated();
            $validatedData['type_activity'] = "UTILISATION-PRODUIT";
            $validatedData['user_id'] = Auth::user()->id;
    
            $activites = Activity::create($validatedData);
            $success['activites'] = $activites;
    
            return $this->sendResponse($success, 'L\'utilisation du produit '.$request->name.' a bien été enregistrée');
        }
        
    }

    //SYNCHRONISATION UTITILISATION DE PRODUIT
    public function synchronisation_productUse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
        ], [
            'data.required' => 'Les données sont requises',
            'data.array' => 'Les données doivent être un tableau',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Une erreur s\'est produite', $validator->errors());
        }
    
        $errors = [];
        $successCount = 0;
        $errorCount = 0;
    
        foreach ($request->data as $entry) {
            $entryValidator = Validator::make($entry, [
                'farmer_id' => 'required|exists:farmers,id',
                'plot_id' => 'required|exists:plots,id',
                'categorie_id' => 'required|exists:categories,id',
                'type_produit_id' => 'required|exists:type_produits,id',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date|after:date_debut',
                'name' => 'required|string',
            ], [
                'farmer_id.required' => 'Le choix du producteur est obligatoire',
                'farmer_id.exists' => 'Le producteur sélectionné n\'existe pas',
                'name.required' => 'Le nom du produit est obligatoire',
                'plot_id.required' => 'Le choix de la parcelle est obligatoire',
                'plot_id.exists' => 'La parcelle sélectionnée n\'existe pas',
                'categorie_id.required' => 'Le choix de la catégorie est obligatoire',
                'categorie_id.exists' => 'La catégorie sélectionnée n\'existe pas',
                'type_produit_id.required' => 'Le choix du type de produit est nécessaire',
                'type_produit_id.exists' => 'Le type de produit sélectionné n\'existe pas',
                'date_debut.required' => "La date d'utilisation du produit est obligatoire",
                'date_debut.date' => "La date d'utilisation doit être une date valide",
                'date_fin.required' => "La date de fin d'utilisation du produit est obligatoire",
                'date_fin.date' => "La date de fin doit être une date valide",
                'date_fin.after' => "La date de fin doit être après la date de début",
            ]);
    
            if ($entryValidator->fails()) {
                $errors[] = [
                    'entry' => $entry,
                    'errors' => $entryValidator->errors(),
                ];
                $errorCount++;
            } else {
                $validatedEntry = $entryValidator->validated();
                $validatedEntry['type_activity'] = "UTILISATION-PRODUIT";
                $validatedEntry['user_id'] = Auth::user()->id;
    
                // Clés uniques pour vérifier les conflits
                $uniqueKeys = [
                    'farmer_id' => $validatedEntry['farmer_id'],
                    'plot_id' => $validatedEntry['plot_id'],
                    'categorie_id' => $validatedEntry['categorie_id'],
                    'type_produit_id' => $validatedEntry['type_produit_id'],
                    'date_debut' => $validatedEntry['date_debut'],
                    'name' => $validatedEntry['name'],
                    'type_activity' => $validatedEntry['type_activity'],
                ];
    
                $updateData = [
                    'date_fin' => $validatedEntry['date_fin'],
                    'user_id' => $validatedEntry['user_id'],
                    'updated_at' => now(),
                ];
    
                // Vérifiez si l'entrée existe déjà
                $activity = Activity::where($uniqueKeys)->first();
    
                if ($activity) {
                    // Met à jour les champs nécessaires
                    $activity->update($updateData);
                } else {
                    // Ajoute un UUID pour les nouvelles entrées
                    $validatedEntry['id'] = Str::uuid()->toString();
                    Activity::create($validatedEntry);
                }
    
                $successCount++;
            }
        }
    
        $response = [
            'success' => 'Les utilisations de produits ont bien été enregistrées',
            'success_count' => $successCount,
            'error_count' => $errorCount,
        ];
    
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
    
        return response()->json($response, 200);
    }

    //ENTRETIEN
    public function plotMaintenance(Request $request)
    {
        $data = Validator::make($request->all(), [
            'farmer_id' => 'required|exists:farmers,id',
            'plot_id' => 'required|exists:plots,id',
            'type_entretien_id' => 'required|exists:type_entretiens,id',
            'date_debut' => 'required|date',
        ], [
            'farmer_id.required' => 'Le choix du producteur est obligatoire',
            'farmer_id.exists' => 'Le producteur sélectionné n\'existe pas',
            'plot_id.required' => 'Le choix de la parcelle est obligatoire',
            'plot_id.exists' => 'La parcelle sélectionnée n\'existe pas',
            'type_entretien_id.required' => 'Le choix du type d\'entretien de la parcelle est obligatoire',
            'type_entretien_id.exists' => 'Le type d\'entretien sélectionné n\'existe pas',
            'date_debut.required' => 'La date d\'entretien est obligatoire',
            'date_debut.date' => 'La date d\'entretien doit être de type date',
        ]);
        
        if ($data->fails()) {
            return $this->sendError('Une erreur s\'est produite', $data->errors());
        } else {
            $validatedData = $data->validated();
            $validatedData['type_activity'] = 'ENTRETIEN';
            $validatedData['user_id'] = Auth::user()->id;
    
            $activites = Activity::create($validatedData);
            $success['activites'] = $activites;
    
            return $this->sendResponse($success, 'L\'entretien de la parcelle du code parcelle ' . Plot::find($request->plot_id)->code_plot . ' a bien été enregistré');
        }
    }

    //SYNCHRONISATION ENTRTIEN
    public function synchronisation_plotMaintenance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
        ], [
            'data.required' => 'Les données sont requises',
            'data.array' => 'Les données doivent être un tableau',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Une erreur s\'est produite', $validator->errors());
        }
    
        $errors = [];
        $successCount = 0;
        $errorCount = 0;
    
        foreach ($request->data as $entry) {
            $entryValidator = Validator::make($entry, [
                'farmer_id' => 'required|exists:farmers,id',
                'plot_id' => 'required|exists:plots,id',
                'type_entretien_id' => 'required|exists:type_entretiens,id',
                'date_debut' => 'required|date',
            ], [
                'farmer_id.required' => 'Le choix du producteur est obligatoire',
                'farmer_id.exists' => 'Le producteur sélectionné n\'existe pas',
                'plot_id.required' => 'Le choix de la parcelle est obligatoire',
                'plot_id.exists' => 'La parcelle sélectionnée n\'existe pas',
                'type_entretien_id.required' => 'Le choix du type d\'entretien de la parcelle est obligatoire',
                'type_entretien_id.exists' => 'Le type d\'entretien sélectionné n\'existe pas',
                'date_debut.required' => 'La date d\'entretien est obligatoire',
                'date_debut.date' => 'La date d\'entretien doit être de type date',
            ]);
    
            if ($entryValidator->fails()) {
                $errors[] = [
                    'entry' => $entry,
                    'errors' => $entryValidator->errors(),
                ];
                $errorCount++;
            } else {
                $validatedEntry = $entryValidator->validated();
                $validatedEntry['type_activity'] = 'ENTRETIEN';
                $validatedEntry['user_id'] = Auth::user()->id;
    
                // Clés uniques pour vérifier les conflits
                $uniqueKeys = [
                    'farmer_id' => $validatedEntry['farmer_id'],
                    'plot_id' => $validatedEntry['plot_id'],
                    'type_entretien_id' => $validatedEntry['type_entretien_id'],
                    'date_debut' => $validatedEntry['date_debut'],
                    'type_activity' => $validatedEntry['type_activity'],
                ];
    
                $updateData = [
                    'user_id' => $validatedEntry['user_id'],
                    'updated_at' => now(),
                ];
    
                // Vérifiez si l'entrée existe déjà
                $activity = Activity::where($uniqueKeys)->first();
    
                if ($activity) {
                    // Met à jour les champs nécessaires
                    $activity->update($updateData);
                } else {
                    // Ajoute un UUID pour les nouvelles entrées
                    $validatedEntry['id'] = Str::uuid()->toString();
                    Activity::create($validatedEntry);
                }
    
                $successCount++;
            }
        }
    
        $response = [
            'success' => 'Les entretiens des parcelles ont bien été enregistrés',
            'success_count' => $successCount,
            'error_count' => $errorCount,
        ];
    
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
    
        return response()->json($response, 200);
    }

    //RECOLTE
    public function harvesting(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required|exists:farmers,id',
            'plot_id'=>'required|exists:plots,id',
            'speculation_id'=>'required|exists:speculations,id',
            'qte'=>'required',
            'date_debut'=>'required|date',
            'date_fin'=>'required|date|after:date_debut'
        ],[
            'farmer_id.required'=>'Le choix du producteur est obligatoire',
            'farmer_id.exists'=>'Le producteur sélectionné n\'existe pas',
            'plot_id.required'=>'Le choix de la parcelle est obligatoire',
            'plot_id.exists'=>'La parcelle sélectionnée n\'existe pas',
            'speculation_id.required'=>'Le choix de la spéculation est obligatoire',
            'speculation_id.exists'=>'La spéculation sélectionnée n\'existe pas',
            'qte.required'=>'La quantité de la récolte est obligatoire',
            'date_debut.required'=>'La date de début de la récolte est obligatoire',
            'date_debut.date'=>'La date de début doit être de type date',
            'date_fin.required'=>'La date de fin de la récolte est obligatoire',
            'date_fin.date'=>'La date de fin doit être de type date',
            'date_fin.after'=>'La date de fin doit être après la date de début de la récolte'
        ]);
    
        if ($data->fails()) {
            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{

            $plot = Plot::find($request->plot_id);
            $speculation = Speculation::find($request->speculation_id);
            if(!empty($plot->id) && !empty($speculation)){
                $data = $request->all();

                $data['type_activity']='RECOLTE';

                if($speculation->name =="Hévéa"){
                    $data['type_harvest']='SAIGNEE';
                }else{
                    $data['type_harvest']='ORDINAIRE';
                }

                $data['user_id'] = Auth::user()->id;
                $activites = Activity::create($data);
                $success['activites']=$activites;

                return $this->sendResponse($success, 'l\'entretien de la parcelle du code parcelle '.$plot->code_plot.' a bien été enregistré');
            }else{
                return $this->sendError('la parcelle n\'existe pas');
            }
          
        }
    }
    
    // SYNCHORNISATION DE RECOLTE
    public function synchronisation_harvesting(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
        ], [
            'data.required' => 'Les données sont requises',
            'data.array' => 'Les données doivent être un tableau',
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Une erreur s\'est produite', $validator->errors());
        }
    
        $errors = [];
        $successCount = 0;
        $errorCount = 0;
    
        foreach ($request->data as $entry) {
            $entryValidator = Validator::make($entry, [
                'farmer_id' => 'required|exists:farmers,id',
                'plot_id' => 'required|exists:plots,id',
                'speculation_id' => 'required|exists:speculations,id',
                'qte' => 'required|numeric',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date|after:date_debut'
            ], [
                'farmer_id.required' => 'Le choix du producteur est obligatoire',
                'farmer_id.exists' => 'Le producteur sélectionné n\'existe pas',
                'plot_id.required' => 'Le choix de la parcelle est obligatoire',
                'plot_id.exists' => 'La parcelle sélectionnée n\'existe pas',
                'speculation_id.required' => 'Le choix de la spéculation est obligatoire',
                'speculation_id.exists' => 'La spéculation sélectionnée n\'existe pas',
                'qte.required' => 'La quantité de la récolte est obligatoire',
                'qte.numeric' => 'La quantité doit être un nombre',
                'date_debut.required' => 'La date de début de la récolte est obligatoire',
                'date_debut.date' => 'La date de début doit être de type date',
                'date_fin.required' => 'La date de fin de la récolte est obligatoire',
                'date_fin.date' => 'La date de fin doit être de type date',
                'date_fin.after' => 'La date de fin doit être après la date de début de la récolte'
            ]);
    
            if ($entryValidator->fails()) {
                $errors[] = [
                    'entry' => $entry,
                    'errors' => $entryValidator->errors(),
                ];
                $errorCount++;
            } else {
                $validatedEntry = $entryValidator->validated();
                $plot = Plot::find($validatedEntry['plot_id']);
                $speculation = Speculation::find($validatedEntry['speculation_id']);
    
                if ($plot && $speculation) {
                    $validatedEntry['type_activity'] = 'RECOLTE';
                    $validatedEntry['type_harvest'] = $speculation->name == 'Hévéa' ? 'SAIGNEE' : 'ORDINAIRE';
                    $validatedEntry['user_id'] = Auth::user()->id;
    
                    // Clés uniques pour vérifier les conflits
                    $uniqueKeys = [
                        'farmer_id' => $validatedEntry['farmer_id'],
                        'plot_id' => $validatedEntry['plot_id'],
                        'speculation_id' => $validatedEntry['speculation_id'],
                        'date_debut' => $validatedEntry['date_debut'],
                        'type_activity' => $validatedEntry['type_activity'],
                    ];
    
                    $updateData = [
                        'user_id' => $validatedEntry['user_id'],
                        'qte' => $validatedEntry['qte'],
                        'type_harvest' => $validatedEntry['type_harvest'],
                        'date_fin' => $validatedEntry['date_fin'],
                        'updated_at' => now(),
                    ];
    
                    // Vérifiez si l'entrée existe déjà
                    $existingActivity = Activity::where($uniqueKeys)->first();
    
                    if ($existingActivity) {
                        // Met à jour les champs nécessaires
                        $existingActivity->update($updateData);
                    } else {
                        // Ajoute un UUID pour les nouvelles entrées
                        $validatedEntry['id'] = Str::uuid()->toString();
                        Activity::create($validatedEntry);
                    }
    
                    $successCount++;
                } else {
                    $errors[] = [
                        'entry' => $entry,
                        'errors' => 'La parcelle ou la spéculation n\'existe pas',
                    ];
                    $errorCount++;
                }
            }
        }
    
        $response = [
            'success' => 'Les récoltes ont bien été enregistrées',
            'success_count' => $successCount,
            'error_count' => $errorCount,
        ];
    
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
    
        return response()->json($response, 200);
    }

    //LISTE DES MISE EN PLACE DE CULTURE
    public function getCultureByPlot(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required',
        ],[
            'farmer_id.required'=>'le choix du producteur est obligatoire',
        ]);
       

        if ($data->fails()) {

            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
           
            $farmer= Farmer::find($request->farmer_id);
            
            if(!empty($farmer)){
                $historyImplementationCultivation= Activity::where('farmer_id',$request->farmer_id)
                                                            ->with('speculation','plot')
                                                            ->where('type_activity','AJOUT-CULTURE')
                                                            ->get()
                                                            ->map(function ($item) {
                                                                return collect($item)->except(['name', 'qte', 'type_produit_id', 'type_entretien_id', 'farmer_id', 'categorie_id', 'created_at', 'updated_at'])->toArray();
                                                            });
                $success['historyImplementationCultivation']= $historyImplementationCultivation;
                return $this->sendResponse($success, 'historique des mise en place de culture');
            }else{
                return $this->sendError('error.', ['error'=>'cet producteur n\'existe pas sur notre plateforme']);
            }
        }
    } 

    //LISTE DES DISTRIBUTION DE PRODUITS POUR UN PRODUCTEUR
    public function getListingProductDistribution(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required',
        ],[
            'farmer_id.required'=>'le choix du producteur est obligatoire',
        ]);
       

        if ($data->fails()) {

            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
           
            $farmer= Farmer::find($request->farmer_id);
            if(!empty($farmer)){
                $historyProductUse= Activity::where('farmer_id',$request->farmer_id)
                                            ->with('type_produit','categorie')
                                            ->where('type_activity','DISTRIBUTION-PRODUIT')
                                            ->get()
                                            ->map(function ($item) {
                                                return collect($item)->except(['plot_id','type_harvest','speculation_id', 'created_at', 'updated_at', 'type_entretien_id'])->toArray();
                                            });
                $success['historyProductUse']= $historyProductUse;
                return $this->sendResponse($success, 'historique des distributions de produits du producteur '.$farmer->fullname);
            }else{
                return $this->sendError('error.', ['error'=>'cet producteur n\'existe pas sur notre plateforme']);
            }
        }
    } 

    //LISTE DES UTILISATION DE PRODUITS
    public function getListingProductUse(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required',
        ],[
            'farmer_id.required'=>'le choix du producteur est obligatoire',
        ]);
       

        if ($data->fails()) {

            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
            
            $farmer= Farmer::find($request->farmer_id);
            if(!empty($farmer)){
                $historyProductUse= Activity::where('farmer_id',$request->farmer_id)
                                            ->with('plot','type_produit')
                                            ->where('type_activity','UTILISATION-PRODUIT')
                                            ->get()
                                            ->map(function ($item) {
                                                return collect($item)->except(['speculation_id', 'type_entretien_id', 'type_harvest', 'created_at', 'updated_at'])->toArray();
                                            });
                $success['historyProductUse']= collect($historyProductUse)->except(['created_at','updated_at']);
                return $this->sendResponse($success, 'historique de l\'utilisation de produits');
            }else{
                return $this->sendError('error.', ['error'=>'cette producteur n\'existe pas sur notre plateforme']);
            }
        }
    } 
    
    //LISTE DES ENTRETIENS DE PARCELLES
    public function getListingPlotMaintenance(Request $request)
    {
        $data = Validator::make($request->all(),[
            'farmer_id'=>'required',
        ],[
            'farmer_id.required'=>'le choix du producteur est obligatoire',
        ]);
       

        if ($data->fails()) {

            return $this->sendError('une erreur s\'est produite', $data->errors());
        }else{
          
            $farmer= Farmer::find($request->farmer_id);
            if(!empty($farmer)){
                $historyProductUse= Activity::where('farmer_id',$request->farmer_id)
                                            ->where('type_activity','ENTRETIEN')
                                            ->with('plot','type_entretien')
                                            ->get()
                                            ->map(function ($item) {
                                                return collect($item)->except(['qte', 'name','speculation_id', 'categorie_id', 'type_produit_id','created_at', 'updated_at','type_harvest'])->toArray();
                                            });
                $success['history']= collect($historyProductUse)->except(['created_at','updated_at']);
                return $this->sendResponse($success, 'historique de des entretiens sur les parcelles du producteur'.$farmer->fullname);
            }else{
                return $this->sendError('error.', ['error'=>'cet producteur n\'existe pas sur notre plateforme']);
            }
        }
    } 

    //LISTE DES RECOLTE DE PRODUITS
    // public function getListingHarvest(Request $request)
    // {
    //     $data = Validator::make($request->all(),[
    //         'plot_id'=>'required',
    //         'speculation_id'=>'required'
    //     ],[
    //         'plot_id.required'=>'le choix de la parcelle est obligatoire',
    //         'speculation_id.required'=>'le choix de la culture est obligatoire'
    //     ]);
       

    //     if ($data->fails()) {

    //         return $this->sendError('une erreur s\'est produite', $data->errors());
    //     }else{
    //         $speculation = Speculation::find($request->speculation_id);
    //         $farmer= Farmer::find($request->farmer_id);
    //         //dd($plot, $speculation);
    //         if(!empty($farmer) && !empty($speculation)){
    //             $historyProductUse= Activity::where('farmer_id',$request->farmer_id)
    //                                         ->where('type_activity','RECOLTE')
    //                                         ->get()
    //                                         ->map(function ($item) {
    //                                             return collect($item)->except(['name',  'categorie_id', 'type_produit_id', 'farmer_id', 'type_entretien_id', 'created_at', 'updated_at'])->toArray();
    //                                         });
    //             $success['historyProductUse']= collect($historyProductUse)->except(['created_at','updated_at']);
    //             return $this->sendResponse($success, 'historique de la recolte de'.$speculation->name.'sur la parcelle de code');
    //         }else{
    //             return $this->sendError('error.', ['error'=>'cet producteur  ou la speculation n\'existe pas sur notre plateforme']);
    //         }
    //     }
    // } 

    //LISTE DES RECOLTE DE PRODUITS
    public function getListingHarvest(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'farmer_id' => 'required'
        ], [
            'farmer_id.required' => 'le choix du producteur est obligatoire'
        ]);

        if ($validator->fails()) {
            return $this->sendError('une erreur s\'est produite', $validator->errors());
        }

       
        $farmer = Farmer::find($request->farmer_id);
        

        if (!$farmer) {
            return $this->sendError('error.', ['error' => 'Le producteur, la culture, ou la parcelle n\'existe pas sur notre plateforme']);
        }

        $historyProductUse = Activity::where('farmer_id', $request->farmer_id)
            ->with('plot','speculation')
            ->where('type_activity', 'RECOLTE')
            ->get(['id', 'plot_id', 'speculation_id', 'type_activity','date_debut','date_fin','qte']) // Select only needed columns
            ->map(function ($item) {
                return collect($item)->except(['created_at', 'updated_at'])->toArray();
            });

        $success['historyProductUse'] = $historyProductUse;
        return $this->sendResponse($success, 'historique des recoltes du producteur '.$farmer->fullname);
    }
}

