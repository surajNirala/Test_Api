<?php
namespace App\Http\Controllers\version1;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use JWTAuthException;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserCollection;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{


	/**
 * @resource Example
 *
 * Longer description
 */

  protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    protected function validatorLogin(array $data)
    {
      return Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);
    }

        public function register(Request $request)
        {
          $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $messages = $validator->messages();
                $response = [
                    'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                    'error' => true,
                    'result'=>false ,
                    'message' => $messages,
                    'data'=> []
                ];

                return response()->json($response,Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            else{

      	$name = $request->input('name');
      	$email = $request->input('email');
      	$password = $request->input('password');
      	$role = "1";

      	$user = new User ([

      		'name' => $name,
      		'email' => $email,
      		'password' => bcrypt($password),
      		'role' => $role,
      	]);

      	/*$credentials = [

      		'email' => $email,
      		'password' => $password
      	];*/

      	if($user->save())
      	{

      		// show tokon and registration together
      		/*$token = null;

      		try{

      			if(!$token = JWTAuth::attempt($credentials))
      			{
      				return response()->json()
      				([

      					'msg' => "Email or Password Incorrect",
      				],Response::HTTP_NOT_FOUND);
      			}
      		} catch(JWTAuthException $e)
      			{
      				return response()->json([

      					'msg' => 'failed_to_create_token',
      				],Response::HTTP_NOT_FOUND);
      			}

      		$user->login = [

      			'href' =>'api/v1/login',
      			'method' => 'POST',
      			//'params' => 'email','password',
      		];*/
      		$response = [
      			'status' => Response::HTTP_CREATED,
      			'result' => true,
      			'error' => false,
      			'message' => 'User Created successfully.',
      			'data' => $user,
      			//'token' => $token,
      		];
      		return response()->json($response, Response::HTTP_CREATED);
      	}

      	$response = [

      		'msg' => 'An Error Occurred'
      	];

      	return response()->json($response,Response::HTTP_NOT_FOUND);
    	}
    }
        public function login(Request $request){

          $validator = $this->validatorLogin($request->all());

            if ($validator->fails()) {
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

        	$email = $request->email;

        	if($user = User::where('email',$email)->get())
        		{

        $credentials = $request->only('email', 'password');
        {
       // return $credentials; die;
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            $response = [
                    'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                    'error' => true,
                    'result'=>false ,
                    'message' => 'invalid_email_or_password',
                    'data'=> []
                ];
            return response()->json($response, Response::HTTP_UNPROCESSABLE_ENTITY);
           }
        } catch (JWTAuthException $e) {
          $response = [
                    'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'error' => true,
                    'result'=>false ,
                    'message' => 'failed_to_create_token',
                    'data'=> []
                ];
            return response()->json($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json([
        		 "status"    => Response::HTTP_OK,
   				   "result"    => true,
   				   "error"     => false,
        		 "msg"       => "Login successfully",
        		 "data"      => $this->transform($user,$token)
        ],Response::HTTP_OK);
   	    }
    	}
    }
	}

  public function transform($user,$token)
  {
    $tmp = array();

    foreach ($user as $value) {
      $tmp = [

          "name"     => $value->name,
          "email"    => $value->email,
          "role"     => $value->role,
          "status"   => $value->status,
          "token"   => $token,

      ];
    }
    return $tmp;
  }
}
