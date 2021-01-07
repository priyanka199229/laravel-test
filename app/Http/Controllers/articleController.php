<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class articleController extends Controller
{
 
    // public function article()
    // {
    // 	return view('article.createarticle');
    // }


	public function display()
	{
		# code...
		// $article = article::orderBy('id','DESC')->get();
  //   	return view('article.createarticle',compact('article'));
    	return view('article.createarticle');

	}


	public function createarticle(Request $req)
	{
		# code...
		$article = new article;
		$article->title = $req->title;
		$article->articledetail = $req->articledetail;
		$article->save();
		return back()->with('article_create',"article create successfully");

	}

	public function getarticle()
	{
		# code...
		 $article = article::orderBy('id')->get();
		 return view('admin.articles',compact('article'));
	}
		public function getarticleById($id)
		{
			# code...
			$article = article::where('id',$id)->first();
			return view('article.singlearticle',compact('article'));
			// return view('article.single.article',compact('article'));
		}

			public function deleteArticle($id)
			{
				# code...
				article::where('id',$id)->delete();
				return back()->with('article_delete',"article delete successfully");
			}


    // public function articleinsert(Request $request)
    // {
    // 	$input = $request->all();

    // 	  $article = new article;
    // 	$this->validate($request,[
    // 		'title' => 'required',
    // 		'articledetail'=>'required',
    		
    // 	]);
    	
    // 	$title	= $req->title;
    // 		$articledetail = $req->articledetail;

    //     // $this->article->createData($input);
    // 		 $query = $article->save();

    // 		if($query){
    // 		return back()->with('success','Insert data sucessfully...');
    // 	}else{
    //         return back()->with('fail',' oops, Something went wrong');
    // 	}
        

    // }

		public function editArticle($id)
   {
   	# code...
   	$article = article::find($id);
   	return view('article.editarticle',compact('article'));
   }
   public function updateArticle(Request $req)
   {
   	# code...
   	$article = article::find($req->id);
   	$article->title = $req->title;
   	$article->articledetail = $req->articledetail;
   	$article->save();
   	return back()->with('article_updated','article has been updated successfully');
   	
   }



}
