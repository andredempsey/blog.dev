<?php


class Post extends BaseModel {
	//The db table this model realtes to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //Validation rules for our model properties
    static public $rules = [
    	'title'=>'required|max:100',
    	'body'=>'required|max:10000'
    ];

    public function user()
{
    return $this->belongsTo('User');
}
	public function addUploadedImage ($image)
	{
		$systemPath = public_path() . '/' . $this->imgDir . '/';	
		$imageName = $this->id . '-' . $image->getClientOriginalName();
		$image->move($systemPath, $imageName);
		$this->img_path = '/' . $this->imgDir . '/' . $imageName;
	}

    public function renderBody()
    {
        // Convert the post body from markdown to HTML using parsedown.
        $dirtyHTML = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($dirtyHTML);
        
    }
}
