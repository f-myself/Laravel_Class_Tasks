<?php
class Album extends Eloquent
{
    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';
    public $timestamps = false;

    public function artist()
    {
        return $this->belongsTo('Artist', 'ArtistId', 'ArtistId');
    }

    public function tracks()
    {
        return $this->hasMany('Track', 'AlbumId', 'AlbumId');
    }
}