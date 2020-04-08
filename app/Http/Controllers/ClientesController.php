<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GestionClientes as clientes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function validator(array $clientes)
    {
        return Validator::make($clientes, [
            'NOMBRE' => ['required', 'string', 'max:255'],
            'DIRECCION' => ['required', 'string', 'max:255'],
            'TELEFONO' => ['required', 'string', 'max:255'],
            'PAIS' => ['required', 'string', 'max:255'],
            'CIUDAD' => ['required', 'string', 'max:255'],
            'CORREO' => ['required', 'string', 'email', 'max:255'],
            'WEBSITE' => ['required', 'string', 'max:255'],
            'NIT' => ['required', 'string', 'max:255','unique:empresa_tercero'],
            'OBSERVACION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function guardar(Request $clientes)
     {
        $clientes = new clientes;
        $clientes -> NIT = $_POST["NIT"];
        $clientes -> ID_SECTOR_EMPRESA_TERCERO = $_POST["ID_SECTOR_EMPRESA_TERCERO"];
        if ($clientes -> ID_SECTOR_EMPRESA_TERCERO = "SECTOR ADMINISTRACIÓN Y GESTIÓN")
        {
            $clientes -> ID_SECTOR_EMPRESA_TERCERO = 1;
        }
        if ($clientes -> ID_SECTOR_EMPRESA_TERCERO = "SECTOR AGRICULTURA Y GANADERÍA")
        {
            $clientes -> ID_SECTOR_EMPRESA_TERCERO = 2;
        }
        $clientes -> NOMBRE = $_POST["NOMBRE"];
        $clientes -> DIRECCION = $_POST["DIRECCION"];
        $clientes -> TELEFONO = $_POST["TELEFONO"];
        $clientes -> PAIS = $_POST["PAIS"];
        $clientes -> CIUDAD = $_POST["CIUDAD"];
        $clientes -> CORREO = $_POST["CORREO"];
        $clientes -> WEBSITE = $_POST["WEBSITE"];
        $clientes -> NIT = $_POST["NIT"];
        $clientes -> OBSERVACION = $_POST["OBSERVACION"];
        $clientes ->save();
        return Redirect('Clientes')->with("mensaje" , "cliente $clientes->NOMBRE Registro Exitoso");
    }

    public function Clientes()
    {
        if (Auth::check()){
            $clientes = Clientes::paginate(10);
            return view('Clientes') ->with("Clientes",$clientes);
        } else {
            return redirect('/login');
        }
    }
    public function GestionClientes()
    {
        if (Auth::check()) {
            $users1 = \App\GestionClientes::paginate(10);
            return view('GestionClientes')->with("users", $users1);
        } else {
            return redirect('/login');
        }
    }
}
