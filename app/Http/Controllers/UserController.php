<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Validator;
use Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')) {

            $users = User::filter($request)->get();
        } else {

            $users = User::where('reference', Auth::user()->id)->filter($request)->get();
        }
        
        return response()->json(['success' => true, 'data' => $users], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required', 'unique:users'
            ],
            'first_names' => [
                'required'
            ],
            'last_names' => [
                'required'
            ],
            'password' => [
                'required', 'min:8', 'max:30'
            ],
            'password_confirmation' => [
                'required', 'same:password',
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        $request['code'] = uniqid(Str::random(8));

        $user = User::create($request->all());

        if ($user) {

            $user->profile()->create($request->all());
        }

        return response()->json(['success' => true, 'data' => 'User created'], 201);
    }

    public function show($id)
    {
        if (Auth::user()->id != $id) {

            if (Auth::user()->hasPermissionTo('users.show')) {

                if (Auth::user()->hasRole('root') || Auth::user()->hasRole('admin')) {

                    $user = User::where('id', $id)->with(['profile'])->first();
                } else {

                    $user = User::where(['id' => $id, 'reference' => Auth::user()->id])->with(['profile'])->first();
                }
            }
        } else {

            $user = User::where('id', $id)->with(['profile'])->first();
        }

        if ($user) {

            return response()->json(['success' => true, 'data' => $user], 200);
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_names' => [
                'required'
            ],
            'last_names' => [
                'required'
            ],
        ]);

        if ($validator->fails()) {

        	return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        if (Auth::user()->id != $id) {

            if (Auth::user()->hasPermissionTo('users.update')) {

                $user = User::find($id);

                if ($user->hasRole('root')) {

                    return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
                }
            } else {
                
                return response()->json(['success' => false, 'errors' => 'Forbidden'], 403);
            }
        } else {

            $user = User::find(Auth::user()->id);
        }
        
        if ($user) {

            unset($request['code']);

            unset($request['email']);

            if (isset($request['password']) &&  $request['password'] == '') {

                unset($request['password']);
            }

            $user->update($request->all());

            $user->profile->update($request->all());

            return response()->json(['success' => true, 'data' => 'User updated'], 200);
        }

        return response()->json(['success' => false, 'errors' => 'User not found'], 404);
    }

    public function destroy($id)
    {
        if (Auth::user()->id != $id) {

            $user = User::find($id);
        
            if ($user && !$user->hasRole('root')) {

                $user->delete();

                return response()->json(['success' => true, 'data' => 'User destroyed'], 200);
            }
        }
        
        return response()->json(['success' => false, 'errors' => 'User not found'], 400);
    }
}
