<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Giriş verilerini doğrulama
        $request->validate([
            'tc_identity' => 'required',
            'password' => 'required',
        ]);

        $tcIdentity = $request->input('tc_identity');
        $password = $request->input('password');
        $user = User::with('permission')->where('tc_identity', $tcIdentity)->first();

        if (!$user) {
            return response()->json(
                [
                    'status' => false,
                    'message' => "Kullanıcı Bulunamadı!",
                    'response' => [],
                ],
            );
        }

        // Şifreyi kontrol etme
        if (!Hash::check($password, $user->password)) {
            return response()->json(
                [
                    'status' => false,
                    'message' => "Kullanıcı Bulunamadı!",
                    'response' => [],
                ],
            );
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(
            [
                'status' => true,
                'message' => "Başarılı ile giriş yaptınız.",

                'response' => [
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ],
            ],
        );
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
