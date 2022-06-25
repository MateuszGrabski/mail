<?php

namespace App\Http\Controllers;

use App\Jobs\MailJob;
use App\Mail\EmailForQueuing;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Mail;
use App\Http\Requests\MailCreateValidationRequest;

class MailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $mails = Mail::all();
        return view('mail.index', [
            'mails' => $mails
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MailCreateValidationRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MailCreateValidationRequest $request)
    {

        $request->validated();

        // save mail in database
        $mail = new Mail;
        $mail->receiver = $request->input('receiver');
        $mail->title = $request->input('title');
        $mail->content = $request->input('content');
        $mail->created_at = time();
        $mail->updated_at = time();
        $mail->save();

        // send mail
        MailJob::dispatch($mail);

        return redirect()->back()->with('message',"Mail został wysłany");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id)
    {
        $mail = Mail::find($id);
        return view('mail.show', [
            'mail' => $mail
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(int $id)
    {
        $mail = Mail::find($id);
        $mail->delete();

        return redirect('/mail');
    }
}
