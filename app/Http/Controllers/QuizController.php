<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest\PostQuizRequest;
use App\Services\QuizServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
    protected $quizService;

    public function __construct(QuizServiceService $quizService)
    {
        $this->quizService = $quizService;
    }

    public function showQuiz($step = null)
    {
        $validStep = $this->quizService->checkValidStep($step);
        if ($validStep === false) {
            return Redirect::to('/quiz/step-1');
        }

        $defineQuiz = $this->quizService->defineQuiz();
        $accumulate = '';
        $nextStep = $this->quizService->getNextStep($step);

        return view('quiz', ['defineQuiz' => $defineQuiz, 'step' => $step, 'nextStep' => $nextStep, 'accumulate' => $accumulate]);
    }

    public function postQuiz(PostQuizRequest $request, $step)
    {
        if($step !== 'final') {
            $validStep = $this->quizService->checkValidStep($step);
            if ($validStep === false) {
                return Redirect::to('/quiz/step-1');
            }
            $nextStep = $this->quizService->getNextStep($step);
        }

        $postQuiz = $this->quizService->postQuiz($request, $step);
        $accumulate = $postQuiz['accumulate'];

        if($step === 'final') {
            $result = $this->quizService->getFinalResul($accumulate);
            return Redirect::to('/result/'.$result);
        }

        $defineQuiz = $this->quizService->defineQuiz();

        return view('quiz', ['defineQuiz' => $defineQuiz, 'step' => $step, 'nextStep' => $nextStep, 'accumulate' => $accumulate]);
    }
}
