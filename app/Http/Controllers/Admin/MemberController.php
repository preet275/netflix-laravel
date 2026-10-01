<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // Show all registered members
    public function index()
    {
        $members = Member::latest()->paginate(10);

        return view('admin.members.index', compact('members'));
    }

    // Approve member
    public function approve(Member $member)
    {

        $member->update([
            'status' => 'approved',
        ]);

        return back();
    }

    // Reject member
    public function reject(Member $member)
    {
        $member->update([
            'status' => 'rejected',
        ]);

        return back();
    }

    // Set member back to pending
    public function pending(Member $member)
    {
        $member->update([
            'status' => 'pending',
        ]);

        return back();
    }
}
