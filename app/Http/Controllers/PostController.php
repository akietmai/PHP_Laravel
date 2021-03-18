<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customer = Customer::all();
        $customer = Customer::get();
        return response($customer, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name_customer = $request->name_customer;
        $customer->phone_customer = $request->phone_customer;
        $customer->address_customer = $request->address_customer;
        $customer->email_customer = $request->email_customer;
        $customer->city_customer = $request->city_customer;
        $customer->save();

        return response()->json(["mess" => "customer record created"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Customer::where('id_customer', $id)->exists()) {
            // $customer = Customer::find($id);
            $customer = Customer::where('id_customer', $id)->get();
            return response($customer, 200);
        } else {
            return response()->json([
                'mess' => 'Customer not found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Customer::where('id_customer', $id)->exists()) {
            $customer = Customer::find($id);
            $customer->name_customer = is_null($request->name_customer) ? $customer->name_customer : $request->name_customer;
            $customer->phone_customer = is_null($request->phone_customer) ? $customer->phone_customer : $request->phone_customer;
            $customer->address_customer = is_null($request->address_customer) ? $customer->address_customer : $request->address_customer;
            $customer->email_customer = is_null($request->email_customer) ? $customer->email_customer : $request->email_customer;
            $customer->city_customer = is_null($request->city_customer) ? $customer->city_customer : $request->city_customer;
            $customer->save();

            return response()->json(['mess' => 'records update successfully!'], 200);
        } else {
            return response()->json([
                "mess" => "Student not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Customer::where('id_customer', $id)->exists()) {
            $customer = Customer::find($id);
            $customer->delete();

            return response()->json([
                'mess' => 'records deleted'
            ], 202);
        } else {
            return response()->json([
                'mess' => 'Customer not found'
            ], 404);
        }
    }
}
