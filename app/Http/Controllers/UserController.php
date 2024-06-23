<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:usuarios')->only('index');
        $this->middleware('can:usuarios.edit')->only('edit', 'update');
        $this->middleware('can:usuarios.create')->only('create', 'store');

    }

    public function index(){
        $users = User::all(); 
        
        $users = User::where('email', '<>', 'admin@admin.com')->get(); 

        return view('usuarios.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|exists:roles,id', // Validar que el rol seleccionado exista en la base de datos
        ]);
        
        $user = new User;
        $user->name = $validatedData['name'];
        $user->apellido = $validatedData['apellido'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();
        
        $role = Role::findOrFail($validatedData['role']); // Buscar el rol seleccionado en la base de datos
        $user->assignRole($role); // Asignar el rol al usuario
        

        $notificacion = "Se ha registrado el usuario correctamente";

        return redirect()->route('usuarios')->with(compact('notificacion'));
    }

    public function edit(User $user) 
    {
        $roles = Role::all();
    
       return view('usuarios.edit', compact('user', 'roles'));

    }
  


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|exists:roles,id', // Validar que el rol seleccionado exista en la base de datos
        ];

        $data = $request->validate($rules);

        if($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        $role = Role::findOrFail($request->input('role')); // Buscar el rol seleccionado en la base de datos
        $user->syncRoles([$role]); // Actualizar el rol del usuario

        $notificacion = "Se ha actualizado el usuario correctamente";

        return redirect()->route('usuarios')->with(compact('notificacion'));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $notificacion = "Se ha eliminado el usuario correctamente";

        return redirect()->route('usuarios')->with(compact('notificacion'));
    }
    
    public function getAvatarAttribute($value)
{
    if (!$value) {
        return 'default.jpg'; // aquí puedes establecer cualquier imagen por defecto que desees
    }

    return $value;
}




}
