<?php

class Group extends Eloquent
{

    public function users()
    {
        return $this->belongsToMany('Users', 'users_groups');
    }

}