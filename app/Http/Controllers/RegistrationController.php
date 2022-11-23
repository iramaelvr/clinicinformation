<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistration;
use App\Http\Requests\UpdateRegistration;
use App\registration;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RegistrationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = Registration::all();

        return view('backend.registration.index',compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.registration.create');
    }

    /**
     * @param StoreRegistration $request
     * @return mixed
     */
    public function store(StoreRegistration $request)
    {
        DB::transaction(function () use ($request)
        {
            $data = $request->data();

            $registration = Registration::create($data);

            $this->uploadRequestImage($request, $registration);
        });

        return redirect()->route('registration.index')->withSuccess(trans('messages.create_success', ['entity' => 'Registration']));
    }

    /**
     * @return mixed
     */
    public function datatable()
    {
        return Datatables::eloquent(Registration::query())->make(true);
    }

    /**
     * @param Registration $registration
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Registration $registration)
    {
        return view('backend.registration.edit',compact('registration'));
    }

    /**
     * @param registration $registration
     * @param UpdateRegistration $request
     * @return mixed
     */
    public function update(Registration $registration, UpdateRegistration $request)
    {
        DB::transaction(function () use ($request, $registration)
        {
            $data = $request->data();

            $registration->update($data);

            $this->uploadRequestImage($request, $registration);
        });

        return redirect()->route('registration.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'Registration' ]));
    }

    /**
     * @param registration $registration
     * @return mixed
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()->route('registration.index')->withSuccess(trans('message.delete_success', [ 'entity' => 'Registration' ]));
    }
}