<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ModulForm;
use App\Models\GroupModul;
use App\Models\CreditTerm;

class CoaController extends Controller
{
    // Group Modul
    public function addGroupModul()
    {
        return view('coa.groupModulAdd');
    }

    public function storeGroupModul(Request $request)
    {
        $validatedData = $request->validate([
            'group_modul_code' => 'required',
            'group_modul_name' => 'required',
            'group_modul_desc' => 'required',
        ]);

        $groupModul = new GroupModul();
        $groupModul->group_modul_code = $validatedData['group_modul_code'];
        $groupModul->group_modul_name = $validatedData['group_modul_name'];
        $groupModul->group_modul_desc = $validatedData['group_modul_desc'];
        $groupModul->save();

        return redirect('/list-group-modul')->with('success', 'Group Modul created successfully.');
    }

    public function editGroupModul($id)
    {
        $groupModul = GroupModul::find($id);
        if (!$groupModul) {
            return redirect('/list-group-modul')->with('error', 'Group Modul not found');
        }
        return view('groupModulEdit', compact('groupModul'));
    }

    public function updateGroupModul(Request $request, $id)
    {
        $groupModul = GroupModul::find($id);
        if (!$groupModul) {
            return response()->json(["status" => "error", "message" => "Group Modul not found"], 404);
        }

        $validatedData = $request->validate([
            'group_modul_code' => 'required',
            'group_modul_name' => 'required',
            'group_modul_desc' => 'required',
        ]);

        $groupModul->update($validatedData);

        return redirect('/list-group-modul')->with('success', 'Group Modul updated successfully');
    }

    public function deleteGroupModul($id)
    {
        $groupModul = GroupModul::find($id);
        if (!$groupModul) {
            return redirect('/list-group-modul')->with('error', 'Group Modul not found');
        }

        $groupModul->delete();

        return redirect('/list-group-modul')->with('success', 'Group Modul deleted successfully');
    }

    // Modul Form
    public function index()
    {
        $modulForms = ModulForm::all(); // Fetch all data from the ModulForm model

        return view('coa.modulForm', compact('modulForms')); // Pass $modulForms to the view
    }

    public function create()
    {
        return view('modulForm.create'); // Menampilkan form untuk membuat modul form baru
    }

    public function storeModul(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $validatedData = $request->validate([
            'modul_code' => 'required',
            'group_modul_code' => 'required',
            'group_modul_name' => 'required',
            'modul_name' => 'required',
            'modul_url' => 'required',
            'modul_description' => 'required',
            'modul_status' => 'required',
        ]);

        // Buat instance baru dari model ModulForm dan isi atribut-atributnya
        $modulForm = new ModulForm();
        $modulForm->modul_code = $validatedData['modul_code'];
        $modulForm->group_modul_code = $validatedData['group_modul_code'];
        $modulForm->group_modul_name = $validatedData['group_modul_name'];
        $modulForm->modul_name = $validatedData['modul_name'];
        $modulForm->modul_description = $validatedData['modul_description'];
        $modulForm->modul_status = $validatedData['modul_status'];
        $modulForm->modul_url = $validatedData['modul_url'];

        // Simpan data ke dalam basis data
        $modulForm->save();

        // Redirect ke halaman tertentu setelah data disimpan
        return redirect('/list-modul-form');
    }
    public function joinGroup()
    {
        $modulForm = GroupModul::all();

        return view('coa.modulFormAdd', compact('modulForm'));
    }
    public function edit($id)
    {
        $modulForm = ModulForm::findOrFail($id);
        $groupModuls = GroupModul::all(); // Ambil semua data grup modul
        return view('coa.modulFormEdit', compact('modulForm', 'groupModuls'));
    }
    public function update(Request $request, $id)
    {
        $modulForm = ModulForm::findOrFail($id);
        $modulForm->update($request->all());

        return redirect()->route('coa.modulForm')->with('success', 'Modul Form updated successfully');
    }
    public function destroy($id)
    {
        $modulForm = ModulForm::findOrFail($id);
        $modulForm->delete();

        return redirect()->route('coa.modulForm')->with('success', 'Modul Form deleted successfully');
    }
    // credit term
    public function indexCredit()
    {
        $creditTerms = CreditTerm::all();
        return view('coa.creditTermManagement', compact('creditTerms'));
    }
    public function showCredit()
    {
        $creditTerms = CreditTerm::all();

        return view('coa.creditTermManagement', compact('creditTerms'));
    }

    public function storeCredit(Request $request)
    {
        $creditTerms = new CreditTerm();

        $creditTerms->credit_term_code = $request->input('credit_term_code');
        $creditTerms->credit_term_name = $request->input('credit_term_name');
        $creditTerms->credit_term_value = $request->input('credit_term_value');
        $creditTerms->credit_term_status = $request->input('credit_term_status');
        $creditTerms->modul_code = $request->input('modul_code');

        $creditTerms->save();

        return redirect('/list-credit-term'); // Redirect to the credit term management page after storing
    }

    public function joinModul()
    {
        $creditTerms = modulform::all();

        return view('coa.creditTermManagementAdd', compact('creditTerms'));
    }
    public function editc($id)
    {
        // Ambil data credit term yang akan diubah
        $creditTerm = CreditTerm::findOrFail($id);
        
        // Kirim data ke view edit
        return view('edit-credit-term', compact('creditTerm'));
    }

    public function updatec(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            // Tambahkan aturan validasi sesuai kebutuhan
        ]);

        // Perbarui data credit term
        $creditTerm = CreditTerm::findOrFail($id);
        $creditTerm->update($request->all());

        // Redirect kembali ke halaman list-credit-term
        return redirect('/list-credit-term');
    }

    public function destroyc($id)
    {
        // Temukan dan hapus data credit term berdasarkan ID
        $creditTerm = CreditTerm::findOrFail($id);
        $creditTerm->delete();

        // Redirect kembali ke halaman list-credit-term
        return redirect('/list-credit-term');
    }
}
