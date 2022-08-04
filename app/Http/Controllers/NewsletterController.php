<?php
namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);
        try {
            //        (new Newsletter())->subscribe(request('email'));  this down
//            $newsletter = new \App\services\Newsletter();
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added'
            ]);
        }
        return redirect('/')->with('success', 'you are signed up newsletter');
    }
}
