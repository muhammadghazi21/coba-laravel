<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use App\Models\User;
use Illuminate\Http\Request;

class QnaController extends Controller
{
    public function index(Request $request)
    {
        $qnas = Qna::where('pertanyaan', 'like', "%$request->search%")->orWhere('jawaban', 'like', "%$request->search%")->get();

        // return response()->json([
        //     'qnas' => $qnas,
        //     'users' => $user,
        // ]);

        return view('qna', compact('qnas'), ['type_menu' => 'qna']);
    }

    public function create()
    {
        return view('qnaCreate', ['type_menu' => 'qna']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $qna = new Qna;
        $qna->pertanyaan = $request->pertanyaan;
        $qna->jawaban = $request->jawaban;
        $qna->save();

        return redirect('qna')->with('success', 'Qna created successfully.');
    }

    public function edit($id)
    {
        $qna = Qna::find($id);
        return view('qnaEdit', compact('qna'), ['type_menu' => 'qna']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $qna = Qna::find($id);
        $qna->pertanyaan = $request->pertanyaan;
        $qna->jawaban = $request->jawaban;
        $qna->save();
        
        return redirect('qna')->with('success', 'Qna updated successfully');
    }

    public function delete($id)
    {
        $qna = Qna::find($id);
        $qna->delete();

        return redirect('qna')->with('success', 'Qna deleted successfully');
    }
}
