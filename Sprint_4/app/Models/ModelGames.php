<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGames extends Model
{
    protected $fillable = ['team_home_id', 'team_visitor_id', 'points_home', 'points_visitor', 'date_match'];

    public function homeTeam()
    {
        return $this->belongsTo(ModelTeams::class, 'team_home_id');
    }

    public function visitorTeam()
    {
        return $this->belongsTo(ModelTeams::class, 'team_visitor_id');
    }

}
