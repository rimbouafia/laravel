<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class inscriptionController extends Controller
{
    //formation List
    public function getinscriptions() {
        return response()->json(inscription::all(), 200);
    }
     // create faculté
            public function createinscription(){         
              $nom = request ('nom');
              $prenom = request ('prenom');
              $sex = request ('sex');
              $date_naissance = request ('date_naissance');
              $Email = request ('Email');
              $cin = request ('cin');
              $id_ville =request ('id_ville');
              $id_faculte = request ('id_faculte');
              $id_diplome = request ('id_diplome');
              $id_technologie =request ('id_technologie');
              $cv = request ('cv');
              $inscription = new inscription();


              $inscription ->nom = $nom;
              $inscription ->prenom = $prenom;
              $inscription ->sex = $sex;
              $inscription ->date_naissance = $date_naissance;
              $inscription ->Email = $Email;
              $inscription ->cin = $cin;
              $inscription ->id_ville = $id_ville;
              $inscription ->id_faculte = $id_faculte;
              $inscription ->id_diplome = $id_diplome;
              $inscription ->id_technologie = $id_technologie;
              $inscription ->cv = $cv;

              $inscription -> save();
            }
         //update inscription
         public function update(Request $request, $id) {
          $inscription =inscription::where('id_inscription', $id)->firstOrFail();
          if(is_null($inscription)) {
              $response['status'] = 0;
              $response['message'] = $inscription;
              $response['code'] =404;
          return response()->json($response);
          }
          inscription::where('id_inscription', $id)
          ->update([
              'nom' => $request['nom'],
              'prenom' => $request['prenom'],
              'sex' => $request['sex'],
              'date_naissance' => $request['date_naissance'],
              'Email' => $request['Email'],
              'cin' => $request['cin'],
              'id_ville' => $request['id_ville'],
              'id_faculte' => $request['id_faculte'],
              'id_diplome' => $request['id_diplome'],
              'id_technologie' => $request['id_technologie'],
              'cv' => $request['cv'],
            ]);
              $response['status'] = 1;
              $response['message'] = $inscription;
              $response['code'] =200;
          return response()->json($response);
      }           
    // delete faculté
              public function delete($id){
              $res = inscription::where("id_inscription","=",$id)->delete();
              return response()->json([
                  'message' => "Successfully deleted",'success' => true ], 200);
        }
    }

