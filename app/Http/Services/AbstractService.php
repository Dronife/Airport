<?php

namespace App\Http\Services;

class AbstractService
{
    public function __construct($route)
    {
        $this->route = $route;
    }


    public function returnWithSuccessMessage( $message){
        return redirect()->route($this->route.'.index')->with('success', $message);
    }

    public function returnWithErrorMessage($message = null){
        return back()->with('error', $message ?? 'There was something wrong on server.');
    }
}
