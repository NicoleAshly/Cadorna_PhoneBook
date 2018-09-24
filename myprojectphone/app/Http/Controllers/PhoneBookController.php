<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhoneBook;
use Validator;
use Image;
// use Intervention\Image\Facades\Image;
class PhoneBookController extends Controller
{
    //
	public $rules = [
				'FName'=>'required|alpha',
				'LName'=>'required|alpha',
				'Contact'=>'required|max:225',
				'Address'=>'required|alpha',
			];

	 public function listContacts(Request $request){
		$contact = PhoneBook::all();
		$mode = 'add';
		$person = PhoneBook::find($request->Pid);
		return view('listcontacts', compact('mode'))->with(['contact'=>$contact, 'person'=>$person]);
	}

    public function addContact(Request $request){
        
		$newcontact = new PhoneBook;     
		if($request->hasFile('image')){
            $image = $request->file('image');
            // png, jpg
            $filename = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400)->save(public_path('/storage/contact/'.$filename));
			$newcontact->image = $filename;
		
		$newcontact->Nickname = $request->Nickname;
		$newcontact->FName = $request->FName;
		$newcontact->LName = $request->LName;
		$newcontact->Contact = $request->Contact;
		$newcontact->Address = $request->Address;
        $newcontact->save();
		$insertid = $newcontact->Pid;
		return redirect(url('/'));
  }
     }

	public function displayPerson($Pid){
		$person = PhoneBook::find($Pid);
		return view('viewPerson')->with(['person'=>$person]);
	}


		public function deleteContact(Request $request){
		$person = PhoneBook::findOrFail($request->Pid);
		$person->delete();
		return redirect(url('/'));
	}

		public function viewPerson(Request $request){
		$person = PhoneBook::find($request->Pid);
		return view('viewPerson')->with(['person'=>$person]);		
	}


	public function editContact($Pid){
		$mode = 'edit';
		$person = PhoneBook::findOrFail($Pid);
		return view('main', compact('mode', 'person', 'Pid'));
	}

	public function saveEditContact(Request $request){
		$saveedit = PhoneBook::findOrFail($request->Pid);
        $saveedit->Nickname = $request->Nickname;
        // $saveedit->image = $request->image;
		$saveedit->FName = $request->FName;
		$saveedit->LName = $request->LName;
		$saveedit->Contact = $request->Contact;
		$saveedit->Address = $request->Address;
		$saveedit->save();
		return redirect(url('/'));
		}
       
}