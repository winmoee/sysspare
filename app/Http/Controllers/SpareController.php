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
    // for homepage '/'
    public function homepage()
    {
        $query = Spare::query();

        // Handle search
        if (request('search')) {
            $search = request('search');
            $query->where(function($q) use ($search) {
                $q->where('english_name', 'like', '%' . $search . '%')
                    ->orWhere('myanmar_name', 'like', '%' . $search . '%')
                    ->orWhere('part_number', 'like', '%' . $search . '%')
                    ->orWhere('category', 'like', '%' . $search . '%')
                    ->orWhere('category_type', 'like', '%' . $search . '%');
            });
        }

        // Handle sorting
        $sortColumn = request('sort', 'created_at');
        $direction = request('direction', 'desc');
        
        // Validate sort column to prevent SQL injection
        $allowedSortColumns = [
            'english_name',
            'myanmar_name',
            'part_number',
            'price',
            'created_at'
        ];
        
        if (in_array($sortColumn, $allowedSortColumns)) {
            $query->orderBy($sortColumn, $direction === 'asc' ? 'asc' : 'desc');
        }

        $spares = $query->paginate(4)->withQueryString();
        
        return view('welcome', compact('spares'));
    }   

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Spare::query();

        // Handle search
        if (request('search')) {
            $search = request('search');
            $query->where(function($q) use ($search) {
                $q->where('english_name', 'like', '%' . $search . '%')
                    ->orWhere('myanmar_name', 'like', '%' . $search . '%')
                    ->orWhere('part_number', 'like', '%' . $search . '%')
                    ->orWhere('category', 'like', '%' . $search . '%')
                    ->orWhere('category_type', 'like', '%' . $search . '%');
            });
        }

        // Handle sorting
        $sortColumn = request('sort', 'created_at');
        $direction = request('direction', 'desc');
        
        // Validate sort column to prevent SQL injection
        $allowedSortColumns = [
            'english_name',
            'myanmar_name',
            'part_number',
            'price',
            'created_at'
        ];
        
        if (in_array($sortColumn, $allowedSortColumns)) {
            $query->orderBy($sortColumn, $direction === 'asc' ? 'asc' : 'desc');
        }

        $spares = $query->paginate(24)->withQueryString();
        
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

    // upload
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Limit file size to 2MB
        ]);

        // Get the original filename and extension
        $originalName = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();

        // Append a simple timestamp (current Unix time) to prevent duplicates
        $timestamp = time(); // Returns current Unix timestamp
        $newFilename = "{$originalName}_{$timestamp}.{$extension}";

        // Store the file locally or on S3
        $path = $request->file('file')->storeAs('uploads', $newFilename, 's3'); // Change 'local' to 's3' if using S3

        // Full file path
        $fullPath = storage_path("app/{$path}");

        // Run the artisan command with the file path
        Artisan::call("app:import-spares \"{$path}\"");

        return back()->with('success', "File uploaded as {$newFilename} and import started.");
    }

}
