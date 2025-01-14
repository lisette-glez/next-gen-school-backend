<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use OpenAI\Laravel\Facades\OpenAI;
class CourseController extends Controller
{
    public function generateCourse(Request $request)
    {
        $courseName = $request->input('name');
        $courseDescription = $request->input('description');
        $numberOfLessons = $request->input('lessons');
        $numberOfModules = $request->input('modules');
        $price = $request->input('price');
        
        $prompt = "Create a course named '{$courseName}'. Please generate a detailed course outline that includes the following: A brief description of the course including '{$courseDescription}'. 
        The course should have {$numberOfModules} modules with each module focusing on a specific topic related to the course, and {$numberOfLessons} lessons with each lesson covering a subtopic or concept. 
        Each module must be separated by a line break. Include the course price '{$price}' and the estimated total duration. The course should be clear, engaging, and suitable for beginners users. 
        Ensure that the lessons within each module flow logically and cover the topics comprehensively.";

        $response = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]); 
        
        return response()->json($response);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {       
        $course = Course::with([
            'modules' => function ($query) {
                $query->orderBy('order');
            },
            'modules.lessons' => function ($query) {
                $query->orderBy('order');
            }
        ])->find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
       
        return response()->json($course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
