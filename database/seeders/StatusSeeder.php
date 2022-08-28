<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->removeInCart();
        $this->storeInCart();
        $this->removeRequestDone();
        $this->storeRequestDone();
        $this->removeDelivered();
        $this->storeDelivered();
        $this->removeReturned();
        $this->storeReturned();
    }

    public function storeInCart()
    {
        $new_status = new Status();
        $new_status->id = 1;
        $new_status->title_ar = "في السلة";
        $new_status->title_en = "in cart";

        $result = $new_status->save();
    }

    public function removeInCart()
    {
        $in_cart = Status::where('id',1)->first();
        if (!(is_null($in_cart))) {
            $result = $in_cart->ForceDelete();

        }
    }

    public function storeRequestDone()
    {
        $new_status = new Status();
        $new_status->id = 2;
        $new_status->title_ar = "تم الطلب";
        $new_status->title_en = "request done";

        $result = $new_status->save();
    }

    public function removeRequestDone()
    {
        $request_done = Status::where('id',2)->first();
        if (!(is_null($request_done))) {
            $result = $request_done->ForceDelete();

        }
    }

    public function storeDelivered()
    {
        $new_status = new Status();
        $new_status->id = 3;
        $new_status->title_ar = "تم التسليم";
        $new_status->title_en = "Delivered";

        $result = $new_status->save();
    }

    public function removeDelivered()
    {
        $delivered = Status::where('id',3)->first();
        if (!(is_null($delivered))) {
            $result = $delivered->ForceDelete();

        }
    }

    public function storeReturned()
    {
        $new_status = new Status();
        $new_status->id = 4;
        $new_status->title_ar = "تم الارجاع";
        $new_status->title_en = "Returned";

        $result = $new_status->save();
    }

    public function removeReturned()
    {
        $returned = Status::where('id',4)->first();
        if (!(is_null($returned))) {
            $result = $returned->ForceDelete();

        }
    }
}
