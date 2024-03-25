<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\tb_checkOut_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;
use Ramsey\Uuid\Type\Integer;

class PaymentCartClientController extends Controller
{
    public function __construct()
    {
    }

    // Home profile status checkout 
    function index()
    {
        return view('PageClient.statusOrder');
    }

    //  CheckOut 
    function paymentVnPay(Request $request, tb_checkOut_cart $validation)
    {
        $validation->validated();
        $data = [
            'total_price' => $request->total_price,
        ];

        $dataSave = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => 1,
            'id_user' => Auth::user()->id,
            'name_product' => $request->name_product,
            'price_product' => $request->price_product,
            'quality_product' => $request->quality_product,
            'image_product' => $request->image_product,
            'total_product' => $request->total_product,
            'id_product' => $request->id,
            'item_array' => json_encode($data),
        ];
        // dd($dataSave);


        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://localhost/vnpay_php/vnpay_return.php";
        $vnp_TmnCode = "V5MJBA6F"; //Mã website tại VNPAY 
        $vnp_HashSecret = "JLZICKIDYXUUJUXVFEPIAXYVCIKVMTGL"; //Chuỗi bí mật

        $vnp_TxnRef = rand(1, 10000); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thong tin don hang";
        $vnp_OrderType = "Do dung";
        $vnp_Amount = $request->total_price * 100000;
        $vnp_Locale = 'vn';
        $vnp_BankCode = "VISA";
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashData, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
        \Cart::clear();
        return redirect()->away($vnp_Url);
        return redirect()->route("client.profile");
    }
}
