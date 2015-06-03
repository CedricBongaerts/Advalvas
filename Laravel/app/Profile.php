<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['city', 'country', 'telephone'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function User()
	{
		return $this->belongsTo('App\User');
	}

}
