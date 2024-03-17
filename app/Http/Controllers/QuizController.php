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

    public function welcome() {
        $defineResult = $this->quizService->defineResult();

        return view('welcome', ['defineResult' => $defineResult]);
    }

    public function showQuiz($step = null)
    {
        $validStep = $this->quizService->checkValidStep($step);
        if ($validStep === false) {
            return Redirect::to('/quiz/step-1');
        }

        $defineQuiz = $this->quizService->defineQuiz();
        $defineResult = $this->quizService->defineResult();
        $accumulate = '';
        $nextStep = $this->quizService->getNextStep($step);

        return view('quiz', ['defineQuiz' => $defineQuiz, 'defineResult' => $defineResult, 'step' => $step, 'nextStep' => $nextStep, 'accumulate' => $accumulate]);
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
            $result = $this->quizService->getFinalResult($accumulate);
            if($result) {
                $slug = $result['slug'];
                return Redirect::to('/result/'.$slug);
            }else{
                return Redirect::to('/quiz/step-1');
            }
        }

        $defineQuiz = $this->quizService->defineQuiz();
        $defineResult = $this->quizService->defineResult();

        return view('quiz', ['defineQuiz' => $defineQuiz, 'defineResult' => $defineResult, 'step' => $step, 'nextStep' => $nextStep, 'accumulate' => $accumulate]);
    }

    public function resultQuiz($slug) {
        $validSlug = $this->quizService->checkValidSlugResult($slug);
        if ($validSlug === false) {
            return Redirect::to('/quiz/step-1');
        }

        $defineResult = $this->quizService->defineResult();

        $getResult = $this->quizService->getResult($slug);
        return view('result', ['slug' => $slug, 'defineResult' => $defineResult, 'result' => $getResult]);
    }
}
