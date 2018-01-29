<?php

namespace App\Http\Controllers\version1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Model\Key_log;
use App\Model\Guest;
use App\Http\Requests\Key_logRequest;
use App\Http\Resources\Key_logResource;
use App\Http\Resources\Key_logCollection;
use App\Http\Resources\GuestCollection;
use App\Http\Resources\UserCollection;
use JWTAuth;
use DB;
class Key_logController extends Controller
{
	public function __construct()
	{
		$this->keylog = new Key_log();
	}
	/*public function __construct()
	{
		$this->guestt = new Guest();
	}*/

    protected function KeyLogUpdateValidator(array $data)
    {
        return Validator::make($data, [
            'park'         => 'required',
            'plot_number'  => 'required',
            'type'         => 'required',
            'key_in'       => 'required',
            'key_out'      => 'required'
        ]); 
    }

    protected function KeyLogValidator(array $data)
    {
        return Validator::make($data, [
            'park'         => 'required',
            'plot_number'  => 'required',
            'type'         => 'required',
            'key_in'       => 'required',
            'key_out'      => 'required'
        ]);

    }

    public function KeylogTransfom1($key_logs,$guests,$users)
    {
      $tmp = array();

      foreach ($key_logs as $value) {

        $tmp = [

            "id"     			=> $value->id,
            "user_id"  	    => $value->user_id,
            "guest_id" 		=> $value->guest_id,
            "park"			=> $value->park,
            "plot_number"		=> $value->plot_number,
            "type" 			=> $value->type,
            "key_in"			=> $value->key_in,
            "key_out"			=> $value->key_out,
            "guests"			=> [],
            "users"			=> new UserCollection($users),
        ];
    }
    return $tmp;
}
  public function KeylogTransfom($key_logs,$guests,$users)
    {
      $tmp = array();

      foreach ($key_logs as $value) {

        $tmp = [

            "id"          => $value->id,
            "user_id"       => $value->user_id,
            "guest_id"    => $value->guest_id,
            "park"      => $value->park,
            "plot_number"   => $value->plot_number,
            "type"      => $value->type,
            "key_in"      => $value->key_in,
            "key_out"     => $value->key_out,
            "guests"      => new GuestCollection($guests),
            "users"     => new UserCollection($users),
        ];
    }
    return $tmp;
}

    /*
    // when we required data 
    public function GuestTransform($guests)
    {
        $tmp = array();

        foreach ($guests as $value) {

          $tmp = [

              "id"              => $value->id,
              "user_id"         => $value->user_id,
              "name"            => $value->name,
              "lead"            => $value->lead,
              "address"         => $value->address,
              "telephone"       => $value->telephone,
              "email"           => $value->email,
              "arrival"         => $value->arrival,
              "car_registration"=> $value->car_registration,
              "note"            => $value->note,
          ];
        }
        return $tmp;

    }*/
    public function transform($key_logs)
    {
      $temp  = array();

      foreach($key_logs as $obj)
      {
         $temp = [

            "first_page_url" 	=> "http://127.0.0.1:8010/api/v1/key-logs?page=1",
            "from"				=> 1,
            "last_page"			=> 2,
            "last_page_url"	    => "http://127.0.0.1:8010/api/v1/key-logs?page=2",
            "next_page_url"     => "http://127.0.0.1:8010/api/v1/key-logs?page=2",
            "path"              => "http://127.0.0.1:8010/api/v1/key-logs",
            "per_page"          => 1,
            "prev_page_url"     => "",
            "to"                => 1,
            "total"             => 2
        ];
    }

    return $temp;
}

public function index(Request $request)
{
   $token    =   $request->header('token');

   $user 		= JWTAuth::toUser($token);

   $user_id   =$user->id;
    	//return $user_id;die;

   $key_logs 	= $this->keylog::Where('user_id' ,'=', $user_id)->paginate(2);

  if($key_logs == '')
  {
      $response = [

        "status" 		=> Response::HTTP_BAD_REQUEST,
        "result" 		=> true,
        "error" 		=> false,
        "message"		=> "No Exists KeyLogger.",
        "data"			=> [],
    ];

    return response()->json($response,  Response::HTTP_BAD_REQUEST);

}else{

   $guests  = Guest::where('user_id','=',$user_id)->first();

   if($guests == '')
   {
    $response1 = [

        //"Key_log" => Key_logResource::collection($key_logs,$guests),
      "Key_log" => $this->KeylogTransfom1($key_logs,$guests,$user),
        //"guests"  => $guests,
        //"user"    => $user,
  ];

  $response = [

    "status"    => Response::HTTP_OK,
    "result"    => true,
    "error"     => false,
    "message"   => "List of Keylogs appointed by you..",
    "data"      => $response1,
    "pagination"  => $this->transform($key_logs)
];

return response()->json($response,  Response::HTTP_OK);

   }else{

   $response1 = [

        //"Key_log" => Key_logResource::collection($key_logs,$guests),
      "Key_log" => $this->KeylogTransfom($key_logs,$guests,$user),
        //"guests"  => $guests,
        //"user"    => $user,
  ];

  $response = [

    "status" 		=> Response::HTTP_OK,
    "result" 		=> true,
    "error" 		=> false,
    "message"		=> "List of Keylogs appointed by you.",
    "data"			=> $response1,
    "pagination"	=> $this->transform($key_logs)
];

return response()->json($response,  Response::HTTP_OK);
}
}
}

public function get_all(Request $request)
{

   $token    =   $request->header('token');

   $user 		= JWTAuth::toUser($token);

   $user_id 	= $user->id; 

   $key_logs 	= $this->keylog::Where('user_id' ,'=', $user_id)->get();

   $guests 	= Guest::where('user_id','=',$user_id)->first();

   $response1 = [

      "Key_log" => Key_logCollection::collection($key_logs),
      "guests"  => $guests,
      "user"    => $user,
  ];

  if($key_logs->isEmpty())
  {
      $response = [

        "status" 	=> Response::HTTP_OK,
        "result" 	=> true,
        "error" 	=> false,
        "message"	=> "No Exists KeyLogger.",
        "data"		=> [],
    ];

    return response()->json($response,  Response::HTTP_OK);
}else{
  $response = [

    "status" 	=> Response::HTTP_OK,
    "result" 	=> true,
    "error" 	=> false,
    "message"	=> "List of Keylogs appointed by you.",
    "data"		=> $response1,
];

return response()->json($response,  Response::HTTP_OK);
}
}

public function show(Request $request,$key_log)
{
    $token  = $request-> header('token');

    $user   = JWTAuth::toUser($token);

    $user_id = $user->id;
    $keylog = $this->keylog::Where('id' ,'=', $key_log)
    ->Where('user_id','=', $user_id)
    ->first();

    	//return $keylogID;die;

    if($keylog=="")
    {
    	$response = [

    		"status"  => Response::HTTP_BAD_REQUEST,
    		"result"  => true,
    		"error"   => false,
    		"message" => "Not Exists KeyLogger Found!.",
    		"data"	  => [],	
    	];

    	return response()->json($response, Response::HTTP_BAD_REQUEST);

    }else{
    	$response = [

    		"status"  => Response::HTTP_OK,
    		"result"  => true,
    		"error"   => false,
    		"message" => "Details of Keylog.",
    		"data"	  => new Key_logCollection($keylog),	
    	];

    	return response()->json($response, Response::HTTP_OK);
    }
}

public function store(Request $request)
{
    $validator = $this->KeyLogValidator($request->all());
    if ($validator->fails())
    {
        $messages = $validator->messages();
        $response = [
            'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'error' => true,
            'result'=>false ,
            'message' => $messages,
            'data'=> []
        ];

        return response()->json($response,Response::HTTP_UNPROCESSABLE_ENTITY);

    }else{

    	$token = $request->header('token'); 

    	$user = JWTAuth::toUser($token);

        $userID = $user->id;    
        if(!is_numeric($userID)){

            $response = [
            "status" => Response::HTTP_UNPROCESSABLE_ENTITY,
            "result" => true,
            "error"  => false,
            "message"=>"User Id Required..",
            "data"   => []
        ];

        return response()->json($response, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        else{
    	$user_id     = $userID;
    	$guest_id 	 = $request->guest_id;
    	$park        = $request->park;
    	$plot_number = $request->plot_number;
    	$type		 = $request->type;
    	$key_in		 = $request->key_in;
    	$key_out 	 = $request->key_out;

    	$key_logs   = new Key_log();

    	$key_logs->user_id    = $user_id;
    	$key_logs->guest_id   = $guest_id;
    	$key_logs->park 	  = $park;
    	$key_logs->plot_number= $plot_number;
    	$key_logs->type 	  = $type;
    	$key_logs->key_in	  = $key_in;
    	$key_logs->key_out 	  = $key_out;

    	$key_logs->save();

    	$response = [
    		"status" => Response::HTTP_CREATED,
    		"result" => true,
    		"error"  => false,
    		"message"=>"Keylog Successfully saved.",
    		"data"   => $key_logs
    	];

    	return response()->json($response, Response::HTTP_CREATED);
    }
  }

}
public function update(Request $request,$id)
{
    $validator = $this->KeyLogUpdateValidator($request->all());

    if ($validator->fails())
    {
        $messages = $validator->messages();
        $response = [
            'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'error' => true,
            'result'=>false ,
            'messages' => $messages,
            'data'=> []
        ];

        return response()->json($response,Response::HTTP_UNPROCESSABLE_ENTITY);

    }else{
    
  $token = $request->header('token');

  $user = JWTAuth::toUser($token);

  $user_id = $user->id;

  $Update_keyLogger = $this->keylog::where('id','=',$id)
                                    ->where('user_id','=',$user_id)
                                    ->first();

  if($Update_keyLogger=='')
  {

     $response = [
        "status"   => Response::HTTP_BAD_REQUEST,
        "result"   => true,
        "error"    => false,
        "message"  => "No Exists KeyLogger.",
        "data"     => []
    ];

    return response()->json($response,Response::HTTP_BAD_REQUEST);
}else{

  $guestID = $Update_keyLogger->guest_id;

        $for_update = [

         "user_id"     => $user_id,
         "guest_id"	   => $guestID,
         "park"        => $request->park,
         "plot_number" => $request->plot_number,
         "type"		   => $request->type,
         "key_in"	   => $request->key_in,
         "key_out"	   => $request->key_out		
        ];

        $this->keylog::Where('id','=',$id)
        ->where('user_id','=',$user_id)
        ->update($for_update);

        $response = [
        "status"   => Response::HTTP_CREATED,
        "result"   => true,
        "error"    => false,
        "message"  => "KeyLog information updated successfully.",
        "data"     => $for_update
        ];

        return response()->json($response,Response::HTTP_CREATED);
       }
    }
}
public function destroy(Request $request,$key_log)
{
   $token = $request->header('token');

   $user = JWTAuth::toUser($token);
   $user_id = $user->id;
					//return$user_id.$key_log;die;
   $keyloggers = $this->keylog::Where('id','=',$key_log)
   ->where('user_id',$user_id)
   ->first();



   if($keyloggers == ''){

     $response = [
        'status' => Response::HTTP_BAD_REQUEST,
        'result' => true,
        'error'  => false,
        'msg'    => "No Exists KeyLogger",
        'data'   => []
    ];

    return response()->json($response,  Response::HTTP_BAD_REQUEST);
}else{
   $guestID =  $keyloggers->guest_id;
   $guests = Guest::where('id',$guestID)
   ->where('user_id',$user_id)
   ->first();
   if($guests == '')
   {
    echo "guest is empty";

}else{

    $guests->delete();

}


$keyloggers->delete();


$response = [
    'status' => Response::HTTP_NO_CONTENT,
    'result' => true,
    'error'  => false,
    'msg'    => "KeyLogger Delete successfully.",
    'data'   => $keyloggers,
];

return response()->json($response,  Response::HTTP_OK);
}
}

}
