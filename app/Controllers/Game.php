<?php
// Game.php
namespace App\Controllers;
use App\Models\QuestionModel;

class Game extends BaseController {
  public function level1() {
    $questions = (new QuestionModel())->where('level', 1)->findAll();
    return view('game/level1', ['questions' => $questions]);
  }
  
  public function level1Submit() {
  $answers = $this->request->getPost('answer');
  $model = new \App\Models\QuestionModel();
  $score = 0;
  foreach ($answers as $id => $userAnswer) {
    $question = $model->find($id);
    if ($question && $question['is_ancaman'] == $userAnswer) {
      $score++;
    }
  }
  return view('game/level1_result', ['score' => $score, 'total' => count($answers)]);
  }
  public function level2() {
    $questions = (new QuestionModel())->where('level', 2)->findAll();
    return view('game/level2', ['questions' => $questions]);
  }
  public function level2Submit() {
  $answers = $this->request->getPost('answer');
  $model = new \App\Models\QuestionModel();
  $score = 0;
  foreach ($answers as $id => $userAnswer) {
    $question = $model->find($id);
    if ($question && $question['is_ancaman'] == $userAnswer) {
      $score++;
    }
  }
  return view('game/level2_result', ['score' => $score, 'total' => count($answers)]);
}
}
