<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Member;
use DB;
 
class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('search')->with('members', $members);
    }
  
    public function search(Request $request){
        $search = $request->input('search');
  
        $members = Member::whereRaw("CONCAT(firstname, ' ', lastname, ' ', address) like '%{$search}%'")
        ->orWhereRaw("CONCAT(lastname, ' ', firstname, ' ', address) like '%{$search}%'")
        ->get();
        return view('result')->with('members', $members);
    }
  
    public function viewmember($id){
        $member = Member::find($id);
        return view('member')->with('member', $member);
    }
  
    public function find(Request $request){
        $search = $request->input('search');
  
        $members = Member::whereRaw("CONCAT(firstname, ' ', lastname, ' ', address) like '%{$search}%'")
        ->orWhereRaw("CONCAT(lastname, ' ', firstname, ' ', address) like '%{$search}%'")
        ->get();
        return view('searchresult')->with('members', $members);
    }
}