<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function show(){
        $tickets = Ticket::all();
        return view('client.ticket',compact('tickets'));
    }

    public function create(){
        return view('admin.ticket.ticket');
    }

    public function store(Request $request){
        Ticket::create($request->all());
        return redirect()->back();
    }

    public function index(){
        $tickets = Ticket::all();
        return view('admin.ticket.TicketList',compact('tickets'));
    }

    public function delete($id){

        Ticket::find($id)->delete();
        return redirect()->back();

    }

    public function edit($id){

        $ticket = Ticket::find($id);
        return view('admin.ticket.EditTicket',compact('ticket'));

    }

    public function update($id,Request $request){
        Ticket::find($id)->update($request->all());
        return redirect('dashboard/ticket/index');
    }

    public function BuyXTicket($value,$id){
        $ticket = User::find($id);
        $NewTicket = $ticket->tickets+$value;
        User::where('id',$id)->update(['tickets'=>$NewTicket]);
        return redirect()->back();

    }
}
