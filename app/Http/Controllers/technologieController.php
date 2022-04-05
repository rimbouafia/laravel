<?php

namespace App\Http\Controllers;

use App\Models\technologie;
use Illuminate\Http\Request;


class technologieController extends Controller
{
    //liste des technologies
    public function gettechnologie() {
        return response()->json(technologie::all(), 200);
    }
         // create technologie
         public function createtechnologie(){         
            $nom_technologie = request ('nom_technologie');
            $technologie= new technologie();
            $technologie ->nom_technologie = $nom_technologie;
            $technologie -> save();
          }
               //update technologie
               public function update(Request $request, $id) {
                $technologie =technologie::where('id_technologie', $id)->firstOrFail();
                if(is_null($technologie)) {
                    $response['status'] = 0;
                    $response['message'] = $technologie;
                    $response['code'] =404;
                return response()->json($response);
                }
               technologie::where('id_technologie', $id)
                ->update([ 
                    'nom_technologie' => $request['nom_technologie']
                ]);
                    $response['status'] = 1;
                    $response['message'] = $technologie;
                    $response['code'] =200;
                return response()->json($response);
            }           
             // delete technologie
          public function delete($id){
            $res = technologie::where("id_technologie","=",$id)->delete();
            return response()->json([
                'message' => "Successfully deleted",'success' => true ], 200);
      }
      

}
