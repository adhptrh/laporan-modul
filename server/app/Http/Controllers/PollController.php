<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Poll;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    public function create()
    {
        $valid = validator()->make(request()->all(), [
            "title"=>"required",
            "description"=>"required",
            "deadline"=>"required",
            "choices.*"=>"required|distinct"
        ]);

        if ($valid->fails())
        {
            return $this->respondInvalidData();
        }

        DB::beginTransaction();
        try
        {
            $poll = new Poll();
            $poll->title = request("title");
            $poll->description = request("description");
            $poll->deadline = request("deadline");
            $poll->created_by = auth()->user()->id;
            $poll->save();

            $choices = request("choices");
            foreach ($choices as $choice)
            {
                $c = new Choice();
                $c->choice = $choice;
                $c->poll_id = $poll->id;
                $poll->choices()->save($c);
            }

            DB::commit();
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return $this->respondInvalidData();
        }

        return $poll;
        
    }

    public function destroy($poll_id)
    {
        $poll = Poll::find($poll_id);
        $poll->delete();
    }
    
    public function get()
    {
        return Poll::all();
    }

    public function show($poll_id)
    {
        $poll = Poll::find($poll_id);
        
        return $poll;
    }
}
