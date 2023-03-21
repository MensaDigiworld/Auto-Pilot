<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Communication extends Controller
{

    public function dashboard(){
        return view('communication.dashboard');
    }
    public function add_active_lead(){
        return view('communication.add_active_lead');
    }
    public function list_cancelled_deal(){
        return view('communication.list_cancelled_deal');
    }
    public function list_closed_deal(){
        return view('communication.list_closed_deal');
    }
    public function list_initiated_lead(){
        return view('communication.list_initiated_lead');
    }
    public function list_customer_communication_previous(){
        return view('communication.list_customer_communication_action');
    }
    public function list_customer_communication(){
        return view('communication.list_customer_communication');
    }

    public function list_service(){
        return view('communication.list_service');
    }
    public function list_service_previous(){
        return view('communication.list_service_previous');
    }
    public function list_document(){
        return view('communication.list_document');
    }
    public function list_document_previous(){
        return view('communication.list_document_previous');
    }
    public function list_lead_manager(){
        return view('communication.list_lead_manager');
    }


   
}
