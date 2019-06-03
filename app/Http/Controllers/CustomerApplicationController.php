<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerInfo;
use Illuminate\Support\Arr;

class CustomerApplicationController extends Controller
{
    public function index()
    {
    	return view('admin.general.customerApplication');
    }
    public function getCustomerInfo()
    {
    	return CustomerInfo::with(['unit_info', 'customer_dependents','source_of_income',
    		'statement_monthly_income_and_expenses', 'co_maker_info', 'personal_reference',
    		'referral', 'sketch', 'remark', 'acknowledgement'
    	])->get();
    }
    public function store(Request $request)
    {
    	$customerInfo = CustomerInfo::create([
    		'surname'				=> $request->get('surname'),
    		'first_name' 			=> $request->get('first_name'),
    		'middle_name' 			=> $request->get('middle_name'),
    		'nickname' 				=> $request->get('nickname'),
    		'place_of_birth'		=> $request->get('place_of_birth'),
			'date_of_birth'			=> $request->get('date_of_birth'),
			'age'					=> $request->get('age'),
			'sex'					=> $request->get('sex'),
			'status'				=> $request->get('status'),
			'address'				=> $request->get('address'),
			'length_of_stay'		=> $request->get('length_of_stay'),
			'telephone_number'		=> $request->get('telephone_number'),
			'mobile_number'			=> $request->get('mobile_number'),
			'provincial_address'	=> $request->get('provincial_address'),
			'house_ownership'		=> $request->get('house_ownership'),
			'educational_attainnment' => $request->get('educational_attainment'),
			'school'				=> $request->get('school'),
			'degree'				=> $request->get('degree'),
			'spouse_name'			=> $request->get('spouse_name'),
			'spouse_dob'			=> $request->get('spouse_dob'),
			'spouse_pob'			=> $request->get('spouse_pob'),
			'spouse_address'		=> $request->get('spouse_address'),
			'spouse_length_of_stay'	=> $request->get('spouse_length_of_stay'),
			'spouse_telephone_number'=> $request->get('spouse_telephone_number'),
			'spouse_mobile_number'	=> $request->get('spouse_mobile_number')
    	]);

    	$customerInfo->customer_dependents()->create($request->get('dependents'));

    	$customerInfo->unit_info()->create([
    		'with_agent'			=> $request->get('with_agent'),
			'agent_name'			=> $request->get('agent_name'),
			'repo_unit'				=> $request->get('repo_unit'),
			'brand'					=> $request->get('brand'),
			'model'					=> $request->get('model'),
			'color'					=> $request->get('color'),
			'total_price'			=> $request->get('total_price'),
			'downpayment'			=> $request->get('downpayment'),
			'monthly_installment'	=> $request->get('monthly_installment'),
			'terms'					=> $request->get('terms'),
			'purpose'				=> $request->get('purpose'),
			'tricycle_franchise_open_in_area' => $request->get('tricycle_franchise_open_in_area'),
			'private_use_purpose'	=> $request->get('private_use_purpose'),
			'customer_type'			=> $request->get('customer_type'),
			'customer_type_unit_purchased'	=> $request->get('customer_type_unit_purchased'),
			'customer_type_unit_purchased_when'	=> $request->get('customer_type_unit_purchased_when'),
			'customer_type_branch'		=> $request->get('customer_branch'),
			'customer_type_srp'			=> $request->get('customer_srp'),
			'customer_type_downpayment'	=> $request->get('customer_type_downpayment'),
			'customer_type_monthly_amortization' => $request->get('customer_type_monthly_amortization'),
			'customer_type_terms'	=> $request->get('customer_type_terms')
    	]);

    	$customerInfo->source_of_income()->create([
    		'employer_name'					=> $request->get('employer_name'),
			'position_occupied'				=> $request->get('position_occupied'),
			'employer_address'				=> $request->get('employer_address'),
			'length_of_employment'			=> $request->get('length_of_employment'),
			'monthly_income'				=> $request->get('monthly_income'),
			'other_compensation'			=> $request->get('other_compensation'),
			'office_number'					=> $request->get('office_number'),
			'spouse_employer_name'			=> $request->get('spouse_employer_name'),
			'spouse_position_occupied'		=> $request->get('spouse_employer_occupied'),
			'spouse_employer_address'		=> $request->get('spouse_employer_address'),
			'spouse_length_of_employment'	=> $request->get('spouse_length_of_employment'),
			'spouse_monthly_income'			=> $request->get('spouse_monthly_income'),
			'spouse_other_compensation'		=> $request->get('spouse_other_compensation'),
			'spouse_office_number'			=> $request->get('spouse_office_number'),
			'total_estimated_income_month'	=> $request->get('total_estimated_income_month')
    	]);

    	$customerInfo->statement_monthly_income_and_expenses()->create([
    		'average_monthly_expenses'		=> $request->get('average_monthly_expenses'),
			'amortization'					=> $request->get('amortization'),
			'education'						=> $request->get('education'),
			'electricity'					=> $request->get('electricity'),
			'other_loans'					=> $request->get('other_loans'),
    	]);

    	$customerInfo->co_maker_info()->create([
    		'co_maker_name'					=> $request->get('co_maker_name'),
			'age'							=> $request->get('age'),
			'sex'							=> $request->get('sex'),
			'status'						=> $request->get('status'),
			'present_address'				=> $request->get('present_address'),
			'length_of_stay'				=> $request->get('length_of_stay'),
			'telephone_number'				=> $request->get('telephone_number'),
			'mobile_number'					=> $request->get('mobile_number'),
			'employer_name'					=> $request->get('employer_name'),
			'employer_address'				=> $request->get('employer_address')
    	]);

    	$customerInfo->personal_reference()->create([
    		'father_name'				=> $request->get('father_name'),
			'father_telephone_number'	=> $request->get('father_telephone_number'),
			'father_present_address'	=> $request->get('father_present_address'),
			'mother_name'				=> $request->get('mother_name'),
			'mother_telephone_number'	=> $request->get('mother_telephone_number'),
			'mother_present_address'	=> $request->get('mother_present_address'),
			'brother_name'				=> $request->get('brother_name'),
			'brother_telephone_number'	=> $request->get('brother_telephone_number'),
			'brother_present_address'	=> $request->get('brother_present_address'),
			'sister_name'				=> $request->get('sister_name'),
			'sister_telephone_number'	=> $request->get('sister_telephone_number'),
			'sister_present_address'	=> $request->get('sister_present_address')
    	]);

    	$customerInfo->referral()->create([
    		'name'				=> $request->get('name'),
			'address'			=> $request->get('address'),
			'contact_number'	=> $request->get('contact_number')
    	]);

    	$customerInfo->sketch()->create([
    		'sketch_image' => 'test'
    	]);

    	$customerInfo->remark()->create([
    		'remarks'	=> 'remarks'
    	]);

    	$customerInfo->acknowledgement()->create([
    		'date'				=> $request->get('date'),
			'res_cert_no'		=> $request->get('res_cert_no'),
			'issued_at'			=> $request->get('issued_at'),
			'issued_at_date'	=> $request->get('issued_at_date'),
			'tin_no'			=> $request->get('tin_no')
    	]);


    }
}
