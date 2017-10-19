<?php namespace Grading;

class SimpleGrading {

    public function evaluate($studentId, $score) {

        $gradeLetter = '';

        if($score > 100) {
            return "No grade letter";
        } elseif ($score >= 81) {
            $gradeLetter = 'A';
        } elseif ($score >= 71) {
            $gradeLetter = 'B';
        } elseif ($score >= 61) {
            $gradeLetter = 'C';
        } elseif ($score >= 51) {
            $gradeLetter = 'D';
        } elseif ($score >= 0) {
            $gradeLetter = 'F';
        } else {
            return "No grade letter";
        }
        return "{$studentId} => '{$gradeLetter}'";
    }
    
}
