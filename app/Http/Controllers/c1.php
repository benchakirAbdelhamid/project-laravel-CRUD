<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c1 extends Controller
{
    // get data form db
    public function getDataFromDB(){
        $data = DB::select('select * from datamodules');
        return view('readData',['modules'=>$data]);

    }
    // insert data in Db 
    public function InsertData(Request $request)
    {
        $request->validate([
            'idm'=>'required',
            'titlem'=>'required',
            'nbrs'=>'required'
        ]);
        $idmodule=$request->idm;
        $titleModule=$request->titlem;
        $nbrModule=$request->nbrs;
        $n=DB::insert('insert into datamodules values (?, ?, ?)', [$idmodule, $titleModule , $nbrModule ]);
        return redirect('/');

        
    }
    // update data in Db
    public function updateData($idM)
    {
        $dataId = DB::select('select * from datamodules where idModule = ? ',[$idM]);
        return view('updateModule',['module'=>$dataId]);
        
    }
    // save the new data after update
    public function saveData(Request $request)
    {
        $request->validate([
            'idm'=>'required',
            'titlem'=>'required',
            'nbrs'=>'required'
        ]);
        $idmoduleUpdate=$request->idm;
        $titleModuleUpdate=$request->titlem;
        $nbrModuleUpdate=$request->nbrs;
        $n=DB::update('update datamodules set idModule=? , title=? , numberOfStudents=? where idModule=? ',
         [$idmoduleUpdate, $titleModuleUpdate , $nbrModuleUpdate , $idmoduleUpdate ]
        );
        return redirect('/');

        
    }
    // delete data from the database
    public function deleteData($idmodul)
    {
        $n=DB::delete('delete from datamodules where idModule=? ', [$idmodul ]);
        return redirect('/');
    }
}
