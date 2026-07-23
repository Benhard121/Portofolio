<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->paginate(10);
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'issued_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'credential_url' => 'nullable|url',
        ]);

        Certificate::create($validated);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Sertifikasi berhasil ditambahkan.');
    }

    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'issued_at' => 'nullable|date',
            'expires_at' => 'nullable|date',
            'credential_url' => 'nullable|url',
        ]);

        $certificate->update($validated);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Sertifikasi berhasil diperbarui.');
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Sertifikasi berhasil dihapus.');
    }
}