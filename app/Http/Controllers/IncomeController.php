<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TransactionSource;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $transaction = Transaction::get()->where('transaction_type_id', 'like', 1);
        if($request->ajax()) {
            return datatables()->of($transaction)
            ->addColumn('action', function($transaction){

                    return view('income.action', ['transaction' => $transaction]);
            })
            ->addColumn('source', function($transaction){
                
                if($transaction->total === 0) {
                    return "-";
                }else {
                    return $transaction->transaction_sources->transaction_source_name;
                }

            })
            ->addColumn('total', function($transaction){
                
                return number_format($transaction->total , 0, ',', '.');
            })
            ->addColumn('status', function($transaction){
    
                if($transaction -> updated_by == 'owner.create.approved' || $transaction -> updated_by == 'owner.edit.approved'){
                    $status = '<span class="text-success fw-bold">Approved</span>';
                }else if($transaction -> updated_by == 'owner.create.rejected'){
                    $status = '<span class="text-danger fw-bold">Need revision</span>';
                }else if($transaction -> updated_by == 'owner.edit.rejected'){
                    $status = '<span class="text-danger fw-bold">Need revision</span>';
                }else if($transaction -> updated_by == 'owner.delete.rejected'){
                    $status = '<span class="text-danger fw-bold">Delete rejected</span>';
                }
                else {
                    $status = 'Waiting approval to '.explode( '.', $transaction -> updated_by)[1].'';    
                }

                return $status;
            })
            ->addColumn('date', function ($transaction) {
                
                $mydate = strtotime($transaction->date);
                $newformat = date('d M Y',$mydate);
                return '<td data-sort="'. $mydate .'">'.$newformat .'</td>';
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'status', 'date'])
            ->make(true);
          }
          
          return view('income.index', [
            'user' => Auth::user()->name
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('income.create', [
            'sources' => TransactionSource::where('id', 'like', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'transaction_name' => 'required',
            'transaction_source_id' => 'required',
            'date' => 'required',
            'total' => 'required'
        ]); 

        $res = str_replace( '.', '', $request -> total);

        $user = Auth::user();
        if($user -> name != 'owner'){
            $up = $user -> name.'.create';
        }else{
            $up = $user -> name;
        }


        Transaction::create([
            'transaction_name' => $request->transaction_name,
            'transaction_type_id' => 1,
            'transaction_source_id' => $request->transaction_source_id,
            'date' => $request->date,
            'total' => $res,
            'created_by' =>  $user->name,
            'updated_by' => $up
        ]);

        return redirect('/income')->with('message', 'Income ' . $request['transaction_name'] . ' created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('income.edit', [
            'income' => Transaction::where('id', 'like', $id)->first(),
            'sources' => TransactionSource::where('id', 'like', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'transaction_name' => 'required',
            'transaction_source_id' => 'required',
            'date' => 'required',
        ]); 

        $income = Transaction::where('id', 'like', $id)->first();
        
        $user = Auth::user();
        if($user -> name != 'owner'){
            $up = $user -> name.'.edit';
        }else{
            $up = $user -> name;
        }

        $res = str_replace( '.', '', $request -> total);

        $income->update([
            'transaction_name' => $request->transaction_name,
            'transaction_type_id' => 1,
            'transaction_source_id' => $request->transaction_source_id,
            'date' => $request->date,
            'total' => $res,
            'updated_by' => $up
        ]);

        return redirect('/income')->with('message', 'Income ' . $request['transaction_name'] . ' updated successfully!');
    }

    
    public function requestDelete(Request $req)
    {
        
        $user = Auth::user();
        if($user -> name != 'owner'){
            $up = $user -> name.'.delete';
        }else{
            $up = $user -> name;
        }

        if($user -> name == 'owner'){
            $deleted = Transaction::where('id', 'like', $req ->id)->delete();
            return redirect('/income')->with('message', 'Income deleted successfully!'); 
        }else{
            $updated = Transaction::where('id', 'like', $req->id)->update([
                'updated_by' => $up
            ]);
            return redirect('/income')->with('message', 'Delete request sent successfully!');
        }

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $income = Transaction::where('id', 'like', $id)->first();
        $income->delete();
        return redirect('/income')->with('message', 'Income ' . $income['transaction_name'] . ' deleted successfully!'); 
    }
}
