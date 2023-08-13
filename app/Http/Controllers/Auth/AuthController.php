<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $temp = User::where('email', '=', $request->email)
            ->first();
        if (!$temp) {
            return new JsonResponse(['message' => 'Harap Periksa Kembali username dan password Anda'], 409);
        }
        if ($temp) {

            $pass = Hash::check($request->password, $temp->password);
            if (!$pass) {
                return new JsonResponse(['message' => 'Harap Periksa Kembali username dan password Anda'], 409);
            }
        }
        // if (!$token = auth()->attempt($validator->validated())) {
        if (!$token = Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return self::createNewToken($token);
    }

    public static function createNewToken($anu)
    {
        $user = Auth::user();
        $token = $user->createToken('Laravel')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }
    public function me()
    {
        $me = Auth::user();
        return new JsonResponse(['data' => $me]);
    }

    public function logout(Request $request)
    {
        // auth()->logout();
        // return response()->json(['message' => 'User sukses logout dari aplikasi']);
        $user = Auth::user();
        $user->tokens()->delete();
        // return new JsonResponse($user);
        return new JsonResponse(['message' => 'User sukses logout dari aplikasi']);
    }
}
