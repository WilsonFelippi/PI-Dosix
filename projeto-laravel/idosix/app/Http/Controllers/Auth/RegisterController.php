<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
<<<<<<< HEAD
    public function redirectTo(){

        // User role
        $id = Auth::id();
        $role = User::find($id);
    
        // Check user role
        switch ($role['tipo']) {
            case 'cliente':
                    return '/cliente/dashboard';
                break;
            case 'medico':
                     return '/medico/dashboard';
                break; 
            case 'admin':
                    return '/admin/dashboard';
                break;
            default:
                    return '/login'; 
                break;
        }
    }
=======
    protected $redirectTo = '/cliente/dashboard';
>>>>>>> c0e8bff68630249c37dc209f8a8966175a0eda46

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        return User::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'crm' => $request->crm,
            'genero'=> $request->genero,
            'data_nascimento' => $request->data_nascimento,
            'celular'=> $request->celular,
            'cep'=> $request->cep,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo,
            'id_especialidade' => $request->id_especialidade,
        ]);
    }

    public function index () {
        return view('auth/register');
    }
}
