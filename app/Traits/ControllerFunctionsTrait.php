<?php
namespace App\Traits;

use App\Keyword;
trait ControllerFunctionsTrait {
  public function cleanKeywords ($keyword) {
    //getting all keyword from db
    $dbkeywords = Keyword::all();
    //making 2 separate array, one is plucked name, another is ($name => $id) to get the old keyword id
    $plucked_keyword = [];
    $plucked_keyword_id = [];
    foreach($dbkeywords as $dbkeyword) {
      array_push($plucked_keyword, $dbkeyword->name);
      $plucked_keyword_id[$dbkeyword->name] = $dbkeyword->id;
    }
    //exploding string and trimming after exploding;
    $keywords = array_map('trim',  explode(',', strtolower($keyword)) );
    //generating array with difference
    $new_keywords = array_diff($keywords, $plucked_keyword);
    $old_keywords = array_diff($keywords, $new_keywords);

    //generating old_keywords_id
    $old_keywords_id = [];
    foreach ($old_keywords as $key) {
      array_push($old_keywords_id, $plucked_keyword_id[$key]);
    }

    //generating new_keywords_id
    $new_keywords_id = [];
    foreach ($new_keywords as $new_keyword) {
      $id = Keyword::create(['name' => $new_keyword])->id;
      array_push($new_keywords_id, $id);
    }
    return array_merge($new_keywords_id, $old_keywords_id);
  }
}

