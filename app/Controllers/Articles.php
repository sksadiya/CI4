<?php

namespace App\Controllers;

use App\Models\ArticlesModel;
use App\Entities\Article;
use CodeIgniter\Exceptions\PageNotFoundException;

class Articles extends BaseController
{
    private ArticlesModel $model;

    public function __construct()
    {
        $this->model =new ArticlesModel;
    }
    public function index()
    {
        
      
       $data =$this->model->findAll();
      
        return view('Articles/index',[
            "articles" =>$data
        ]);
    }
    public function show($id) {

        
       $article = $this->getArticleOr404($id);
        return view("Articles/show",[
            "article" =>$article
        ]);
  
     
    }

    public function new()
    {
        return view("articles/new" ,[
            "article" => new Article
        ]);
    }

    public function create()
    {
       

        $article = new Article($this->request->getPost());
      $id = $this->model->insert($article);

      if($id === false){
        return redirect()->back()->
        with("errors",$this->model->errors())->withInput();
      }
     return redirect()->to("articles/$id")
                      ->with("message"," article saved successfully");
    }

    public function edit($id){

        $article = $this->getArticleOr404($id);
         return view("Articles/edit",[
             "article" =>$article
         ]);
    }

    public function update($id) {
       
        $article = $this->getArticleOr404($id);
        $article->fill($this->request->getPost());

        if(! $article->hasChanged()) {
            return redirect()->back()->with("message" , "Nothing to update");
        }
       if( $this->model->save( $article))
       {
        return redirect()->to("articles/$id")
                        ->with("message" ,"Article Updated");
       }
       return redirect()->back()->
       with("errors",$this->model->errors())->withInput();
    }
     public function delete($id) {
        $article = $this->getArticleOr404($id);
            if($this->request->is("delete")) {
                $this->model->delete($id);

                return redirect()->to("articles")->with("message" ,"Article deleted");
            }
        return view("Articles/delete" ,[
            "article" => $article
        ]);

     }
    private function getArticleOr404($id){
        $article = $this->model->find($id);

        if ($article === null) {
            throw new PageNotFoundException("Article with id $id not found");     
          }
    
            return $article;
            }
  
}
