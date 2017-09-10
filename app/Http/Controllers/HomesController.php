<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;
use App\Notifications\Trailnotification;
use App\Notifications\TrailQuotationNotification;
use Newsletter;
use Alert;
use App\Http\Requests\ContactUsRequest;
use App\Http\Requests\FeedbackRequest;

class HomesController extends Controller
{
    /*
    *constructor for mailchimp
    */
    /*protected $mailchimp;
    public function __construct()
    {
        $this->mailchimp = new \MailChimp(config('services.mailchimp.api_key'));

    }*/

    /*
    *function to log page hits
    */
    function logpagehit($page)
    {
        $pagehit = new \App\Logs_pagehits;
        $pagehit->page = $page;
        $pagehit->url = $_SERVER['REQUEST_URI'];
        $pagehit->country = 'uganda';//Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $pagehit->created = \Carbon\Carbon::now();
        $pagehit->save();
    }
    /**
     * show the home page
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        //$this->logpagehit('home');
        return view('home');
    }
    
    /**
     * show about us page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutUs()
    {
        //$this->logpagehit('about_us');
        return view('about_us');
    }
    
    /**
     * show contact us page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactUs()
    {
        //$this->logpagehit('contact_us');
        return view('contact_us');
    }
    
    /**
     * display a specific product
     *
     * @param $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function products($product)
    {
        //$this->logpagehit('products');
        return view('products.'.$product);
    }

    /*
    show property page
    */
    public function property()
    {
        return view('property');
    }
    /*
    *show admin page
    */
    public function admin()
    {
        /*$total_per_page_hits = "select page, count(*) stat from logs_website_pagehits group by page order by stat desc, page";
        $hits_in_a_week = "select DAYNAME(created) day,DAYOFMONTH(created) monthdate,MONTHNAME(created) month,YEAR(created) year,page,count(*) stat from logs_website_pagehits GROUP BY DAYNAME(created),DAYOFMONTH(created),MONTHNAME(created),YEAR(created),page order by DAYOFMONTH(created) desc";
        $pagehits = \DB::select($hits_in_a_week);*/
        if(Auth::check()){
            return view('admin.home',compact('pagehits')); 
        }
        return view('auth.login');     
    }
    /*
    *receive sent email from contact form
    */
    public function receiveEmail(ContactUsRequest $request)
    {
        $user = \App\User::first();
        $user->notify(new Trailnotification($request->all()));
        //Alert::success('Thanks: <img src="/img/thumbs-up.jpg">')->html();
        Alert::success('Your email has been successfully sent')->persistent("OK");
        return redirect('/contact-us');
    } 
    /*
    *show company profile
    */
    public function companyProfile()
    {
        $filename = '/companyprofile/Marvella.pdf';
        $path = public_path().$filename;
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/docx',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    } 
    /*
    *request for a quote or need help with software
    */
    public function softwareQuoteForm()
    {
        return view('software_quote_form');
    }  
    /*
    *receives quatation or software request from
    */
    public function receiveQuotation(FeedbackRequest $request)
    {
        $user = \App\User::first();
        $user->notify(new TrailQuotationNotification($request->all()));
        Alert::success('Your feedback has been successfully sent');
        return redirect('/about-us');
    }
    /*
    *subscribe to newsletter
    */
    public function subscribe(Request $request)
    {
        Newsletter::subscribe($request->EMAIL);
        Alert::success('You have successfully subscribed for our newsletter')->persistent("OK");
        return redirect('/');
    }
}
