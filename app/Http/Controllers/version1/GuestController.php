<?php
namespace App\Http\Controllers\version1;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Guest;
use App\Model\Key_log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GuestResource;
use App\Http\Resources\GuestCollection;
use App\Http\Requests\GuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use JWTAuth;
use DB;

/**
 * @resource Example
 *
 * Longer description
 */
class GuestController extends Controller
{
        public function __construct()

        {

            $this->Guest = new Guest();

         }

       protected function GuestUpdateValidator(array $data)
         {
            return Validator::make($data, [
            'name'             => 'required',
            'lead_name'        => 'required',
            'address'          => 'required',
            'telephone'        => 'required',
           // 'email'            => 'Required|max:255',
            'arrival'          => 'required',
            'departure'        => 'required',
            'children'         => 'required',
            'adult'            => 'required',
            'car_registration' => 'required',
            'note'             => 'required', 
        ]);
      }
         protected function GuestValidator(array $data)
         {
            return Validator::make($data, [
            'name'             => 'required',
            'lead_name'        => 'required',
            'address'          => 'required',
            'telephone'        => 'required',
            'email'            => 'Required|unique:guests|max:255',
            'arrival'          => 'required',
            'departure'        => 'required',
            'children'         => 'required',
            'adult'            => 'required',
            'car_registration' => 'required',
            'note'             => 'required', 
        ]);
      }
    
	public function transform($guest){
		$temp  = array();
		 
		 foreach($guest as $obj)
		 {
			$temp = [

            "first_page_url" 	=> "http://127.0.0.1:8010/api/v1/guests?page=1",
            "from"				=> 1,
            "last_page"			=> 8,
            "last_page_url"	    => "http://127.0.0.1:8010/api/v1/guests?page=8",
            "next_page_url"     => "http://127.0.0.1:8010/api/v1/guests?page=2",
            "path"              => "http://127.0.0.1:8010/api/v1/guests",
            "per_page"          => 4,
            "prev_page_url"     => "",
            "to"                => 4,
            "total"             => 30
			];
		 }

		 return $temp;	
	}  

    public function index(Request $request)
    {


        $token  =   $request->header('token');
        $user   =   JWTAuth::toUser($token);
        $user_id = $user->id;
               
    	 $guest = $this->Guest::where('user_id','=',$user_id)->paginate(4);

         if($guest->isEmpty())
         {

        return response()->json([
                "status"    => Response::HTTP_BAD_REQUEST,
                "result"    => true,
                "error"     => false,
                "message"   => 'No existing guests!',
                "data"      => GuestResource::collection($guest),
            ],Response::HTTP_BAD_REQUEST);
         
        
    }
    else
    {

    	return response()->json([
    			"status" 	=> Response::HTTP_OK,
    			"result" 	=> true,
    			"error" 	=> false,
    			"message" 	=> 'List of Guests',
    		  	"data" 		=> GuestResource::collection($guest),
    		  	"pagination" => $this->transform($guest),
    		],Response::HTTP_OK);
    }

    }

    public function get_all(Request $request)
    {
        $token  =   $request->header('token');
        $user   =   JWTAuth::toUser($token);
        $user_id = $user->id;

    	$get_guest_all = $this->Guest::where('user_id','=',$user_id)->get();

        if($get_guest_all->isEmpty())
        {
    	   return response()->json([
            "status" => Response::HTTP_BAD_REQUEST,
            "result" => true,
            "error" => false,
            "message" => 'No existing guests!',
            "data" => $get_guest_all
        ],Response::HTTP_BAD_REQUEST);

        }
        else{

            return response()->json([
            "status" => Response::HTTP_OK,
            "result" => true,
            "error" => false,
            "message" => 'All Details of Guests',
            "data" => $get_guest_all
        ],Response::HTTP_OK);

     }
    }
    public function show($guest)
    {

        $guestDetail = $this->Guest::where('id',$guest)->get();

         /*$guestDetail = DB::table('guests')
                        ->where('id','=',$guest)
                        ->get(); */  

        //return $guestDetail;die;

        if($guestDetail->isEmpty())
         {
    		return response()->json([
    			"status" 	=> Response::HTTP_BAD_REQUEST,
    			"result" 	=> true,
    			"error" 	=> false,
    			"message"   => "Not existing Guests!",
    			"data" 		=> GuestCollection::collection($guestDetail)
    		    ],Response::HTTP_BAD_REQUEST);
        }else{

          return response()->json([
                "status"    => Response::HTTP_OK,
                "result"    => true,
                "error"     => false,
                "message"   => "Details of Guest",
                "data"      => GuestCollection::collection($guestDetail)
                ],Response::HTTP_OK);  
        }
    }
    public function store(Request $request)
    {
        $GuestValidator = $this->GuestValidator($request->all());
        if ($GuestValidator->fails())
        {
            $messages = $GuestValidator->messages();
            $response = [
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'error' => true,
                'result'=>false ,
                'message' => $messages,
                'data'=> []
            ];

            return response()->json($response,Response::HTTP_UNPROCESSABLE_ENTITY);

        }else{
            //return $request->all();die;
    	 $token    =   $request->header('token');
         $user     =   JWTAuth::toUser($token);

       //  $email     =   $user->email;
         $user_id      =   $user->id;

         $guest = new Guest();
         $guest->name             = $request->name;
         $guest->user_id          = $user_id; 
         $guest->lead_name        = $request->lead_name;
         $guest->address          = $request->address;
         $guest->telephone        = $request->telephone;
         $guest->email            = $request->email;
         $guest->arrival          = $request->arrival;
         $guest->departure        = $request->departure;
         $guest->adult            = $request->adult;
         $guest->children         = $request->children;
         $guest->car_registration = $request->car_registration;
         $guest->note             = $request->note;

         $guest->save();

         $guestID = $guest->id;

         if(!is_numeric($guestID))
         {
            $response = [
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'result' => true,
                'error' => false,
                'msg' => "Guest Id is required..",
                'data' => [],
                //'token' => $token,
            ];
            return response()->json($response, Response::HTTP_UNPROCESSABLE_ENTITY);

         }else{

         $KeyLogger = new Key_log;

         $KeyLogger->guest_id     = $guestID;
         $KeyLogger->user_id      = $user_id;
         $KeyLogger->save();
        }
         $response = [
                'status' => Response::HTTP_CREATED,
                'result' => true,
                'error' => false,
                'msg' => "Guest successfully inserted.",
                'data' => $guest,
                //'token' => $token,
            ];
            return response()->json($response, Response::HTTP_CREATED);
    }
}
    public function update(Request $request,$id)
    {   
        $GuestUpdateValidator = $this->GuestUpdateValidator($request->all());
        if($GuestUpdateValidator->fails())
        {
            $messages = $GuestUpdateValidator->messages();
            $response = [
                'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'error' => true,
                'result'=>false ,
                'message' => $messages,
                'data'=> []
            ];

            return response()->json($response,Response::HTTP_UNPROCESSABLE_ENTITY);
 
        }else{
        $token    =   $request->header('token');
         $user     =   JWTAuth::toUser($token);
         $user_id = $user->id;

         $Guest_detail = $this->Guest::where('id',$id)
                                       ->where('user_id',$user_id)
                                       ->get();

         if($Guest_detail->isEmpty()){
         
         $response = [

            'status' => Response::HTTP_BAD_REQUEST,
            'result' => true,
            'error'  => false,
            'msg'    => "No Exists Guests.",
            'data'   => [],
         ];

         return response()->json($response, Response::HTTP_BAD_REQUEST);
         
     }else{

        $for_update = [
            'user_id'          => $user_id,
            'name'             => $request->name,
            'lead_name'        => $request->lead_name,
            'address'          => $request->address,
            'telephone'        => $request->telephone,
           // 'email'            => $request->email,
            'arrival'          => $request->arrival,
            'departure'        => $request->departure,
            'children'         => $request->children,
            'adult'            => $request->adult,
            'car_registration' => $request->car_registration,
            'note'             => $request->note, 
         ];

            $guest = $this->Guest::where('id', $id)
                                 ->where('user_id','=',$user_id)
                                 ->update($for_update);

         $response = [

            'status' => Response::HTTP_CREATED,
            'result' => true,
            'error'  => false,
            'msg'    => "Guest Updated successfully.",
            'data'   => $for_update,
         ];

         return response()->json($response, Response::HTTP_CREATED);
     }
    }
  }

    public function destroy(Request $request,$guest)
    {
        $token = $request->header('token');

        $user = JWTAuth::toUser($token);
        $user_id = $user->id;

        $guestID = $this->Guest::where('id' ,'=', $guest)
                                ->where('user_id','=',$user_id)
                                ->first();
        $keylogID = Key_log::where('guest_id' ,'=', $guest)
                                ->where('user_id','=',$user_id)
                                ->first();     
     
     if($guestID=="")
     {
    	//$delete = $guestID->delete();

       $response = [
            'status' => Response::HTTP_BAD_REQUEST,
            'result' => true,
            'error'  => false,
            'msg'    => "Not existing Guests!",
            'data'   => $guestID
        ];

        return response()->json($response,  Response::HTTP_BAD_REQUEST);
    }else{
       // $guestID = $this->Guest::where('id' ,'=', $guest)->get();
        //$deleteID = $this->Guest::find($guestID);   
        $GuestDelete = $guestID->delete();
        $KeyDelete = $keylogID->delete();
        $response = [
            'status' => Response::HTTP_NO_CONTENT,
            'result' => true,
            'error'  => false,
            'msg'    => "Guest Delete successfully.",
            'data'   => $guestID,
        ];

        return response()->json($response,  Response::HTTP_OK);

    }
    }
}
