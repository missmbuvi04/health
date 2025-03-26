<?php
namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ResourceController extends Controller
{
    public function index(): Response
    {
        $resources = Resource::all();
        return Inertia::render('Admin/Resources', ['resources' => $resources]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'url' => 'required|url'
    ]);

    \Log::info('Validated Data:', $validatedData);

    $resource = Resource::create($validatedData);

    if ($resource) {
        \Log::info('Resource successfully saved:', $resource->toArray());
    } else {
        \Log::error('Resource failed to save.');
    }

    return back()->with('success', 'Resource added successfully!');
}

}

