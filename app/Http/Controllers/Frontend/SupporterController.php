<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Supporter;
use Illuminate\Http\Request;
use Validator;

class SupporterController extends Controller
{
    public function index()
    {
        return view('frontend.supporter');
    }

    public function support(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'currency'    => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'required|string|max:15',
            'amount'      => 'required|numeric|min:10',
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',

        ]);

        $error_array = array();
        $success_output = '';

        if ($validation->fails()) {

            foreach ($validation->messages()->getMessages() as $field_name => $messages) {

                $error_array[] = $messages;
            }
        } else {

            $support = new Supporter();

            $return_message = $support->storeSupport($request);

            $success_output = $return_message;
        }

        $output = array(

            'error'   => $error_array,
            'success' => $success_output
        );

        echo json_encode($output);
    }
}
