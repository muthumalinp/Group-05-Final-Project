<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View{
        $services = Service::all();
        return view('project.owner.service.index')->with('services', $services);
    }

    public function create(): View{
        return view('project.owner.service.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        service::create($input);
        return redirect('service')->with('flash_message', 'Service Addedd!');  
    }

    public function show(string $id): View
    {
        $service = Service::find($id);
        return view('project.owner.service.show')->with('services', $service);
    }

    public function edit(string $id): View
    {
        $service = Service::find($id);
        return view('services.edit')->with('services', $service);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $service = Service::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('service')->with('flash_message', 'Service Updated!');  
    }
   
    public function destroy(string $id): RedirectResponse
    {
        Service::destroy($id);
        return redirect('service')->with('flash_message', 'Service deleted!');  
    }
}
