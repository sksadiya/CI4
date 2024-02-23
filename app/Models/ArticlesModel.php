<?php 
namespace App\Models;
use CodeIgniter\Model;

class ArticlesModel extends Model
{
   protected  $table ="article";
   protected $allowedFields =['title' , 'content'];

   protected $returnType =\App\Entities\Article::class;
   protected $validationRules =[
      "title" =>"required|max_length[128]",
      "content" =>"required"
   ];
   protected $validationMessages =[
      "title" =>[
      "required" =>"please enter the title",
      "max_length" =>"{param} maximum characters for the {field}"]
   ];
}