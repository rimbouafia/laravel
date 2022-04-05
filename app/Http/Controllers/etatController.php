<?php

namespace App\Http\Controllers;
use App\Models\etat;

use Illuminate\Http\Request;

class etatController extends Controller
{
        //liste d'etats
        public function getetat() {
            return response()->json(etat::all(), 200);
        }
             // create etat
             public function createetat(){         
                $resultat = request ('resultat');
                $etat= new etat();
                $etat ->resultat = $resultat;
                $etat -> save();
              }
                   //update etat
                   public function update(Request $request, $id) {
                    $etat =etat::where('id_etat', $id)->firstOrFail();
                    if(is_null($etat)) {
                        $response['status'] = 0;
                        $response['message'] = $etat;
                        $response['code'] =404;
                    return response()->json($response);
                    }
                   etat::where('id_etat', $id)
                    ->update([
                        'resultat' => $request['resultat']
                    ]);
                        $response['status'] = 1;
                        $response['message'] = $etat;
                        $response['code'] =200;
                    return response()->json($response);
                }           
                    // delete etat
              public function delete($id){
                $res = etat::where("id_etat","=",$id)->delete();
                return response()->json([
                    'message' => "Successfully deleted",'success' => true ], 200);
          }
    
}
