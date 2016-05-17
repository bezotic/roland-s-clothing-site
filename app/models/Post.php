
<?php
use Carbon\Carbon;
	
	class Post extends BaseModel
	{
			public static $rules = array(
	    'title'      => 'required|max:100|min:3',
	    'body'       => 'required|max:10000|min:3',
	    'files'		 => 'max|30000|mimes:jpeg,png,gif'
		);
	    protected $table = 'posts';

	    public function setBodyAttribute($body)
		{
			$this->attributes['body'] = strip_tags($body);
		}

		public function setTitleAttribute($title)
		{
			$this->attributes['title'] = strip_tags($title);
		}

		public function user()
		{
		    return $this->belongsTo('User');
		}

		public function getAllLikes($search)
		{
			return self::where('title', 'LIKE', "%search%")->orWhere('body', 'LIKE', "%search%")->
			orderby('createdAt', 'ASC')->get();
		}

		public function isAuthor($user)
		{
			return $this->user_id == $user->id;
		}

		public function getBodyAttribute()
		{
			$parser = new Parsedown();
			return $parser->text($this->attributes['body']);
		}
				

	}
	
