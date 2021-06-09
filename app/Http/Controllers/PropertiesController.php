<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PropertiesController extends Controller
{
    public function singlePropertyUsv($lr_no){
        $url = config('global.url').'properties/?q='.$lr_no;

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->back()->with('errors', 'Obtaining property usv failed');
        }

        return view('usv', ['UsvDetails' => $created->results]);
        // return view('usv')->with($lr_no);
    }

    public function singlePropertyObjection($lr_no){
        $url = config('global.url').'properties/?q='.$lr_no;

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $created  = json_decode($response->body());

        $objectionsArray = array($created->results[0]->lr_no);

        // dd($objectionsArray);

        $Townurl = config('global.url').'towns';

        $Townresponse = Http::withToken(Session::get('Usertoken'))->get($Townurl);

        $towns  = json_decode($Townresponse->body());

        $session = Session::get('Usertoken');


        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->back()->with('errors', 'Obtaining property usv failed');
        }

        return view('objections', [
            'objectingList' => $objectionsArray,
            'session' => $session,
            'towns' => $towns->results]);
        // return view('usv')->with($lr_no);
    }

    public function createObjections(Request $request){

        $objectingArray = array_combine($request->LRId, $request->LRNo);

        $url = config('global.url').'towns';

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $towns  = json_decode($response->body());

        $session = Session::get('Usertoken');

        return view('objections', [
            'objectingList' => $objectingArray, 
            'session' => $session,
            'towns' => $towns->results]);
    }

    public function objectNotFound(Request $request){

        $objectingProperty = $request->propertyNumber;

        $url = config('global.url').'towns';

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $towns  = json_decode($response->body());

        $session = Session::get('Usertoken');

        // dd($objectingProperty);

        return view('notfoundobjection', [
            'objectingProperty' => $objectingProperty, 
            'session' => $session,
            'towns' => $towns->results]);
    }
    
    public function searchProperty($searchcriteria)
    {
        $url = config('global.url').'properties/?q='.$searchcriteria;


        $response = Http::withToken(Session::get('Usertoken'))->get($url);

    	$created =json_decode($response->body());
        // dd($response);
        
    	return response()->json($created);

    	// dd($created);
    }
}
