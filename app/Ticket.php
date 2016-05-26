<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // relationships

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    // getting info about a ticket 

    public function getTitle()
    {
    	return $this->title;
    }

	public function getContent()
    {
    	return $this->content;
    }

    public function getSlug()
    {
    	return $this->slug;
    }

    public function getStatus()
    {
    	return $this->status;
    }

    public function getUser_id()
    {
    	return $this->user_id;
    }

    public function getCreated_at()
    {
    	return $this->created_at;
    }

    public function getUpdated_at()
    {
    	return $this->updated_at;
    }    
}
