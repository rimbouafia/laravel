<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use Illuminate\Http\Request;

class diplomeController extends Controller
{
    //liste des diplomes
    public function getdiplome() {
        return response()->json(diplome::all(), 200);
    }
         // create diplome
         public function creatediplome(){         
            $specialite = request ('specialite');
            $niveau = request ('niveau');
            $nom_faculte = request ('nom_faculte');
            $diplome= new diplome();
            $diplome ->specialite = $specialite;
            $diplome ->niveau = $niveau;
            $diplome ->nom_faculte = $nom_faculte;
            $diplome -> save();
          }
               //update diplome
               public function update(Request $request, $id) {
                $diplome =diplome::where('id_technologie', $id)->firstOrFail();
                if(is_null($diplome)) {
                    $response['status'] = 0;
                    $response['message'] = $diplome;
                    $response['code'] =404;
                return response()->json($response);
                }
               diplome::where('id_diplome', $id)
                ->update([ 
                    'specialite' => $request['specialite'],
                    'niveau' => $request['niveau'],
                    'nom_faculte' => $request['nom_faculte']

                ]);
                    $response['status'] = 1;
                    $response['message'] = $diplome;
                    $response['code'] =200;
                return response()->json($response);
            }           
            // delete diplome
          public function delete($id){
            $res = diplome::where("id_diplome","=",$id)->delete();
            return response()->json([
                'message' => "Successfully deleted",'success' => true ], 200);
      }
      
  
}
