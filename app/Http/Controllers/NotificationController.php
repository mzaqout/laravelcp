<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class NotificationController extends Controller
{
    public function notify(){
        
        return view("Notify");
    }
    
    public function sendNotify(){
        $users= DB::table('oc_users_application')
            ->select('oc_users_application.*')
            ->get();
        $input = Request::All();

        $title = $input['title'];
            $message = $input['message'];
            
        $GOOGLE_API_KEY = "AIzaSyBmlqTc1U3EyGKu0vj-RGF7lIQWqpggNZI";
                $ttl = 30;
                      
		$data = array( 'title' =>$title,'message' => $message, "notifyType".$input['notifyType']
                        ,"id".$input['details']);
                
        foreach($users as $user){
           $ids = array($user->application_id);
                    // Set POST variables
                    $url = 'https://android.googleapis.com/gcm/send';

                    $fields = array(
                        'registration_ids' => $ids,
                        'data' => $data
                       // 'time_to_live' => $ttl,
                    );

                    $headers = array(
                        'Authorization: key='.$GOOGLE_API_KEY,
                        'Content-Type: application/json'
                    );

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                    $result = curl_exec($ch);

        }
        return view("Notify");
    }
    public function getProducts(){
        $products= DB::table('oc_product')
            ->join('oc_product_description', 'oc_product_description.product_id', 
                    '=', 'oc_product.product_id')
            ->select('oc_product_description.product_id', 'oc_product_description.name')
            ->where('oc_product.status', 1)
            ->get();
        
        return $products;
    }
    
    public function getCategories(){
       $categories= DB::table('oc_category')
            ->join('oc_category_description', 'oc_category.category_id', 
                    '=', 'oc_category_description.category_id')
            ->select('oc_category_description.category_id', 'oc_category_description.name')
            ->where('oc_category.status', 1)
            ->get();
        
        return $categories;
    }
}
