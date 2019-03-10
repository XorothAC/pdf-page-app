<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    /**
     * Main page of SPA.
     *
     * @return php
     */
    public function index()
    {
        return view('index');
    }


    /**
     * Dispalys existing documents.
     *
     * @return void
     */
    public function displayDocuments()
    {
        return "Documents go here";
    }

}
