<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\armrestbusiness;
class armrestshop extends Controller
{

    static function carsnamelist() {
      $lists=armrestbusiness::show();
      $goods=armrestbusiness::showmodels ();
      $pictures=armrestbusiness::showarmrestpicture ();
      $countmodels=armrestbusiness::showcountmodels();
      return view ("shop")->with(["lists"=>$lists,
                                        "goods"=>$goods,
                                         "pictures"=>$pictures,
                                        "countmodels"=>$countmodels]);
    }

    public function showarmrest($id) {
        $lists=armrestbusiness::show();
        $countmodels=armrestbusiness::showcountmodels();
        $manufacturername = armrestbusiness::showonemodel($id);
        $pictures=armrestbusiness::showarmrest($id);
    return view('shop-single-product')->with("lists",$lists)->with("countmodels",$countmodels)->with("id", $id)->with("pictures", $pictures)->with("manufacturername", $manufacturername);
    }

    //For viewing models without reload window
    public function getajax() {
       // $id = $_POST['id'];
        $test = armrestbusiness::showmodels ();;
       // $result = $test->getData($id);
        $result=$test;
        $html=1;
        /*foreach($result as $row)
        {
            $html =	'<p>Новый контент</p>.'.
                '<tr>
                 <td>' . $row->name . '</td>' .
                '<td>' . $row->address . '</td>' .
                '<td>' . $row->age . '</td>' .
                '</tr>';
        }*/
        return $html;
    }
    public function showmodels($id)
    {
        $lists = armrestbusiness::show();
        $countmodels = armrestbusiness::showcountmodels();
        $pictures = armrestbusiness::showonemanufacturermodels($id);
        $manufacturername=armrestbusiness::showmanufacturername ($id);
        return view('shop-one-manufacturer')->with("lists", $lists)->with("countmodels", $countmodels)->with("id", $id)->with("pictures", $pictures)->with("manufacturername", $manufacturername);
    }

    public function contacts() {
        return view('contact-2');
    }

    public function contacts3() {
        return view('contact-3');
    }

    public function validaterequest (Request $request) {
        $validator =Validator::make($request->all(), [
            'phonenumber' => 'required|digits:10',

        ],
            [
                'phonenumber.required' => 'Нам нужен номер вашего телефона, чтобы оперативно ответить на запрос',
                'phonenumber.digits' => 'Пожалуйста введите номер телефона в 10-значном формате, пожалуйста',
            ]);

        if ($validator->fails()) {
            return redirect('/contacts')
                ->withErrors($validator)
                ->withInput();
        } else {
            flash()->overlay('Ваша заявка принята. Мы вам перезвоним через несколько минут','Начинаем сотрудничать');
            armrestshop::send_mail($request);
            return redirect ('/home-1');
        }
    }

    public function validaterequest3 (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phonenumber' => 'required|digits:10',
            'automaker' => 'required|min:2',
            'automodel' => 'required|min:1',
            'vin' => 'required|min:11|max:17',
            'description' => 'required|min:3',
            'engine' => 'required|max:5',
            'Year' => 'required|min:2',
            'Artikul' => 'max:50',
        ],
            [
                'phonenumber.required' => 'Нам нужен номер вашего телефона, чтобы оперативно ответить на запрос',
                'phonenumber.digits' => 'Необходимо ввести номер телефона в 10-значном формате',
                'automaker.required' => 'Необходимо ввести название автопроизводителя',
                'automaker.min' => 'Некорректно введено название автопроизводителя',
                'automodel.required' => 'Необходимо ввести название авто',
                'automodel.min' => 'Необходимо ввести корректно название авто',
                'vin.required' => 'Необходимо ввести VIN',
                'vin.min' => 'Некорректный VIN',
                'vin.max' => 'Некорректный VIN',
                'description.required' => 'Необходимо ввести описание автозапчасти',
                'description.min' => 'Некорректное описание автозапчасти',
                'engine.required' => 'Необходимо ввести объем двигателя',
                'engine.max' => 'Некорректный объем двигателя',
                'Year.required' => 'Необходимо ввести год выпуска вашего авто',
                'Year.min' => 'Некорректный год выпуска вашего авто',
                'Artikul.max' => 'Введите корректно артикул автозапчасти, пожалуйста',
            ]);

        if ($validator->fails()) {
            return redirect('/contact-3')
                ->withErrors($validator)
                ->withInput();
        } else {
            flash()->overlay('Ваша заявка принята. Мы вам перезвоним через несколько минут','Начинаем сотрудничать');
            armrestshop::send_mail_autopart($request);
            return redirect ('/home-1');
        }
    }
    static function send_mail_autopart (Request $request) {
        $myrequest = $request->all();
        $das=['email'=>'alexeymi9@rambler.ru',
            'myname'=>'Alexey'];
        Mail::send('emails.autopartrequest', ['myrequest'=>$myrequest], function ($m) use ($das) {
            $m->from('avtobox@app.com', 'Avtobox');
            $m->to($das['email'], $das['myname'])->subject('Новый запрос!');
        });
        return true;
    }

    static function send_mail (Request $request) {
        $myrequest = $request->all();
        $das=['email'=>'alexeymi9@rambler.ru',
            'myname'=>'Alexey'];
        Mail::send('emails.newcustomerrequest', ['myrequest'=>$myrequest], function ($m) use ($das) {
            $m->from('avtobox@app.com', 'Avtobox');
            $m->to($das['email'], $das['myname'])->subject('Новый запрос!');
        });
        return true;
    }
    public function sitemap()
    {
       $posts = armrestbusiness::showmodels();
        return response()->view('sitemapp',compact('posts'))->header('Content-Type', 'text/xml');
    }

}
