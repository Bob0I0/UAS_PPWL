<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use App\Http\Requests\StoreDonaturRequest;
use App\Http\Requests\UpdateDonaturRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DonaturController extends Controller
{
    /**
     * Instantiate a new donaturController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create-donatur|edit-donatur|delete-donatur', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-donatur', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-donatur', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-donatur', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('donaturs.index', [
            'donaturs' => donatur::latest()->paginate(3)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('donaturs.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonaturRequest $request): RedirectResponse
    {
        donatur::create($request->all());
        return redirect()->route('donaturs.index')
            ->withSuccess('New donatur is added successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Donatur $donatur): View
    {
        return view('donaturs.show', [
            'donatur' => $donatur
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donatur $donatur): View
    {
        return view('donaturs.edit', [
            'donatur' => $donatur
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonaturRequest $request, Donatur $donatur): RedirectResponse
    {
        $donatur->update($request->all());
        return redirect()->back()
            ->withSuccess('Donatur is updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donatur $donatur): RedirectResponse
    {
        $donatur->delete();
        return redirect()->route('donaturs.index')
            ->withSuccess('Donatur is deleted successfully.');
    }
}
