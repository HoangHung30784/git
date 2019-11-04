<?php
class postController extends controller {

    public function show(){
        $this->loadModel('post');
       
        echo $this->database->getSingle(4);

        $post = [
            'title' => 'Day la tieu de bai viet',
            'content' => 'Day lanoi dungbai viet'
        ];
        $this->loadView('postDetail',$post);
    }
}