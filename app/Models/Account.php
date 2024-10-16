<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class Account extends Model
{
    use HasFactory;
	
	protected $table = 'Accounts';
	public $timestamps = false;
		
	protected $fillable = [
        'Name',
        'Description',
        'CreatedBy',
        'UpdatedBy',
		'iid',
    ];
	
	function SaveAccountDetails($AccountDetail, $AccountCstmDetail){
        DB::beginTransaction();
        try{
			
			//$result = DB::table('Accounts')->insert($AccountDetail);
			$LastInsertedID = DB::table('Accounts')->insertGetId($AccountDetail);
			$AccountCstmDetail['IdC'] = $LastInsertedID;
			$result = DB::table('AccountsCstm')->insert($AccountCstmDetail);
            DB::commit();
		}
		catch (\Exception $e) {
            DB::rollback();
		}
	}
	
	public function GetAccDetFromID($AccountId){
		$iid = Auth::user()->iid;
		$accountdet = array(
						"1" => "FastTrackCabs",
						"2" => "BPM360",
						"3" => "MySchoolOne",
					);
		//$accountdet = DB::table('Accounts')->where('DeletedStatus', '=', '0')->get(['AccountId', 'CreatedDate', 'Name']);
		$accountdet = DB::table('Accounts')->where("iid", "=", "$iid")->where('DeletedStatus', '=', '0')->where('AccountId', '=', "$AccountId")->get(['AccountId', 'CreatedDate', 'Name']);
		return $accountdet;
	}
	
	public function GetAccDetFromModel(){
		$iid = Auth::user()->iid;
		$accountdet = array(
						"1" => "FastTrackCabs",
						"2" => "BPM360",
						"3" => "MySchoolOne",
					);
		//$accountname = $accountdet['2'];
		//$accountdet = DB::table('Accounts')->get(['RoleId', 'RoleName']);
		$accountdet = DB::table('Accounts')->where("iid", "=", "$iid")->where('DeletedStatus', '=', '0')->get(['AccountId', 'CreatedDate', 'Name']);
		//$accountdet = DB::table('Accounts')->where('DeletedStatus', '=', '0')->where('Name', '=', "$accountname")->get(['AccountId', 'CreatedDate', 'Name']);
		return $accountdet;
	}
}
