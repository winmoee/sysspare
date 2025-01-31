<?php

namespace App\Http\Controllers;
use App\Models\Spare;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;


class SpareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $spares = Spare::paginate(20);  // This returns a LengthAwarePaginator instead of a Collection
        return view('spares.index', compact('spares'));
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
            'message' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'part_number' => 'nullable|string|max:255',
            'english_name' => 'nullable|string|max:255',
            'myanmar_name' => 'nullable|string|max:255',
            'price' => 'nullable|integer',
            'stock_quantity' => 'nullable|integer',
            'movement_level' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:2550',
            'category_type' => 'nullable|string|max:255',
            'price_range' => 'nullable|string|max:255',
        ]);
 
        $request->user()->spares()->create($validated);
 
        return redirect(route('spares.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Spare $spare): View
    {
        return view('spares.show', [
            'spare' => $spare
        ]);
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
            'message' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'part_number' => 'nullable|string|max:255',
            'english_name' => 'nullable|string|max:255',
            'myanmar_name' => 'nullable|string|max:255',
            'price' => 'nullable|integer',
            'stock_quantity' => 'nullable|integer',
            'movement_level' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:2550',
            'category_type' => 'nullable|string|max:255',
            'price_range' => 'nullable|string|max:255',
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
