<?php

namespace App\Http\Controllers\Front;
use App\Mail\SendMail; 
use Illuminate\Support\Facades\Mail;

use Illuminate\{
    Http\Request,
    Support\Facades\Session
};

use App\{
    Models\Item,
    Models\Setting,
    Models\Subscriber,
    Helpers\EmailHelper,
    Http\Controllers\Controller,
    Http\Requests\ReviewRequest,
    Http\Requests\SubscribeRequest,
    Repositories\Front\FrontRepository,
    Http\Requests\AuthRequest
};
use App\Helpers\SmsHelper;
use App\Models\Brand;
use App\Models\CampaignItem;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\ChieldCategory;
use App\Models\Fcategory;
use App\Models\HomeCutomize;
use App\Models\Order;
use App\Models\Gallery;
use App\Models\Language;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\TrackOrder;
use App\Models\Franchies;
use App\Models\User;
use App\Models\Exclusivedeal;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Storage;


use function GuzzleHttp\json_decode;

class FrontendController extends Controller
{

    /**
     * Constructor Method.
     *
     * @param  \App\Repositories\Front\FrontRepository $repository
     *
     */
    public function __construct(FrontRepository $repository)
    {
        $this->repository = $repository;
        $setting = Setting::first();
        if($setting->recaptcha == 1){
            Config::set('captcha.sitekey', $setting->google_recaptcha_site_key);
            Config::set('captcha.secret', $setting->google_recaptcha_secret_key);
        }

        $this->middleware('localize');

    }

// -------------------------------- HOME ----------------------------------------

	public function index()
	{
        $setting = Setting::first();


            $home_customize = HomeCutomize::first();

            // feature category
            $feature_category_ids = json_decode($home_customize->feature_category,true);
            $feature_category_title = $feature_category_ids['feature_title'];
            $feature_category = [];
                for($i=1;$i<=4;$i++){
                    if(!in_array($feature_category_ids['category_id'.$i],$feature_category)){
                        if($feature_category_ids['category_id'.$i]){
                            $feature_category[] = $feature_category_ids['category_id'.$i];
                        }
                    }
                }

            $feature_categories = [];
            foreach($feature_category as $key => $cat){
                $feature_categories[] = Category::findOrFail($cat);
            }
            $feature_category_items = [];
            if(count($feature_categories)){
                $index = '';
                foreach($feature_categories as $key => $data){
                   if($data->id == $feature_category_ids['category_id1']){
                       $index = $key;
                   }
                }

                $category = $feature_categories[$index]->id;
                $subcategory = $feature_category_ids['subcategory_id1'];
                $childcategory = $feature_category_ids['childcategory_id1'];

                $feature_category_items = Item::when($category, function ($query, $category) {
                    return $query->where('category_id', $category);
                })
                ->when($subcategory, function ($query, $subcategory) {
                    return $query->where('subcategory_id', $subcategory);
                })
                ->when($childcategory, function ($query, $childcategory) {
                    return $query->where('childcategory_id', $childcategory);
                })
                ->whereStatus(1)->take(10)->orderby('id','desc')->get();
            }


            // feature category end
            $home_customize = HomeCutomize::first();
            // popular category

            $popular_category_ids = json_decode($home_customize->popular_category,true);
            $popular_category_title = $popular_category_ids['popular_title'];

            $item1 = $popular_category_ids['category_id1'];
            // dd($item1);
            $item = Item::where('id', $item1)->first();
            // dd($item);

            // $popular_category = [];
            //     for($i=1;$i<=4;$i++){
            //         if(!in_array($popular_category_ids['category_id'.$i],$popular_category)){
            //             if($popular_category_ids['category_id'.$i]){
            //                 $popular_category[] = $popular_category_ids['category_id'.$i];
            //             }
            //         }
            //     }
            //     $popular_categories = [];
            //     foreach($popular_category as $key => $cat){
            //         $popular_categories[] = Category::findOrFail($cat);
            //     }

            // $popular_category_items = [];

            // if(count($popular_categories) > 0){
            //     $index = '';
            //     foreach($popular_categories as $key => $data){
            //        if($data->id == $popular_category_ids['category_id1']){
            //            $index = $key;
            //        }
            //     }
            $pupular_cateogry_home4 = null;
            if($setting->theme == 'theme4'){
                $pupular_cateogries_home4 = json_decode($home_customize->home_4_popular_category,true);
                $pupular_cateogry_home4 = [];
                foreach($pupular_cateogries_home4 as $home4category){
                    $pupular_cateogry_home4[] = Category::with('items')->findOrFail($home4category);
                }
            }

            // dd($pupular_cateogry_home4);
            // $category = $popular_categories[$index]->id;
            // $subcategory = $popular_category_ids['subcategory_id1'];
            // $childcategory = $popular_category_ids['childcategory_id1'];

            // $popular_category_items = Item::when($category, function ($query, $category) {
            //     return $query->where('category_id', $category);
            // })
            // ->when($subcategory, function ($query, $subcategory) {
            //     return $query->where('subcategory_id', $subcategory);
            // })
            // ->when($childcategory, function ($query, $childcategory) {
            //     return $query->where('childcategory_id', $childcategory);
            // })
            // ->whereStatus(1)->get();
            // }





            $two_column_category_ids = json_decode($home_customize->two_column_category,true);

            $two_column_category = [];
                for($i=1;$i<=3;$i++){
                    if(isset($two_column_category_ids['category_id'.$i]) && !in_array($two_column_category_ids['category_id'.$i],$two_column_category)){
                        if($two_column_category_ids['category_id'.$i]){
                            $two_column_category[] = $two_column_category_ids['category_id'.$i];
                        }
                    }
                }

            $two_column_categories = Category::whereStatus(1)->whereIn('id',$two_column_category)->orderby('id','desc')->get();

            $two_column_category_items1 = [];
            if($two_column_category_ids['category_id1']){
                $two_column_category_items1 = Item::where('category_id',$two_column_category_ids['category_id1'])->orderby('id','desc')->whereStatus(1)->take(10)->get();
            }
            if($two_column_category_ids['subcategory_id1']){
                $two_column_category_items1 = Item::where('subcategory_id',$two_column_category_ids['subcategory_id1'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id1'])->orderby('id','desc')->take(10)->get();
            }
            if($two_column_category_ids['childcategory_id1']){
                $two_column_category_items1 = Item::where('childcategory_id',$two_column_category_ids['childcategory_id1'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id1'])->orderby('id','desc')->take(10)->get();
            }

            $two_column_category_items2 = [];
            if($two_column_category_ids['category_id2']){
                $two_column_category_items2 = Item::where('category_id',$two_column_category_ids['category_id2'])->orderby('id','desc')->whereStatus(1)->take(10)->get();
            }
            if($two_column_category_ids['subcategory_id2']){
                $two_column_category_items2 = Item::where('subcategory_id',$two_column_category_ids['subcategory_id2'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id2'])->orderby('id','desc')->take(10)->get();
            }
            if($two_column_category_ids['childcategory_id2']){
                $two_column_category_items2 = Item::where('childcategory_id',$two_column_category_ids['childcategory_id2'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id2'])->orderby('id','desc')->take(10)->get();
            }

            $two_column_category_items3 = [];
            if(isset($two_column_category_ids['category_id3'])){
                if($two_column_category_ids['category_id3']){
                $two_column_category_items3 = Item::where('category_id',$two_column_category_ids['category_id3'])->orderby('id','desc')->whereStatus(1)->take(10)->get();
            }
            if($two_column_category_ids['subcategory_id3']){
                $two_column_category_items3 = Item::where('subcategory_id',$two_column_category_ids['subcategory_id3'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id3'])->orderby('id','desc')->take(10)->get();
            }
            if($two_column_category_ids['childcategory_id3']){
                $two_column_category_items3 = Item::where('childcategory_id',$two_column_category_ids['childcategory_id3'])->whereStatus(1)->where('category_id',$two_column_category_ids['category_id3'])->orderby('id','desc')->take(10)->get();
            }
            }
            



            $two_column_categoriess = [];
            foreach($two_column_categories as $key => $two_category){
                if($key ==0){
                    $two_column_categoriess[$key] ['name'] = $two_category;
                    $two_column_categoriess[$key] ['items'] = $two_column_category_items1;
                }elseif($key==1){
                    $two_column_categoriess[$key] ['name'] = $two_category;
                    $two_column_categoriess[$key] ['items'] = $two_column_category_items2;
                }else{
                    $two_column_categoriess[$key] ['name'] = $two_category;
                    $two_column_categoriess[$key] ['items'] = $two_column_category_items3;
                }

            }


            if($setting->theme == 'theme1'){
                $sliders = Slider::where('home_page','theme1')->get();
            }elseif($setting->theme == 'theme2'){
                $sliders = Slider::where('home_page','theme2')->get();
            }elseif($setting->theme == 'theme3'){
                $sliders = Slider::where('home_page','theme3')->get();
            }else{
                $sliders = Slider::where('home_page','theme4')->get();
            }

            $galleries = Gallery::all();
            $exclusivedeal = Exclusivedeal::orderBy('id','desc')->get();

              // Fetch all products or any logic to get the product list
            $productsHome = Item::all();

        // Show details of the first product by default
        $firstProduct = $productsHome->first();
        $details = $firstProduct ? $this->getProductDetails($firstProduct->slug) : null;
        // $item = Item::first();
        $allCat = Category::all();

        // $attr_item_ids = [];
        // if($request->attribute){
        //     $attrubutes_get = Attribute::where('name',$request->attribute)->get();
        //     foreach($attrubutes_get as $attr_item_id){
        //         $attr_item_ids[] = $attr_item_id->item_id;
        //     }
        // }

        $attrubutes_check =[];
       
        $options = AttributeOption::groupby('name')->select('attribute_id','name','id','keyword')->get();
        
        foreach($options as $option){
            if(!in_array(Attribute::withCount('options')->findOrFail($option->attribute_id)->keyword,$attrubutes_check)){
                $attrubutes_check[] = Attribute::withCount('options')->findOrFail($option->attribute_id)->keyword;
            }
        }

        
        $attrubutes = [];

        foreach($attrubutes_check as $attr_new_get){
            $attrubutes[] = Attribute::whereKeyword($attr_new_get)->first();
        }

        // $attr = [];

        // $attr = $attrubutes[1];

        // dd($attrubutes);



            // {"title1":"Watchtt","subtitle1":"50% OFF","url1":"#","title2":"Man","subtitle2":"40% OFF","url2":"#","img1":"1637766462banner-h2-4-1.jpeg","img2":"1637766420banner-h2-4-1.jpeg"}

            return view('front.index',[
                'hero_banner'   => $home_customize->hero_banner != '[]' ? json_decode($home_customize->hero_banner,true) : null,
                'banner_first'   => json_decode($home_customize->banner_first,true),
                'sliders'  => $sliders,
                'allCat' => $allCat,
                'details' => $details,
                'attrubutes' => $attrubutes,
                'galleries' => $galleries,
                'exclusivedeal' =>$exclusivedeal,
                'campaign_items' => CampaignItem::with('item')->whereStatus(1)->whereIsFeature(1)->orderby('id','desc')->get(),
                'services' => Service::orderby('id','desc')->get(),
                'posts'    => Post::with('category')->orderby('id','desc')->take(8)->get(),
                'brands'   => Brand::whereStatus(1)->get(),
                'banner_secend'  => json_decode($home_customize->banner_secend,true),
                'banner_third'   => json_decode($home_customize->banner_third,true),
                'brands'   => Brand::whereStatus(1)->whereIsPopular(1)->get(),
                'products' => Item::with('category')->whereStatus(1),
                'home_page4_banner' => json_decode($home_customize->home_page4,true),
                'pupular_cateogry_home4' => isset($pupular_cateogry_home4) ? $pupular_cateogry_home4 : [],
                // feature category
                'feature_category_items' => $feature_category_items,
                'feature_categories' => $feature_categories,
                'feature_category_title' => $feature_category_title,
                'item'=> $item,

                // feature category
                // 'popular_category_items' => $popular_category_items,
                // 'popular_categories' => $popular_categories,
                'popular_category_title' => $popular_category_title,

                // two column category
                'two_column_categoriess' => $two_column_categoriess,

            ]);
	}





    public function review_submit(){
        return view('back.overlay.index');
    }

    public function slider_o_update(Request $request){
        $setting = Setting::find(1);
        $setting->overlay = $request->slider_overlay;
        $setting->save();
        return redirect()->back();
    }

    public function view($id)
    {
        $product = Item::findOrFail($id);
        return response()->json($product);
    }


    public function showing($slug)
    {
        // Fetch details of the particular product
        $details = $this->getProductDetails($slug);

        return response()->json($details);
    }

    private function getProductDetails($slug)
    {
        // Logic to get details of the product from the database
        $product = Item::where('slug', $slug)->first();

        // Return details as an associative array
        return $product ? [
            'name' => $product->name,
            // 'description' => $product->description,
            // Add more details as needed
        ] : null;
    }
    


    public function product($slug)
    {

        $item = Item::with('category')->whereStatus(1)->whereSlug($slug)->firstOrFail();
        $video = explode('=',$item->video);
        return view('front.catalog.product',[
            'item'          => $item,
            'reviews'       => $item->reviews()->where('status',1)->paginate(3),
            'galleries'     => $item->galleries,
            'video'         => $item->video ? end($video) : '',
            'sec_name'      => isset($item->specification_name) ? json_decode($item->specification_name,true) : [],
            'sec_details'   => isset($item->specification_description) ? json_decode($item->specification_description,true) : [],
            'attributes'    => $item->attributes,
            'related_items' => $item->category->items()->whereStatus(1)->where('id','!=',$item->id)->take(8)->get()
        ]);
    }




    public function brands()
    {
        if(Setting::first()->is_brands == 0){
            return back();
        }
        return view('front.brand',[
            'brands' => Brand::whereStatus(1)->get()
        ]);
    }


	public function blog(Request $request)
	{

        $month = $request->input('month', date('m'));
        $year = $request->input('year', date('Y'));

        $blogs = $this->getBlogsByCurrentMonth();
        // dd($blogs);

        $blogOneData = [];
        $blogTwoData = [];
        $blogThreeData = [];
        $blogFourData = [];
        $blogFiveData = [];
        $blogSixData = [];
        $blogSevenData = [];

        foreach ($blogs as $blog) {
            if (($blog->blog == 1)) {
                $blogOneData[] = $blog; // Store blog with 'blog' value 2
            } elseif (($blog->blog == 2)) {
                $blogTwoData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 3) {
                $blogThreeData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 4) {
                $blogFourData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 5) {
                $blogFiveData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 6) {
                $blogSixData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 7) {
                $blogSevenData[] = $blog; // Store blog with 'blog' value 7
            }
            // Add more conditions as needed for other blog values
        }

        // dd($blogTwoData[0]->photo);
        $photo2 = null;
        $photo1 = null;
        $title1 = null;
        $title2 = null;
        $details1 = null;
        $details2 = null;
        

        $title3 = null;
        $photo3 = null;
        $details3 = null;
        $title4 = null;
        $photo4 = null;
        $details4 = null;

        $title5 = null;
        $photo5 = null;
        $details5 = null;

        $title6 = null;
        $photo6 = null;
        $details6 = null;

        $title7 = null;
        $photo7 = null;
        $details7 = null;
        $date1 = null;
        $date2 = null;
        $date3 = null;
        $date4 = null;
        $date5 = null;
        $date6 = null;
        $date7 = null;

        if(!empty($blogTwoData)){
            $photo2 = $blogTwoData[0]->photo;
            $title2 = $blogTwoData[0]->title;
            $details2 = $blogTwoData[0]->details;
            $photo2 = trim($photo2, '"[]"');
            $photo2 = rtrim($photo2, '&quot;');
             $date2 = date('d-m-Y', strtotime($blogTwoData[0]->created_at));
        }

        
        if(!empty($blogOneData)){
            $photo1 = $blogOneData[0]->photo;
            $title1 = $blogOneData[0]->title;
            $details1 = $blogOneData[0]->details;
             $photo1 = trim($photo1, '"[]"');
             $photo1 = rtrim($photo1, '&quot;');
             $date1 =  date('d-m-Y', strtotime($blogOneData[0]->created_at)) ;
        }

        if(!empty($blogThreeData)){
            $photo3 = $blogThreeData[0]->photo;
            $title3 = $blogThreeData[0]->title;
            $details3 = $blogThreeData[0]->details;
             $photo3 = trim($photo3, '"[]"');
             $photo3 = rtrim($photo3, '&quot;');
              $date3 = date('d-m-Y', strtotime($blogThreeData[0]->created_at)) ;
        }

        if(!empty($blogFourData)){
            $photo4 = $blogFourData[0]->photo;
            $title4 = $blogFourData[0]->title;
            $details4 = $blogFourData[0]->details;
             $photo4 = trim($photo4, '"[]"');
             $photo4 = rtrim($photo4, '&quot;');
              $date4 = date('d-m-Y', strtotime($blogFourData[0]->created_at)) ;
        }

        if(!empty($blogFiveData)){
            $photo5 = $blogFiveData[0]->photo;
            $title5 = $blogFiveData[0]->title;
            $details5 = $blogFiveData[0]->details;
             $photo5 = trim($photo5, '"[]"');
             $photo5 = rtrim($photo5, '&quot;');
              $date5 = date('d-m-Y', strtotime($blogFiveData[0]->created_at)) ;
        }


        if(!empty($blogSixData)){
            $photo6 = $blogSixData[0]->photo;
            $title6 = $blogSixData[0]->title;
            $details6 = $blogSixData[0]->details;
             $photo6 = trim($photo6, '"[]"');
             $photo6 = rtrim($photo6, '&quot;');
              $date6 = date('d-m-Y', strtotime( $blogSixData[0]->created_at));
        }

        if(!empty($blogSevenData)){
            $photo7 = $blogSevenData[0]->photo;
            $title7 = $blogSevenData[0]->title;
            $details7 = $blogSevenData[0]->details;
             $photo7 = trim($photo7, '"[]"');
             $photo7 = rtrim($photo7, '&quot;');
              $date7 = date('d-m-Y', strtotime( $blogSevenData[0]->created_at)) ;
        }

        // dd($blogOneData);
        
        $currentYear = date('Y');
        $currentMonth = date('m');


        return view('front.bloog', [
            'blogTwoData' => $blogTwoData,
            'blogOneData' => $blogOneData,
            'blogThreeData' => $blogThreeData,
            'blogFourData' => $blogFourData,
            'blogFiveData' => $blogFiveData,
            'blogSixData' => $blogSixData,
            'blogSevenData' => $blogSevenData,
            'title1' => $title1,
            'title2' => $title2,
            'photo2' => $photo2,
            'photo1' => $photo1,
            'details1' => $details1,
            'details2' => $details2,
            'title3' => $title3,
            'photo3' => $photo3,
            'details3' => $details3,
            'title4' => $title4,
            'photo4' => $photo4,
            'details4' => $details4,
            'title5' => $title5,
            'photo5' => $photo5,
            'details5' => $details5,
            'title6' => $title6,
            'photo6' => $photo6,
            'details6' => $details6,
            'title7' => $title7,
            'photo7' => $photo7,
            'details7' => $details7,
            'currentMonth' => $currentMonth,
            'currentYear' => $currentYear,
            'date1' => $date1,
            'date2' => $date2,
            'date3' => $date3,
            'date4' => $date4,
            'date5' => $date5,
            'date6' => $date6,
            'date7' => $date7,
        ]);

	}

    public function blogDetails($id)
    {
        $items = $this->repository->displayPost($id);

        return view('front.blog.show',[
            'post' => $items['post'],
            'categories' => $items['categories'],
            'tags' => $items['tags'],
            'posts' => $items['posts'],

        ]);
    }


// -------------------------------- FAQ ----------------------------------------

	public function faq()
	{
        if(Setting::first()->is_faq == 0){
            return back();
        }
        $fcategories =  Fcategory::whereStatus(1)->withCount('faqs')->latest('id')->get();
		return view('front.faq.index',['fcategories' => $fcategories]);
	}

	public function show($slug)
	{
        if(Setting::first()->is_faq == 0){
            return back();
        }
        $category =  Fcategory::whereSlug($slug)->first();
		return view('front.faq.show',['category' => $category]);
	}

// -------------------------------- FAQ ----------------------------------------

// -------------------------------- CAMPAIGN ----------------------------------------

	public function compaignProduct()
	{
        if(Setting::first()->is_campaign == 0){
            return back();
        }
        $compaign_items =  CampaignItem::whereStatus(1)->orderby('id','desc')->get();
		return view('front.campaign',['campaign_items' => $compaign_items]);
	}

// -------------------------------- CAMPAIGN ----------------------------------------


// -------------------------------- CURRENCY ----------------------------------------
    public function currency($id){
        Session::put('currency',$id);
        return back();
    }
// -------------------------------- CURRENCY ----------------------------------------


// -------------------------------- LANGUAGE ----------------------------------------
    public function language($id){
        Session::put('language',$id);
        return back();
    }
// -------------------------------- LANGUAGE ----------------------------------------


// -------------------------------- FAQ ----------------------------------------

public function page($slug)
{
    return view('front.page',[
        'page' => $this->repository->displayPage($slug)
    ]);
}

// -------------------------------- CONTACT ----------------------------------------

	public function contact()
	{
        if(Setting::first()->is_contact == 0){
            return back();
        }
		return view('front.contact');
	}

    public function contactEmail(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'required|max:50',
            'message' => 'required|max:250',
        ]);
        $input = $request->all();

        $setting = Setting::first();
        $name  = $input['first_name'].' '.$input['last_name'];
        $subject = "Email From ".$name;
        $to = $setting->contact_email;
        $phone = $request->phone;
        $from = $request->email;
        $msg = "Name: ".$name."<br/>Email: ".$from."<br/>Phone: ".$phone."<br/>Message: ".$request->message;

        $emailData = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $email = new EmailHelper();
        $email->sendCustomMail($emailData);
        Session::flash('success',__('Thank you for contacting with us, we will get back to you shortly.'));
        return redirect()->back();
    }



    public function b2bsubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
        

        // update user table

            $input = $request->all();

            $user = new User;
            $input['password'] = bcrypt($request['password']);
            $input['email'] = $input['email'];
            $input['first_name'] = '';
            $input['last_name'] = '';
            $input['phone'] = '';
            $input['b2bstatus'] = 1;
            $input['activestatus'] = 0;
            // $verify = Str::random(6);
            // $input['email_token'] = $verify;
            $user->fill($input)->save();


            // Mail Working
            $to = $request->input('email');
            $name = $request->input('first_name') . " " . $request->input('last_name');
            $subject = "Registration Email";
            $data =["name" => $name,"message"=>"Email Successful","mail_type" => "User"];
            $email = new SendMail($subject,  $data);
            try{
                $mail_success = Mail::to($to)->send($email);
                if(empty(Mail::failures())){
                $adminto = 'admin@block55.in';
                $admindata =["name" => $name,"message"=>"Registration Successful", "mail" => $request->input('email'),"mail_type"=> "Admin"];
                $adminemail = new SendMail($subject,  $admindata);
                $mail_success = Mail::to($adminto)->send($adminemail);
                }
            }
            catch(Exception $e){
                echo $e->message;
            }


           

        Session::flash('success',__('Account Register Successfully please wait for admin approval '));
        return redirect()->back();
    }
    public function vaultsubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
        

        // update user table
       
            $input = $request->all();
            if($input['red_key']==='B55 024 25 RDY17')
            {
            $user = new User;
            $input['password'] = '';
            $input['email'] = $input['email'];
            $input['first_name'] = $input['first_name'];
            $input['last_name'] =  $input['last_name'];
            $input['phone'] = '';
            $input['b2bstatus'] = 0;
            $input['vault'] = 1;
            $input['activestatus'] = 0;
            // $verify = Str::random(6);
            // $input['email_token'] = $verify;
            $user->fill($input)->save();


            // Mail Working
            $to = $request->input('email');
            $name = $request->input('first_name') . " " . $request->input('last_name');
            $subject = "Registration Email";
            $data =["name" => $name,"message"=>"Email Successful","mail_type" => "User"];
            $email = new SendMail($subject,  $data);
            try{
                $mail_success = Mail::to($to)->send($email);
                if(empty(Mail::failures())){
                $adminto = 'admin@block55.in';
                $admindata =["name" => $name,"message"=>"Registration Successful", "mail" => $request->input('email'),"mail_type"=> "Admin"];
                $adminemail = new SendMail($subject,  $admindata);
                $mail_success = Mail::to($adminto)->send($adminemail);
                }
            }
            catch(Exception $e){
                echo $e->message;
            }
            Session::flash('success',__('Account Register Successfully please wait for admin approval '));

        }
        else{
            Session::flash('success',__('Account Register Failed please Check red key '));
        }
      
           

       
        return redirect()->back();
    }

// -------------------------------- REVIEW ----------------------------------------

    public function reviews()
    {
        return view('front.reviews');
    }

    public function topReviews()
    {
        return view('front.top-reviews');
    }

    public function reviewSubmit(ReviewRequest $request)
    {
        return response()->json($this->repository->reviewSubmit($request));
    }



// -------------------------------- SUBSCRIBE ----------------------------------------

    public function subscribeSubmit(SubscribeRequest $request)
    {
        Subscriber::create($request->all());
        return response()->json(__('You Have Subscribed Successfully.'));
    }


    // ---------------------------- TRACK ORDER ----------------------------------------//
    public function trackOrder()
    {
        return view('front.track_order');
    }

    public function track(Request $request)
    {
        $order = Order::where('transaction_number',$request->order_number)->first();

        if($order){
            return view('user.order.track',[
                'numbers' => 3,
                'track_orders' => TrackOrder::whereOrderId($order->id)->get()->toArray()
            ]);
        }else{
            return view('user.order.track',[
                'numbers' => 3,
                'error' => 1,
            ]);
        }
    }


    public function maintainance()
    {
        $setting = Setting::first();
        if($setting->is_maintainance == 0){
            return redirect(route('front.index'));
        }
        return view('front.maintainance');
    }



    public function finalize()
    {
        return redirect(route('front.index'));
    }

    public function replacement(){
        return view('front.replacement');
    }
    public function privacy(){
        return view('front.privacy');
    }

    // ---------------------------- FORM CONTACT ----------------------------------------//

    public function formcontact(){
        return view('front.form');
    }

    // public function franchies(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'file|mimes:zip|max:5000',

    //     ]);
    //     $input = $request->all();

    //     if($request->has('file')){
    //         $file = $request->file;
    //         $name = time().$file->getClientOriginalName();
    //         $sign->move('assets/files/',$name);
    //         $input['file'] = $name;
    //     }
    //     Franchies::create($input);

    // }
    
    
    public function formcontroller(Request $request){
        // dd($request->all());
        // $formData = Storage::putFile('sign', $request->file('sign'));
        // dd($formData);
        // $filename = '';
        // if($request->hasFile('sign')){
        //     $filename = $request->getSchemeAndHttpsHost()
        // }
        //     if ($request->hasFile('sign')) {
        //     $file = $request->file('sign');
        //         dd($formData, $file); 
        // }
    
        // dd($formData);        $path->save();

        $request->validate([
            // 'file' => 'file|mimes:zip|max:5000',
            'pr_info_name' => 'required|max:250',
            'email' => 'required|max:250',
            'mobile_telephone' => 'required|max:10',
            // 'pincode' => 'required|max:6',
            'city' => 'required|max:255',
            // 'street' => 'required|max:255',
            // 'state' => 'required|max:255',
            // 'current_bussiness' => 'required|max:255',
            // 'what_type' => 'required|max:255',
            'business_describe' => 'required|max:255',
            // 'owned_bussiness' => 'required|max:255',
            // 'been_franchies' => 'required|max:255',
            // 'location_info_city' => 'required|max:255',
            // 'existing_commercial' => 'required|max:255',
            // 'retail_spacearea' => 'required|max:255',
            // 'demographics_location' => 'required|max:255',
            // 'location_preference' => 'required|max:255',
            // 'desc_shop_location' => 'required|max:255',
            // 'frontage_retail_space' => 'required|max:10',
            // 'declaration_name' => 'required|max:25',
            // 'checkbox' => 'required|max:25',
            // 'date' => 'required|max:25'
            "investment"=>'required|max:100'

        ]);

        
        $formData = new Franchies();
        $formData->pr_info_name = $request->input('pr_info_name');
        $formData->email = $request->input('email');
        $formData->mobile_telephone = $request->input('mobile_telephone');
        // $formData->pincode = $request->input('pincode');
        $formData->city = $request->input('city');
        // $formData->street = $request->input('street');
        // $formData->state = $request->input('state');
        // $formData->current_bussiness = $request->input('current_bussiness');
        // $formData->what_type = $request->input('what_type');
        $formData->business_describe = $request->input('business_describe');
        // $formData->owned_bussiness = $request->input('owned_bussiness');
        // $formData->been_franchies = $request->input('been_franchies');
        // $formData->location_info_city = $request->input('location_info_city');
        // $formData->existing_commercial = $request->input('existing_commercial');
        // $formData->retail_spacearea = $request->input('retail_spacearea');
        // $formData->demographics_location = $request->input('demographics_location');
        // $formData->location_preference = $request->input('location_preference');
        // $formData->desc_shop_location = $request->input('desc_shop_location');
        // $formData->frontage_retail_space = $request->input('frontage_retail_space');
        // $formData->checkbox = $request->input('checkbox');
        // $formData->sign = Storage::putFile('sign', $request->file('sign'));
        // $formData->declaration_name = $request->input('declaration_name');
        // $formData->date = $request->input('date');  
        $formData->investment = $request->input('investment');
        $formData->is_delete = 0;
     
        $formData->save();

        return view('front.form');

    }
    

        // ---------------------------- Update ----------------------------------------//
        public function updateformcontact(){
            return view('front.crudformoperation.update');
        }


        public function about()
  {
      return view('front.about');
  }

  public function getBlogsByCurrentMonth()
  {
      // Get current year and month
      $currentYear = date('Y');
      $currentMonth = date('m');

      // Get the first and last day of the current month
      $startDate = Carbon::now()->startOfMonth();
      $endDate = Carbon::now()->endOfMonth();

      // Retrieve blog posts within the current month
      $blogs = Post::whereBetween('created_at', [$startDate, $endDate])->get();

      return $blogs;
  }

  private function getBlogsByMonth($year, $month)
  {
      $startDate = Carbon::createFromDate($year, $month)->startOfMonth();
      $endDate = Carbon::createFromDate($year, $month)->endOfMonth();
      return Post::whereBetween('created_at', [$startDate, $endDate])->get();
  }

  public function bloog(Request $request)
  {

    

    $month = $request->input('month', date('m'));
        $year = $request->input('year', date('Y'));

        $blogs = $this->getBlogsByCurrentMonth();
        // dd($blogs);

        $blogOneData = [];
        $blogTwoData = [];
        $blogThreeData = [];
        $blogFourData = [];
        $blogFiveData = [];
        $blogSixData = [];
        $blogSevenData = [];

        foreach ($blogs as $blog) {
            if (($blog->blog == 1)) {
                $blogOneData[] = $blog; // Store blog with 'blog' value 2
            } elseif (($blog->blog == 2)) {
                $blogTwoData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 3) {
                $blogThreeData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 4) {
                $blogFourData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 5) {
                $blogFiveData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 6) {
                $blogSixData[] = $blog; // Store blog with 'blog' value 7
            } elseif ($blog->blog == 7) {
                $blogSevenData[] = $blog; // Store blog with 'blog' value 7
            }
            // Add more conditions as needed for other blog values
        }

        // dd($blogTwoData[0]->photo);
        $photo2 = null;
        $photo1 = null;
        $title1 = null;
        $title2 = null;
        $details1 = null;
        $details2 = null;
       
        if(!empty($blogTwoData)){
            $photo2 = $blogTwoData[0]->photo;
            $title2 = $blogTwoData[0]->title;
            $details2 = $blogTwoData[0]->details;
            $photo2 = trim($photo2, '"[]"');
            $photo2 = rtrim($photo2, '&quot;');
        }

        
        if(!empty($blogOneData)){
            $photo1 = $blogOneData[0]->photo;
            $title1 = $blogOneData[0]->title;
            $details1 = $blogOneData[0]->details;
        $photo1 = trim($photo1, '"[]"');
        $photo1 = rtrim($photo1, '&quot;');
        }

        // dd($blogOneData);
        
        $currentYear = date('Y');
        $currentMonth = date('m');


        return view('front.bloog', [
            'blogTwoData' => $blogTwoData,
            'blogOneData' => $blogOneData,
            'blogThreeData' => $blogThreeData,
            'blogFourData' => $blogFourData,
            'blogFiveData' => $blogFiveData,
            'blogSixData' => $blogSixData,
            'blogSevenData' => $blogSevenData,
            'title1' => $title1,
            'title2' => $title2,
            'photo2' => $photo2,
            'photo1' => $photo1,
            'details1' => $details1,
            'details2' => $details2,
            'currentMonth' => $currentMonth,
            'currentYear' => $currentYear
        ]);
  }
  public function b2b(){
    return view('front.b2b');
    }
    public function vault(){
        return view('front.vault');
    }
        
}

