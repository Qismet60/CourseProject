<?php

namespace App\Http\Controllers;

use App\Comments;
use App\User;
use App\Http\Requests\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComplaintController extends Controller
{
    public function create_post(Complaint $complaint)
    {

        $user = \auth()->user();

        $user = User::find($user->id);

        $user->comments()->create($complaint->validated());

        return response()->json([
            'msg' => 'Şikayətə 24 saat ərzində baxılacaq'
        ]);

    }
}
