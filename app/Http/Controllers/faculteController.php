<?php

namespace App\Http\Controllers;
use App\Models\faculte;

use Illuminate\Http\Request;

class faculteController extends Controller
{
     //faculte List
     public function getfaculte() {
        return response()->json(faculte::all(), 200);
    }
     // create faculté
        public function createfaculte(){         
          $nom_faculte = request ('nom_faculte');
          $adresse = request ('adresse');
          $mail = request ('mail');
          $fax = request ('fax');
          $faculte = new faculte();
          $faculte ->nom_faculte = $nom_faculte;
          $faculte ->adresse = $adresse;
          $faculte ->mail = $mail;
          $faculte ->fax = $fax;
          $faculte -> save();
        }
     //update faculté
     public function update(Request $request, $id) {
      $faculte =faculte::where('id_faculte', $id)->firstOrFail();
      if(is_null($faculte)) {
          $response['status'] = 0;
          $response['message'] = $faculte;
          $response['code'] =404;
      return response()->json($response);
      }
     faculte::where('id_faculte', $id)
      ->update([
          'nom_faculte' => $request['nom_faculte'],
          'mail' => $request['mail'],
          'fax' => $request['fax']

        ]);
          $response['status'] = 1;
          $response['message'] = $faculte;
          $response['code'] =200;
      return response()->json($response);
  }           
// delete faculté
          public function delete($id){
          $res = faculte::where("id_faculte","=",$id)->delete();
          return response()->json([
              'message' => "Successfully deleted",'success' => true ], 200);
    }
}