<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected $table = 'groups';

	protected $fillable = ['name', 'slug'];

    protected static function createGroupSlug()
    {
        $exists = true;
        while ($exists) {
            $slug = str_random(15);
            $check = self::where('slug', $slug)->first();
            if( ! $check){
                $exists = false;
            }
        }
        return $slug;
    }


    #Database Relationships
	public function users()
	{
		return $this->belongsToMany('App\User');
	}

	public function invites()
    {
        return $this->hasMany('App\Invite');
    }

    public function tasks() 
    {
        return $this->hasMany('App\Task');
    }

}
