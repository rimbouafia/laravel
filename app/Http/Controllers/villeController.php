<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ville;


class villeController extends Controller
{
    //liste des villes
    public function getville() {
        return response()->json(ville::all(), 200);
    }
         // create ville
         public function createville(){         
            $nom_ville = request ('nom_ville');
            $code_postal = request ('code_postal');
            $ville= new ville();
            $ville ->nom_ville = $nom_ville;
            $ville ->code_postal = $code_postal;
            $ville -> save();
          }
               //update ville
               public function update(Request $request, $id) {
                $category =ville::where('id_ville', $id)->firstOrFail();
                if(is_null($category)) {
                    $response['status'] = 0;
                    $response['message'] = $category;
                    $response['code'] =404;
                return response()->json($response);
                }
                ville::where('id_ville', $id)
                ->update([
                    'nom_ville' => $request['nom_ville'],
                    'code_postal' => $request['code_postal']
                 ]);
                    $response['status'] = 1;
                    $response['message'] = $category;
                    $response['code'] =200;
                return response()->json($response);
            }            // delete ville
          public function delete($id){
            $res = ville::where("id_ville","=",$id)->delete();
            return response()->json([
                'message' => "Successfully deleted",'success' => true ], 200);
      }
      
}
