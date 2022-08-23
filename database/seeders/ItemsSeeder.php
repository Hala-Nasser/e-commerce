<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->removeAboutItem();
        $this->storeAboutItem();
        $this->removeFirstFeature();
        $this->storeFirstFeature();
        $this->removeSecondFeature();
        $this->storeSecondFeature();
        $this->removeThirdFeature();
        $this->storeThirdFeature();
        $this->removeFourthFeature();
        $this->storeFourthFeature();
    }

    public function storeAboutItem()
    {
        $new_about_item = new Item();
        $new_about_item->id = 1;
        $new_about_item->page_id = 1;
        $new_about_item->title_ar = "الأسلوب هو وسيلة للتعبير عن هويتك دون الحاجة إلى التحدث";
        $new_about_item->title_en = "Style is a way to say who you are without having to speak";

        $result = $new_about_item->save();
    }

    public function removeAboutItem()
    {
        $about_item = Item::where('id',1)->first();
        if (!(is_null($about_item))) {
            $result = $about_item->ForceDelete();
            
        }
    }


    public function storeFirstFeature()
    {
        $new_first_feature = new Item();
        $new_first_feature->id = 2;
        $new_first_feature->page_id = 6;
        $new_first_feature->title_ar = "دعم على مدار 24 ساعة";
        $new_first_feature->title_en = "24 Hr SUPPORT";

        $result = $new_first_feature->save();
    }

    public function removeFirstFeature()
    {
        $new_first_feature = Item::where('id',2)->first();
        if (!(is_null($new_first_feature))) {
            $result = $new_first_feature->ForceDelete();
            
        }
    }

    public function storeSecondFeature()
    {
        $new_Second_feature = new Item();
        $new_Second_feature->id = 3;
        $new_Second_feature->page_id = 6;
        $new_Second_feature->title_ar = "استعادة الاموال";
        $new_Second_feature->title_en = "MONEY BACK";

        $result = $new_Second_feature->save();
    }

    public function removeSecondFeature()
    {
        $new_Second_feature = Item::where('id',3)->first();
        if (!(is_null($new_Second_feature))) {
            $result = $new_Second_feature->ForceDelete();
            
        }
    }

    public function storeThirdFeature()
    {
        $new_third_feature = new Item();
        $new_third_feature->id = 4;
        $new_third_feature->page_id = 6;
        $new_third_feature->title_ar = "هدية ";
        $new_third_feature->title_en = "SURPRICE GIFT";

        $result = $new_third_feature->save();
    }

    public function removeThirdFeature()
    {
        $new_third_feature = Item::where('id',4)->first();
        if (!(is_null($new_third_feature))) {
            $result = $new_third_feature->ForceDelete();
            
        }
    }

    public function storeFourthFeature()
    {
        $new_fourth_feature = new Item();
        $new_fourth_feature->id = 5;
        $new_fourth_feature->page_id = 6;
        $new_fourth_feature->title_ar = "تصميم فريد من نوعه";
        $new_fourth_feature->title_en = "UNIQUE DESIGN";

        $result = $new_fourth_feature->save();
    }

    public function removeFourthFeature()
    {
        $new_fourth_feature = Item::where('id',5)->first();
        if (!(is_null($new_fourth_feature))) {
            $result = $new_fourth_feature->ForceDelete();
            
        }
    }
}
