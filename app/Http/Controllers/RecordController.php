<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordStoreRequest;
use App\Http\Requests\RecordUpdateRequest;
use App\Models\Record;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RecordController extends Controller
{
    public function index()
    {
        return view('index')->with('records', Record::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(RecordStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = 1;//пример без авторизации пользователя
        Record::create($data);
        return redirect()->route('record.index')->with('success', 'Record is saved.');
    }

    public function show(Record $record) : View
    {
        return view('show', compact('record'));
    }

    public function destroy(Record $record) :RedirectResponse
    {
        $record->delete();
        return redirect()->route('record.index')->with('success', 'Delete record');
    }

    public function edit(Record $record): View
    {
        return view('edit', compact('record'));
    }

    public function update(RecordUpdateRequest $request, Record $record) :RedirectResponse
    {
        $record->update($request->validated());
        return redirect()->route('record.index')->with('success', 'Update record');
    }
}
