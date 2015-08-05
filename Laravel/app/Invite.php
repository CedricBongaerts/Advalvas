<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Invite extends Model {

	protected $fillable = ['group_id', 'code', 'expires_at'];
    
    protected $dates = ['expires_at'];

    public static function generateCode()
    {
        $exists = true;
        while ($exists) {
            $code = str_random(15);
            $check = self::where('code', $code)->first();
            if( ! $check){
                $exists = false;
            }
        }
        return $code;
    }

    #Database Relationships
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
