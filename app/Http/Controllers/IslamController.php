<?php

namespace App\Http\Controllers;
use App\Salat;
use App\ShirkTaohid;
use App\Sium;
use App\Jakat;
use App\Hazz;
use App\Jihad;
use App\Bibaho;
use App\Akida;
use App\Behave;
use App\Doya;
use App\FozilotAmol;
use App\Bidayat;
use App\Bibidh;

class IslamController extends Controller
{


	public function index()
	{
		$akidas = Akida::orderBy('id','desc')->paginate(4);
		return view('index',compact('akidas'));
	}

	public function salat()
	{
		$salats = Salat::orderBy('id','desc')->paginate(40);
		return view('salat',compact('salats'));
	}

	public function singleSalat($id)
	{
		$salat = Salat::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.single-salat',compact('salat'));
	}

	public function sirkTaohid()
	{
		$sirks = ShirkTaohid::orderBy('id','desc')->get();
		return view('sirk',compact('sirks'));
	}

	public function singleSirkTouhid($id)
	{
		$sirk = ShirkTaohid::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.shirk',compact('sirk'));
	}

	public function sium()
	{
		$siums = Sium::orderBy('id','desc')->get();
		return view('sium',compact('siums'));
	}

	public function singleSium($id)
	{
		$sium = Sium::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.sium',compact('sium'));
	}

	public function jakat()
	{
		$jakats = Jakat::orderBy('id','desc')->get();
		return view('jakat',compact('jakats'));
	}

	public function singleJakat($id) {
	
		$jakat = Jakat::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.jakat',compact('jakat'));
	}

	public function hazz()
	{
		$hazzs = Hazz::orderBy('id','desc')->get();
		return view('hazz',compact('hazzs'));
	}

	public function singleHazz($id)
	{
		$hazz = Hazz::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.hazz',compact('hazz'));
	}

	public function jihad()
	{
		$jihads = Jihad::orderBy('id','desc')->get();
		return view('jihad',compact('jihads'));
	}

	public function singleJihad($id)
	{
		$jihad = Jihad::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.jihad',compact('jihad'));
	}

	public function bibaho()
	{
		$bibahos = Bibaho::orderBy('id','desc')->get();
		return view('bibaho',compact('bibahos'));
	}

	public function singleBibaho($id)
	{
		$bibaho = Bibaho::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.bibaho',compact('bibaho'));
	}

	public function akida()
	{
		$akidas = Akida::orderBy('id','desc')->get();
		return view('akida',compact('akidas'));
	}

	public function singleAkida($id)
	{
		$akida = Akida::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.akida',compact('akida'));
	}

	public function behave()
	{
		$behaves = Behave::orderBy('id','desc')->get();
		return view('behave',compact('behaves'));
	}

	public function singleBehave($id)
	{
		$behave = Behave::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.behave',compact('behave'));
	}

	public function doya()
	{
		$doyas = Doya::orderBy('id','desc')->get();
		return view('doya',compact('doyas'));
	}

	public function singleDoya($id)
	{
		$doya = Doya::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.doya',compact('doya'));
	}

	public function fojilot()
	{
		$fojilots = FozilotAmol::orderBy('id','desc')->get();
		return view('fojilot',compact('fojilots'));
	}

	public function singleFojilot($id)
	{
		$fojilot = FozilotAmol::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.fojilot',compact('fojilot'));
	}

	public function bidayat()
	{
		$bidayats = Bidayat::orderBy('id','desc')->get();
		return view('bidayat',compact('bidayats'));
	}

	public function singleBidayat($id)
	{
		$bidayat = Bidayat::orderBy('id','desc')->where('id',$id)->first();		
		return view('single.bidayat',compact('bidayat'));
	}

	public function extra()
	{
		$extras = Bibidh::orderBy('id','desc')->get();
		return view('extra',compact('extras'));
	}


	public function singleExtra($id)
	{
		$extra = Bibidh::orderBy('id','desc')->where('id',$id)->first();	
		return view('single.extra',compact('extra'));
	}
}