<?php

namespace App\Http\Controllers;

use App\Http\Traits\lang;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    use lang;

    protected $lang;

    public function __construct()
    {
        $this->lang = $this->lang();
    }
    public function getNumber()
    {
        $user = Auth::guard('web')->user();

        if ($user == null) {
            $cardModel = Card::orderBy('clientnumber', 'DESC')->first();

            if ($cardModel == null) {

                $cardModel = Card::create([
                    'clientname' => "Client" . 1,
                    'clientnumber' => 1,
                ]);

                $cardModel->update(['clientnumber' => $cardModel->id]);

                $time = $this->remainingTime($cardModel->id);

                session()->put('time',$time);

                return view('ProjectFiles.cardView', ['number' => $cardModel->clientnumber, 'lang' => $this->lang,]);
            } else {
                $num = $cardModel->id + 1;

                $cardModel = Card::create([
                    'clientname' => "Client" . $num,
                    'clientnumber' => $num,
                ]);

                $time = $this->remainingTime($num);

                session()->put('time',$time);

                return view('ProjectFiles.cardView', ['number' => $cardModel->clientnumber,'lang' => $this->lang,]);
            }

        } else {
            $cardModel = $user->Cards->orderBy('clientnumber', 'DESC')->first();

            if ($cardModel == null) {
                $cardModel = Card::create([
                    'user_id' => $user->id,
                    'clientname' => "Client" . 1,
                    'clientnumber' => 1,
                ]);

                $cardModel->update(['clientnumber' => $cardModel->id]);

                $time = $this->remainingTime($cardModel->id);

                session()->put('time',$time);

                return view('ProjectFiles.cardView', ['number' => $cardModel->clientnumber, 'lang' => $this->lang,]);
            } else {
                $num = $cardModel->id + 1;

                $cardModel = Card::create([
                    'user_id' => $user->id,
                    'clientname' => "Client" . $num,
                    'clientnumber' => $num,
                ]);

                $time = $this->remainingTime($num);

                session()->put('time',$time);

                return view('ProjectFiles.cardView', ['number' => $cardModel->clientnumber,'lang' => $this->lang,]);
            }
        }

    }

    public function previousNumber($number)
    {


        $moreThan = Card::where('clientnumber', '=', $number - 1)->first();

        if($moreThan == null)
        {
            return redirect()->route('cardView')->with('number',"There is nobody before you!!");
        }else
        {
            return view('ProjectFiles.cardView',['number' => $moreThan->clientnumber,'lang' => $this->lang,]);
        }
    }

    public function nextNumber($number)
    {
        $moreThan = Card::where('clientnumber', '=', $number + 1)->first();

        if($moreThan == null)
        {
            return redirect()->route('cardView')->with('number',"There is nobody after you!!");
        }else
        {
            return view('ProjectFiles.cardView',['number' => $moreThan->clientnumber,'lang' => $this->lang,]);
        }
    }

    public function getClient()
    {
        $user = Auth::guard('web')->user();
        $modelCard = $user->Cards->where('status', 'null')->first();

        if($modelCard == null)
        {
            return redirect()->route('userViewCard')->with('status',"There is no clients at this moment!! wait a little please ^_^");
        }
        session()->put('ClientNumber',$modelCard->clientnumber);

        $modelCard->delete();

        return redirect()->route('userViewCard');
    }

    public function remainingTime($client)
    {
        $time = 0;
        $modelCard = Card::all();
        foreach($modelCard as $card)
        {
            if($card->where('clientnumber', '<', $client)->first()){
                $randomNumber = random_int(1,5);
                $time += $randomNumber;
            }
        }

        return $time;
    }
}
