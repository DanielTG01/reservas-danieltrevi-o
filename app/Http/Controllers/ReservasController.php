<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reservation::orderBy('id', 'DESC')->paginate (5);
        return view('reserva.index-reserva', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reserva.create-reserva');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reservation();

        $reserva->nombre_sala = $request->nombre_sala;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_fin = $request->hora_fin;
        $reserva->nombre_cliente = $request->nombre_cliente;
        //$reserva->updated_at = $request->updated_at;
        //$reserva->created_at = $request->created_at;

        $reserva->save();

        return redirect()->route('reserva.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reservation)
    {
        $reservationDetail = Reservation::find($reservation);
        return view('reserva.show-material', compact('reservationDetail'));        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
