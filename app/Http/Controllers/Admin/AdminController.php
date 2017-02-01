<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\TeladentPatient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listPatients()
    {
        return view('admin.patients.list');
    }

    public function getPatients()
    {
        $users = TeladentPatient::select(['patient_id', 'first_name', 'last_name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->addColumn('action', function ($user) {
            return '<a href="/admin/patient/edit/' . $user->patient_id . '" class="btn btn-xs btn-primary">Edit</a>
            <a onclick="deleteme(this)" href="javascript:;" data-href="/admin/patient/delete/' . $user->patient_id . '" class="btn btn-xs btn-danger btn-delete-me">Delete</a>';
        })->make(true);
//        return Datatables::of(TeladentPatient::query())->make(true);
    }

    /**
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createPatient()
    {
        return view('admin.patients.add');
    }

    /**
     * @param PatientRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function savePatient(PatientRequest $request)
    {
        $patient_add = $request->all();
        $patient_add['password'] = Hash::make($patient_add['password']);
        TeladentPatient::create($patient_add);
        Session::flash('flash_message', 'The Patient has been created successfully.');
        return redirect('admin/patients');
    }

    public function editPatient($id)
    {
        $patient = TeladentPatient::where('patient_id', $id)->get()->toArray();
        $patient = $patient[0];
        return view('admin.patients.edit', compact('patient'));
    }

    public function updatePatient($id, PatientRequest $request)
    {
        print_r($request->all());
        $patient = TeladentPatient::where('patient_id', $id);
        $patient_update = $request->all();
        unset($patient_update['_token']);
        unset($patient_update['_method']);
        $patient->update($patient_update);
        Session::flash('flash_message', 'The patient has been updated successfully.');
        return redirect('admin/patients');
    }

    public function destroyPatient($id)
    {
        $patient = TeladentPatient::where('patient_id', $id);
        $patient->delete();
        Session::flash('flash_message', 'The patient has been deleted successfully!');
        return redirect('admin/patients');
    }
}
