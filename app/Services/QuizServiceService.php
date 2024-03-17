<?php

namespace App\Services;

use App\Http\Requests\QuizRequest\PostQuizRequest;

class QuizServiceService
{
    public function defineQuiz() {
        try {
            $step = [];
            $step[] = array(
                'step' => array(
                    'init' => 'step-1',
                    'label' => 'Langkah 1'
                ),
                'options' => array(
                    'A' => 'Saya agak ramah, membuka hati dan saya suka berada bersama-sama dengan orang lain.',
                    'B' => 'Saya membutuhkan banyak waktu untuk sendirian dan agak hati-hati untuk memulai hubungan baru.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-2',
                    'label' => 'Langkah 2'
                ),
                'options' => array(
                    'A' => 'Saya lebih suka bekerja praktis, menghasilkan hasil yang nyata.',
                    'B' => 'Saya lebih suka bekerja secara teori, mengembangkan ide-ide dan konsep baru.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-3',
                    'label' => 'Langkah 3'
                ),
                'options' => array(
                    'A' => 'Saya pintar dalam hal analisis dan logika dan ketika saya ragu, saya membiarkan diri saya dipandu oleh otak saya.',
                    'B' => 'Saya sangat sensitif dan emosional dan bila ragu, aku membiarkan diriku dibimbing oleh hati saya.'
                )
            );
            $step[] = array(
                'step' => array(
                    'init' => 'step-4',
                    'label' => 'Langkah 4'
                ),
                'options' => array(
                    'A' => 'Saya orang yang fleksibel dan spontan, kadang-kadang agak kacau.',
                    'B' => 'Saya orang yang handal dan terorganisir dengan baik. Saya lebih memilih untuk merencanakan masa depan.'
                )
            );
            return $step;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function checkValidStep($step = null) {
        try {
            if (!$step) {
                return false;
            }

            $defineQuiz = $this->defineQuiz();
            $valid = false;
            foreach($defineQuiz as $val => $key) {
                if($step === $key['step']['init']) {
                    $valid = true;
                }
            }
            return $valid;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function PostQuiz(PostQuizRequest $request, $nextStep) {
        try {
            $value = $request->input('value');
            $accumulate = $request->input('accumulate');
            $total_accumulate = $accumulate.$value;

            return array('accumulate' => $total_accumulate, 'nextStep' => $nextStep);
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function getNextStep($step) {
        try {
            $defineQuiz = $this->defineQuiz();
            $nextStep = [];
            foreach($defineQuiz as $val => $key) {
                if($step === $key['step']['init']) {
                    $index = $val + 1;
                    if($index < count($defineQuiz)) {
                        $nextStep = $defineQuiz[$index]['step']['init'];
                    }else{
                        $nextStep = 'final';
                    }
                }
            }
            return $nextStep;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }

    public function getFinalResul($accumulate) {
        try {
            $result = $accumulate;
            return $result;
        } catch (\Exception $e) {
            logger()->error('Error in setQuiz: ' . $e->getMessage());
            throw $e;
        }
    }
}
