<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Response; 

use App\Models\Spare;
use Illuminate\Http\Request;

class SpareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('spares.index', [
            'spares' => Spare::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->spares()->create($validated);
 
        return redirect(route('spares.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Spare $spare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spare $spare): View
    {
        Gate::authorize('update', $spare);
 
        return view('spares.edit', [
            'spare' => $spare,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spare $spare): RedirectResponse
    {
        Gate::authorize('update', $spare);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $spare->update($validated);
 
        return redirect(route('spares.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spare $spare): RedirectResponse
    {
        Gate::authorize('delete', $spare);
 
        $spare->delete();
 
        return redirect(route('spares.index'));
    }
}
