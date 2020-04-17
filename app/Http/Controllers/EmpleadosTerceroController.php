<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmpleadosTercero as EmpleadosTercero;
use App\rol as rol;
use App\cargo as cargo;
use App\TipoIdentificacion as TipoIdent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class EmpleadosTerceroController extends Controller
{
    public function mostrarEmpleadosTer()
    {
        if (Auth::check()){
            $empleados = EmpleadosTercero::paginate(10);
            return view('GesUserTerVista') ->with("empleados",$empleados);
        } else {
            return redirect('/login');
        }
    }

    public function InsertEmpleadoTercerorEmpleadosTer()
    {
            $data = DB::select('EXEC InsertEmpleadoTercero');
            dump($data);
    }

    protected function validator(array $EmpleadosTercero)
    {
        return Validator::make($EmpleadosTercero, [
            'TIPO_DOCUMENTO' => ['required', 'string', 'max:255'],
            'NUM_DOCUMENTO' => ['required', 'string', 'max:255'],
            'NOMBRE' => ['required', 'string', 'max:255'],
            'DIRECCION' => ['required', 'string', 'max:255'],
            'TELEFONO' => ['required', 'string', 'max:255'],
            'PAIS' => ['required', 'string', 'max:255'],
            'CIUDAD' => ['required', 'string', 'max:255'],
            'CORREO' => ['required', 'string', 'email', 'max:255'],
            'TELEFONO_OFICINA' => ['required', 'string', 'max:255'],
            'EXTENSION' => ['required', 'string', 'max:255'],
            'USUARIO' => ['required', 'string', 'max:255','unique:empresa_tercero'],
            'CONTRASENA' => ['required', 'string', 'max:255'],
            'ID_CARGO' => ['required', 'string', 'max:255'],
            'ID_ROL' => ['required', 'string', 'max:255'],
            'OBSERVACION' => ['required', 'string', 'max:255'],
        ]);
    }

    public function guardar(Request $EmpleadosTercero)
    {
        $EmpleadosTercero = DB::select(
            'call InsertEmpleadoTercero(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ',
            array(
       $EmpleadosTercero -> TIPO_DOCUMENTO,
       $EmpleadosTercero -> NUM_DOCUMENTO,
       $EmpleadosTercero -> NOMBRE,
       $EmpleadosTercero -> DIRECCION ,
       $EmpleadosTercero -> TELEFONO ,
       $EmpleadosTercero -> PAIS,
       $EmpleadosTercero -> CIUDAD,
       $EmpleadosTercero -> CORREO,
       $EmpleadosTercero -> TELEFONO_OFICINA,
       $EmpleadosTercero -> EXTENSION,
       $EmpleadosTercero -> USUARIO,
       $EmpleadosTercero -> CONTRASENA,
       $EmpleadosTercero -> ID_CARGO,
       $EmpleadosTercero -> ID_ROL,
       $EmpleadosTercero -> OBSERVACION));
       $EmpleadosTercero->save();
       return Redirect('EmpleadosTercero')->with("mensaje" , "Registro Exitoso");
   }

   public function getFrmInsertTercero()
   {
    $roles = rol::all();
    $cargos = cargo::all();
    $TipoIdents = TipoIdent::all();
       return view('GesUserTerCrear')->with(['roles'=>$roles, 'cargos'=>$cargos, 'TipoIdents'=>$TipoIdents]);
   }
}
