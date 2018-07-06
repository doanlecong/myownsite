<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Purifier;

class MyPost extends Model
{

    public static function countPostBaseType($type_post = '')
    {
        $count = MyPost::where('type_posts', ConfigData::getConvention($type_post))->count();
        return $count;
    }
    public static function countPostBaseTypeAndStatus($type, $status) {
        $count = MyPost::where('type_posts', ConfigData::getConvention($type))->where('status', $status)->count();
        return $count;
    }
    public static function checkTitle(Request $request){
        $mypost = MyPost::where('title',$request->title);
        if(!empty($request->id)) {
            $mypost = $mypost->where('id','<>',$request->id);
        }
        $mypost = $mypost->first();
        if($mypost) {
            return false;
        }
        return true;
    }
    public static function checkSlug(Request $request, $slug = '') {
        if(!empty($slug)) {
            $myPost = MyPost::where('slug', $slug);
        } else {
            $myPost = MyPost::where('slug', $request->slug);
        }
        if(!empty($request->id)) {
            $myPost = $myPost->where('id','<>',$request->id);
        }
        $myPost = $myPost->first();

        if($myPost){
            return false;
        }
        return true;
    }
    public static function findBySlug($slug, $type){
        return MyPost::where('slug',$slug)->where('type_posts',$type)->where('status',ConfigData::$publish)->first();
    }

    public static function getArrTagSelected(MyPost $post) {
        $arrTags = [];
        foreach ($post->tags as $tag) {
            $arrTags[] = $tag->id;
        }
        return $arrTags;
    }

    public static function setData(MyPost $post,Request $request ,$type) {
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->description = Purifier::clean($request->description);
        $post->status = $request->savetype;
        $post->my_topics_id = $request->my_topic_id;
        $post->hinhdaidien = $request->hinhdaidien;
        $post->previous_post_id  = ($request->previous_post_id == '0') ? null : $request->previous_post_id;
        $post->content = $request->contentPost;
        if($request->savetype == "Y") {
            $post->time_publish = date('Y-m-d H:i:s');
        } else if($request->saveType == "N") {
            $post->time_publish =  null;
        }
        $post->type_posts = ConfigData::getConvention($type);
        return $post;
    }

    public static function findPreviosPost(MyPost $post, $amount = 0 ){
        // Find any posts have same topic whose id less than current post
        $type = $post->type_posts;
        return MyPost::where('id','<',$post->id)->where('type_posts', $type)
            ->where('my_topics_id',$post->my_topics_id)
            ->where('status','Y')->take($amount)->get();
    }

    public static function findForwardPost(MyPost $post, $amount = 0 ) {
        // Find any posts have same topic whose id id greater than current post
        return MyPost::where('id','>', $post->id)->where('type_posts', $post->type_posts)
            ->where('my_topics_id',$post->my_topics_id)
            ->where('status','Y')
            ->take($amount)->get();
    }

    protected $table = 'my_posts';

    public function topic()
    {
        return $this->belongsTo('App\MyTopic', 'my_topics_id');
    }

    public function typePost()
    {
        return $this->belongsTo('App\MyTypePost', 'my_type_posts_id');
    }
    public function countView(){
        return $this->hasOne('App\MyViewPost','my_post_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\MyTag');
    }
}
