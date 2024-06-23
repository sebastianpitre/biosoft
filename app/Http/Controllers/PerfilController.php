<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class PerfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $avatars = ['avatar1.jpg', 'avatar2.jpg', 'avatar3.jpg', 'avatar4.jpg', 'avatar5.jpg', 'avatar6.jpg', 'avatar7.jpg', 'avatar8.jpg', 'avatar9.jpg', 'avatar10.jpg', 'avatar11.jpg', 'avatar12.jpg']; 

        $avistamientos = DB::table('avistamientos')
        ->where('nombre_usuario', $user->name)
        ->get();

        $countAvistamientos = $avistamientos->count();

        return view('perfil', compact('user', 'avatars', 'countAvistamientos'));
    }

    
    public function update(Request $request)
{
    $user = Auth::user();

    $rules = [
        'name' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        'password' => 'nullable|string|min:8|confirmed',
    ];

    $data = $request->validate($rules);

    if ($data['password']) {
        $data['password'] = bcrypt($data['password']);
    } else {
        unset($data['password']);
    }

    // actualizar la imagen/avatar del usuario si se ha seleccionado uno nuevo
    if ($request->has('imagen')) {
        $data['imagen'] = $request->input('imagen');
    }

    $user->update($data);

    $notificacion = "Se ha actualizado el usuario correctamente";
    return redirect()->route('perfil')->with(compact('notificacion'));
}

}
