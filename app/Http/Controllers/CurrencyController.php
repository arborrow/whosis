<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;

class CurrencyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$this->authorize('show-currency');
        $currencies = \App\Models\Currency::orderBy('country_name')->paginate();

        return view('admin.currencies.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create-currency');

        return view('admin.currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencyRequest $request)
    {
        //$this->authorize('create-currency');

        $currency = new \App\Models\Currency;
        $currency->country_name = $request->input('country_name');
        $currency->currency_name = $request->input('currency_name');
        $currency->currency_code = $request->input('currency_code');
        $currency->currency_numeric_code = $request->input('currency_numeric_code');
        $currency->currency_decimals = $request->input('currency_decimals');
        $currency->currency_symbol = $request->input('currency_symbol');
        $currency->iso_code = $request->input('iso_code');
        $currency->sort_order = $request->input('sort_order');

        $currency->save();

        \Session::flash('flash.banner', $currency->currency. ' (' . $currency->country_name . ') ' . __('saved'));

        return Redirect::action('CurrencyController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->authorize('show-currency');

        $currency = \App\Models\Currency::findOrFail($id);

        return view('admin.currencies.show', compact('currency')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update-currency');

        $currency = \App\Models\Currency::findOrFail($id);

        return view('admin.currencies.edit', compact('currency')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrencyRequest $request, $id)
    {
        //$this->authorize('update-currency');
        $currency = \App\Models\Currency::findOrFail($id);
        $currency->country_name = $request->input('country_name');
        $currency->currency_name = $request->input('currency_name');
        $currency->currency_code = $request->input('currency_code');
        $currency->currency_numeric_code = $request->input('currency_numeric_code');
        $currency->currency_decimals = $request->input('currency_decimals');
        $currency->currency_symbol = $request->input('currency_symbol');
        $currency->iso_code = $request->input('iso_code');
        $currency->sort_order = $request->input('sort_order');

        $currency->save();

        \Session::flash('flash.banner', $currency->currency_name. ' ('. $currency->country_name . ') ' . __('updated'));
        \Session::flash('flash.bannerStyle', 'success');

        return Redirect::action('CurrencyController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete-currency');

        $currency = \App\Models\Currency::findOrFail($id);
        \App\Models\Currency::destroy($id);

        \Session::flash('flash.banner', $currency->currency_name . ' (' . $currency->country_name . ') ' . __('deleted'));
        \Session::flash('flash.bannerStyle', 'warning');

        return Redirect::action('CurrencyController@index');
    }

}
