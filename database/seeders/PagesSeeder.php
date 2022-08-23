<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->removeAboutUs();
        $this->storeAboutUs();
        $this->removeProducts();
        $this->storeProducts();
        $this->removeFirstSlider();
        $this->storeFirstSlider();
        $this->removeSecondSlider();
        $this->storeSecondSlider();
        $this->removeThirdSlider();
        $this->storeThirdSlider();
        $this->removeOurFeatures();
        $this->storeOurFeatures();
        $this->removeJustArrived();
        $this->storeJustArrived();
        $this->removeSuggested();
        $this->storeSuggested();
        $this->removeContactUs();
        $this->storeContactUs();
    }

    public function storeAboutUs()
    {
        $new_about = new Page();
        $new_about->id = 1;
        $new_about->description_ar = "الزبون سعيد جدا";
        $new_about->description_en = "Lorem ipsum dolor sit amet";
        $new_about->title_ar = "من نحن";
        $new_about->title_en = "About";
        $new_about->keywords_ar = "كلمات مفتاحية";
        $new_about->keywords_en = "keywords";

        $result = $new_about->save();
    }

    public function removeAboutUs()
    {
        $about = Page::where('id',1)->first();
        if (!(is_null($about))) {
            $result = $about->ForceDelete();
            
        }
    }

    public function storeProducts()
    {
        $new_product = new Page();
        $new_product->id = 2;
        $new_product->description_ar = "من المهم أن يكون لديك خدمة عملاء جيدة ، ومزود خدمة عملاء. اينيس";
        $new_product->description_en = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean";
        $new_product->title_ar = "منتجاتنا";
        $new_product->title_en = "Products";
        $new_product->keywords_ar = "كلمات مفتاحية";
        $new_product->keywords_en = "keywords";

        $result = $new_product->save();
    }

    public function removeProducts()
    {
        $products = Page::find(2);
        if (!(is_null($products))) {
            $result = $products->ForceDelete();
        }
    }

    public function storeFirstSlider()
    {
        $new_first_slider = new Page();
        $new_first_slider->id = 3;
        $new_first_slider->description_ar = "بحوث تخزين الهيدروجين. يحتاج ثروة أينين إلى الألم. كتلة الياسمين. وسيتحملون مع رفاقهم ثقل الجبل";
        $new_first_slider->description_en = "Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte";
        $new_first_slider->title_ar = "الزبون سعيد جدا";
        $new_first_slider->title_en = "Lorem ipsum dolor sit amet";
        $new_first_slider->keywords_ar = "كلمات مفتاحية";
        $new_first_slider->keywords_en = "keywords";

        $result = $new_first_slider->save();
    }

    public function removeFirstSlider()
    {
        $first_slider = Page::find(3);
        if (!(is_null($first_slider))) {
            $result = $first_slider->ForceDelete();
        }
    }

    public function storeSecondSlider()
    {
        $new_Second_slider = new Page();
        $new_Second_slider->id = 4;
        $new_Second_slider->description_ar = "بحوث تخزين الهيدروجين. يحتاج ثروة أينين إلى الألم. كتلة الياسمين. وسيتحملون مع رفاقهم ثقل الجبل";
        $new_Second_slider->description_en = "Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte";
        $new_Second_slider->title_ar = "الزبون سعيد جدا";
        $new_Second_slider->title_en = "Lorem ipsum dolor sit amet";
        $new_Second_slider->keywords_ar = "كلمات مفتاحية";
        $new_Second_slider->keywords_en = "keywords";

        $result = $new_Second_slider->save();
    }

    public function removeSecondSlider()
    {
        $Second_slider = Page::find(4);
        if (!(is_null($Second_slider))) {
            $result = $Second_slider->ForceDelete();
        }
    }

    public function storeThirdSlider()
    {
        $new_third_slider = new Page();
        $new_third_slider->id = 5;
        $new_third_slider->description_ar = "بحوث تخزين الهيدروجين. يحتاج ثروة أينين إلى الألم. كتلة الياسمين. وسيتحملون مع رفاقهم ثقل الجبل";
        $new_third_slider->description_en = "Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte";
        $new_third_slider->title_ar = "الزبون سعيد جدا";
        $new_third_slider->title_en = "Lorem ipsum dolor sit amet";
        $new_third_slider->keywords_ar = "كلمات مفتاحية";
        $new_third_slider->keywords_en = "keywords";

        $result = $new_third_slider->save();
    }

    public function removeThirdSlider()
    {
        $third_slider = Page::find(5);
        if (!(is_null($third_slider))) {
            $result = $third_slider->ForceDelete();
        }
    }

    public function storeOurFeatures()
    {
        $new_our_features = new Page();
        $new_our_features->id = 6;
        $new_our_features->description_ar = "العميل مهم جدا ، العميل سيتبعه. بالنسبة لبعض لاسينيا ، يريد المؤلف سرد القصة. لن يتمكن أي شخص ، سواء كان مطورًا أو شخصًا حكيمًا ، من اتباع القواعد من قبل.";
        $new_our_features->description_en = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia enim eu velit condimentum auctor. Nullam mi dui, tincidunt et sapien quis, consectetur rutrum ante.";
        $new_our_features->title_ar = "مميزاتنا";
        $new_our_features->title_en = "OUR FEATURES";
        $new_our_features->keywords_ar = "كلمات مفتاحية";
        $new_our_features->keywords_en = "keywords";

        $result = $new_our_features->save();
    }

    public function removeOurFeatures()
    {
        $our_features = Page::find(6);
        if (!(is_null($our_features))) {
            $result = $our_features->ForceDelete();
        }
    }

    public function storeJustArrived()
    {
        $new_just_arrived = new Page();
        $new_just_arrived->id = 7;
        $new_just_arrived->description_ar = "من المهم أن يكون لديك خدمة عملاء جيدة ، ومزود خدمة عملاء. اينيس";
        $new_just_arrived->description_en = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean";
        $new_just_arrived->title_ar = "وصل للتو !";
        $new_just_arrived->title_en = "JUST ARRIVED !";
        $new_just_arrived->keywords_ar = "كلمات مفتاحية";
        $new_just_arrived->keywords_en = "keywords";

        $result = $new_just_arrived->save();
    }

    public function removeJustArrived()
    {
        $just_arrived = Page::find(7);
        if (!(is_null($just_arrived))) {
            $result = $just_arrived->ForceDelete();
        }
    }

    public function storeSuggested()
    {
        $new_suggested = new Page();
        $new_suggested->id = 8;
        $new_suggested->description_ar = "من المهم أن يكون لديك خدمة عملاء جيدة ، ومزود خدمة عملاء. اينيس";
        $new_suggested->description_en = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean";
        $new_suggested->title_ar = "مقترحة";
        $new_suggested->title_en = "SUGGESTED";
        $new_suggested->keywords_ar = "كلمات مفتاحية";
        $new_suggested->keywords_en = "keywords";

        $result = $new_suggested->save();
    }

    public function removeSuggested()
    {
        $suggested = Page::find(8);
        if (!(is_null($suggested))) {
            $result = $suggested->ForceDelete();
        }
    }

    public function storeContactUs()
    {
        $new_contact_us = new Page();
        $new_contact_us->id = 9;
        $new_contact_us->description_ar = "تلد الجبال الجبال";
        $new_contact_us->description_en = "penatibus et magnis dis parturient montes,";
        $new_contact_us->title_ar = "تواصل معنا";
        $new_contact_us->title_en = "Contact US";
        $new_contact_us->keywords_ar = "كلمات مفتاحية";
        $new_contact_us->keywords_en = "keywords";

        $result = $new_contact_us->save();
    }

    public function removeContactUs()
    {
        $contact_us = Page::find(9);
        if (!(is_null($contact_us))) {
            $result = $contact_us->ForceDelete();
        }
    }
}
