<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $hidden = [
        "user"
    ];

    protected $appends = ["creator","result"];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,"created_by");
    }

    public function getCreatorAttribute()
    {
        return $this->user->username;
    }

    public function getResultAttribute()
    {
        $votes = Vote::where("poll_id", $this->id)->get();

        $divisions = [];

        $winners = [];

        $choiceresult = [];

        $choices = Choice::where("poll_id",$this->id)->get();
        foreach ($choices as $choice)
        {
            $choiceresult[$choice->choice] = 0;
        }

        foreach ($votes as $vote)
        {
            try
            {
                $divisions[$vote->division->name][$vote->choice->choice] += 1;
            }
            catch (Exception $e)
            {
                $divisions[$vote->division->name][$vote->choice->choice] = 1;
            }
        }

        foreach ($divisions as $k=>$v)
        {
            $mostvoted = ["value"=>0];
            foreach ($v as $kk=>$vv)
            {
                if ($vv > $mostvoted["value"])
                {
                    $mostvoted["division"] = $k;
                    $mostvoted["value"] = $vv;
                    $mostvoted["choice"] = $kk;
                    $mostvoted["count"] = 1;
                }
                elseif ($vv == $mostvoted["value"])
                {
                    $mostvoted["count"] += 1;
                }
            }
            $winners[$mostvoted["division"]] = $mostvoted;
        }

        foreach ($winners as $winner)
        {
            $choiceresult[$winner["choice"]] += 1 / $winner["count"];
        }

        $total = 0;


        foreach ($choiceresult as $k=>$v)
        {
            $total += $v;
        }

        $result = [];

        foreach ($choiceresult as $k=>$v)
        {

            $choice_id = 0;

            foreach ($choices as $choice)
            {
                if ($choice->choice == $k)
                {
                    $choice_id = $choice->id;
                }
            }
            
            array_push($result,[
                "choice_id"=>$choice_id,
                "points"=>$v / ($total) * 100,
                "choice"=>$k
            ]);
        }

        

        return $result;
    }

}
