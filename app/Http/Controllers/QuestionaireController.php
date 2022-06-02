<?php

namespace App\Http\Controllers;

use App\Models\Questionaire;
use Illuminate\Http\Request;
use App\Http\Requests\CreateQuestionaireRequest;
use App\Http\Requests\UpdateQuestionaireRequest;

class QuestionaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionaires = Questionaire::all();
        return response()->json([
            'status' => 'success',
            'message' => 'questionaires retreived successfully',
            'data' => $questionaires
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuestionaireRequest $request)
    {
        $data = $request->all();
        $questionnaire = Questionaire::create($data);
        return response()->json([
            'status' => 'success',
            'message' => 'questionnaire created successfully',
            'data' => $questionnaire
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questionaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionaire $questionnaire)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'questionnaire retreived successfully',
            'data' => $questionnaire
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questionaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionaire $questionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questionaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionaireRequest $request, Questionaire $questionnaire)
    {   

        $updated = $questionnaire->update($request->all());
        if($updated){
            return response()->json([
                'status' => 'success',
                'message' => 'questionnaire updated successfully',
                'data' => $questionnaire
            ], 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questionaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionnaire)
    {
        $questionnaire->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'questionnaire deleted successfully'
        ], 204);
    }
}
