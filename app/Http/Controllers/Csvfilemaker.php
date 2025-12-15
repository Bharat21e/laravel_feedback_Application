<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class Csvfilemaker extends Controller
{
    public function csvDownload()
    {
        $fileName = 'feedback_list.csv';

        $feedbacks = Feedback::select(
            'id',
            'user_id',
            'name',
            'email',
            'message',
            'created_at',
            'status'
        )->get();

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $callback = function () use ($feedbacks) {

            $file = fopen('php://output', 'w');

                fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));


            fputcsv($file, [
                'S.No',
                'User ID',
                'Name',
                'Email',
                'Feedback Message',
                'Sent At',
                'Status'
            ]);

            $count = 1;
            foreach ($feedbacks as $row) {
                fputcsv($file, [
                    $count++,
                    $row->user_id,
                    $row->name,
                    $row->email,
                    $row->message,
                    $row->created_at,
                    $row->status
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
