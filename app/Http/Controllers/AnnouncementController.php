<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function showAnnouncements()
    {
        $announcements = Announcement::join('periods', 'announcements.Period_id', '=', 'periods.ID')
            ->select('announcements.ID', 'announcements.Title', 'announcements.Content', 'periods.PeriodName')
            ->get();

        return view('pages_sv.thongbao', compact('announcements'));
    }
    public function showAnnouncement($id)
    {
        $announcement = Announcement::find($id);
        return view('pages_sv.thongbaochitiet', compact('announcement'));
    }
}
