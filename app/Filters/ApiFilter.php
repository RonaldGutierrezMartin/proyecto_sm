<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{

    protected $safeParams =[];
    protected $columnMap =[];
    protected $operatorMap =[];

    /* public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    } */

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $param => $operators){
            $query = $request->query($param);
            if(!isset($query)){
                continue;
            }
            if(isset($this->columnMap)){
                $column = $this->columnMap[$param] ?? $param;
            }else{
                $column = $param;
            }
            foreach($operators as $operator){
                if(isset($query)){
                    $eloQuery[] = [$column, $operator, $query];
                }
            }
        }
        return $eloQuery;
    }
}