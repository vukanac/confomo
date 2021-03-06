<?php namespace Confomo\Entities;

use Confomo\Twitter\Images\Namer;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TwitterProfile extends Eloquent
{
    protected $guarded = [
        'id'
    ];

    public function profilePicturePath()
    {
        return Namer::getProfilePictureByTwitterId($this->twitter_id);
    }

    public function getProfilePictureCachePath()
    {
        return Namer::getProfilePictureCachePath();
    }

    public function friends()
    {
        return $this->belongstoMany('Confomo\Entities\Friend');
    }
}
