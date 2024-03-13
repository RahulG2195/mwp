<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendorserviceform extends CI_Controller {

	 public function __construct() {
        parent::__construct();

        $this->load->model('VendorserviceformModel');
        
    }



    public function addbridalvendor()
    {
            $files = $_FILES;
      // pr($_FILES, '');
           $config['upload_path']   = './uploads/bridalWear-image'; 
           $config['allowed_types'] = '*';
           $_FILES['inspiration_photo']['name']= date('s').'-'.$files['inspiration_photo']['name'];
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if (!$this->upload->do_upload('inspiration_photo')) 
           {
              $error = array('error' => $this->upload->display_errors()); 
           }
           else 
           { 
              $upload_data = $this->upload->data();
           }
         //   pr( $error , '');
         //    pr($upload_data, '');exit;
       $prefer=implode(",",$this->input->post("prefer_bridal_wear"));
       $embellishments=implode(",",$this->input->post("embellishments"));
       $bridelwear=implode(",",$this->input->post("bridal-wear-ocassion"));
       $fabrics=implode(",",$this->input->post("bridal-wear-fabrics"));
       $products=implode(",",$this->input->post("products-looking-for"));
       $additionalservice=implode(",",$this->input->post("additional_service"));

       $data= array(
                     'userid' =>$this->input->post("uids"), 
                     'fname' =>$this->input->post("first_name"), 
                     'lname'   =>$this->input->post("last_name"),
                     'email'   =>$this->input->post("email_id"),
                     'phoneno'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'prefer_bridal_wear'=>$prefer,
                     'color_preference'=>$this->input->post("color_preference"),
                     // 'body_type'=>$this->input->post("body_type"),
                     'embellishments'=>$embellishments,
                     'cultural_influence'=>$this->input->post("cultural_influence"),
                     'favorite_designer'=>$this->input->post("favorite_designer"),
                     'bridal_budget_range'=>$this->input->post("bridal_budget_range"),
                     'desired_bridal_budget_from'=>$this->input->post("desired_bridal_budget_from"),
                     'desired_bridal_budget_range_to'=>$this->input->post("desired_bridal_budget_range_to"),
                     'retail_store'=>$this->input->post("retail_store"),
                     'bridal-wear-ocassion'=>$bridelwear,
                     'bridal-wear-fabrics'=> $fabrics,
                     'products-looking-for'=>$products,
                     // 'design-style-resonate'=>$this->input->post("design-style-resonate"),
                     'customize-birdal-wear'=>$this->input->post("customize-birdal-wear"),
                     'dress-ready-to-be'=>$this->input->post("dress-ready-to-be"),
                     'additional_service'=>$additionalservice,
                     'other_detail'=>$this->input->post("other_detail"),
                     'open_to_slight_budget_increase'=>$this->input->post("open_to_slight_budget_increase"),
                     'inspiration_photo'=>$upload_data["file_name"],
                     'shop_location'=>$this->input->post("shop_location"),
                     );

                     // pr($data, '');exit;
            $insert=$this->VendorserviceformModel->insertbridaldata($data);
            redirect('thankyou');

       //$decoration=implode(",",$this->input->post("decoration_type"));
      


    }
    public function addvendorphotograph()
    {

        $occassioncovered=implode(",",$this->input->post("occssion_covered"));
        $deliveryformat=implode(",",$this->input->post("delivery_format"));
        $additionalservice=implode(",",$this->input->post("additional_services"));

        $data= array(
                     'first_name' =>$this->input->post("first_name"), 
                     'userid' =>$this->input->post("uids"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'photography_budget'=>$this->input->post("photography_budget"),
                     'photography_style'=>$this->input->post("photography_style"),
                     'wedding_date'=>$this->input->post("wedding_date"),
                     'wedding_location'=>$this->input->post("wedding_location"),
                     'no_of_photography_days'=>$this->input->post("no_of_photography_days"),
                     'occssion_covered'=>$occassioncovered,
                     'cinematic_editing'=>$this->input->post("cinematic_editing"),
                     'same_day_edit'=>$this->input->post("same_day_edit"),
                     'professional_service_printing'=>$this->input->post("professional_service_printing"),
                     'photography_experience'=>$this->input->post("photography_experience"),
                     'open_to_edit_service'=>$this->input->post("open_to_edit_service"),
                     'videography_service'=> $this->input->post("videography_service"),
                     'guest_count'=>$this->input->post("guest_count"),
                     'outstation_photographers'=>$this->input->post("outstation_photographers"),
                     'photographer_accomodation'=>$this->input->post("photographer_accomodation"),
                     'receive_photograph_date'=>$this->input->post("receive_photograph_date"),
                     'understand_preferences'=>$this->input->post("understand_preferences"),
                     'editing_style'=>$this->input->post("editing_style"),
                     'delivery_format'=>$deliveryformat,

                     'album_design_offers'=>$this->input->post("album_design_offers"),
                     'culture_belong'=>$this->input->post("culture_belong"),
                     // 'similar_culture_wedding'=>$this->input->post("similar_culture_wedding"),
                     'additional_services'=>$additionalservice,
                     'specific_preference'=>$this->input->post("specific_preference"),
                     
                     );
      
      // pr($data, '');exit;
        $this->VendorserviceformModel->insertphotographysata($data);

        redirect('thankyou');
      
    }

  public  function addvgroomwear() {

           $files = $_FILES;
           $config['upload_path']   = './uploads/groom-image'; 
           $config['allowed_types'] = '*';
           $_FILES['style-image']['name']= date('s').'-'.$files['style-image']['name'];
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if (!$this->upload->do_upload('style-image')) 
           {
              $error = array('error' => $this->upload->display_errors()); 
           }
           else 
           { 
              $upload_data = $this->upload->data();
           }
         //   pr($error, '');
         //   pr($upload_data, '');exit;
        $designelement=implode(",",$this->input->post("design_element"));
      //   $preferedoutfit=implode(",",$this->input->post("prefered_outfit"));
        $accessoriesoutfit=implode(",",$this->input->post("accessories_outfit"));


        $occassiongroomwear=implode(",",$this->input->post("occassion-groom-wear"));
        //$preferedoutfit=implode(",",$this->input->post("prefered_outfit"));
        $productslookingfor=implode(",",$this->input->post("products_looking_for"));
      //   $outfitfabric=implode(",",$this->input->post("fabric_for_outfit"));

        $additionalservice=implode(",",$this->input->post("additional_service"));
        

        $data= array(
         'userid' =>$this->input->post("uids"), 
         'first_name' =>$this->input->post("first_name"), 
         'last_name'   =>$this->input->post("last_name"),
         'email_id'   =>$this->input->post("email_id"),
         'phone_no'=>$this->input->post("phone_no"),
         'plan_name'=>$this->input->post("plan_name"),
         'plan_price'=>$this->input->post("plan_price"),
         'groom-wear-budget'=>$this->input->post("groom-wear-budget"),
         'to-groom-budget'=>$this->input->post("to-groom-budget"),
         'from-groom-budget'=>$this->input->post("from-groom-budget"),
         'preffered-culture-attire'=>$this->input->post("preffered-culture-attire"),
         'design_element'=>$designelement,
         'preffered-color-choice-attire'=>$this->input->post("preffered-color-choice-attire"),
         // 'prefered_outfit'=>$preferedoutfit,
         'accessories_outfit'=>$accessoriesoutfit,
         'match_attire'=>$this->input->post("match_attire"),
         'occassion-groom-wear'=>$occassiongroomwear,
         'style-image'=>$upload_data["file_name"],
         'products_looking_for'=> $productslookingfor,
         // 'fabric_for_outfit'=>$outfitfabric,
         'match_outfit'=>$this->input->post("match_outfit"),
         'require_time'=>$this->input->post("require_time"),
         'additional_service'=>$additionalservice);
      
      // pr($data, '');exit;
        $this->VendorserviceformModel->insertgroomdata($data);

        redirect('thankyou');
    }

   public function adddecrodata()
   {
           $files = $_FILES;
           $config['upload_path']   = './uploads/decor-image'; 
           $config['allowed_types'] = '*';
           $_FILES['reference_image']['name']= date('s').'-'.$files['reference_image']['name'];
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if (!$this->upload->do_upload('reference_image')) 
           {
              $error = array('error' => $this->upload->display_errors()); 
           }
           else 
           { 
              $upload_data = $this->upload->data();
           }
         //   pr($upload_data, '');
       $eventtype=implode(",",$this->input->post("event_type"));
       $decorationstyle=implode(",",$this->input->post("decoration_style"));
       $hilightspaces=implode(",",$this->input->post("hilight_spaces"));


       $data= array(
          'first_name' =>$this->input->post("first_name"), 
          'userid' =>$this->input->post("uids"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'decoration_budget'=>$this->input->post("decoration_budget"),
                     'event_type'=>$eventtype,
                     'decoration_style'=>$decorationstyle,
                     'no_of_guest'=>$this->input->post("no_of_guest"),
                     'event_place'=>$this->input->post("event_place"),
                     'decoration_color_preference'=>$this->input->post("decoration_color_preference"),
                     'hilight_spaces'=>$hilightspaces,
                     'regional_influence'=>$this->input->post("regional_influence"),
                     'decor_elements'=>$this->input->post("decor_elements"),
                     'reference_image'=>$upload_data["file_name"],
                     'event_date'=>$this->input->post("event_date"),
                     'finalize_date'=> $this->input->post("finalize_date")
                  );
      //  pr($data, '');exit;
        $this->VendorserviceformModel->insertdecordata($data);

        redirect('thankyou');

  
   }


    public function addgiftdata()
    {
           $files = $_FILES;
           $config['upload_path']   = './uploads/gift-image'; 
           $config['allowed_types'] = '*';
           $_FILES['reference_image']['name']= date('s').'-'.$files['reference_image']['name'];
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if (!$this->upload->do_upload('reference_image')) 
           {
              $error = array('error' => $this->upload->display_errors()); 
           }
           else 
           { 
              $upload_data = $this->upload->data();
           }


        $gifttheme=implode(",",$this->input->post("gift_theme"));
        $occassion=implode(",",$this->input->post("gift_occassion"));
        $specificfeature=implode(",",$this->input->post("specific_features"));
        $data= array(
                     'first_name' =>$this->input->post("first_name"), 
                     'user_id' =>$this->input->post("uids"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'gift_budget'=>$this->input->post("gift_budget"),
                     'type_of_gift'=>$this->input->post("type_of_gift"),
                     'gift_theme'=>$gifttheme,
                     'moq'=>$this->input->post("moq"),
                     'gift_occassion'=>$occassion,
                     // 'per_kg_price_range'=>$this->input->post("per_kg_price_range"),
                     'per_gift_budget'=>$this->input->post("per_gift_budget"),
                     'finalize_gift_vendor'=>$this->input->post("finalize_gift_vendor"),
                     'specific_features'=>$specificfeature,
                     'reference_image'=>$upload_data["file_name"],
                     'event-date'=>$this->input->post("event-date"),
                     'gift_location'=>$this->input->post("gift_location"),
                  );
                     // pr($data, '');exit;
        $this->VendorserviceformModel->insertgiftdata($data);
        redirect('thankyou');
    }


    public  function addmehendidata()
    {
       $files = $_FILES;
       $config['upload_path']   = './uploads/mehendi-image'; 
       $config['allowed_types'] = '*';
       $_FILES['mehendi-design-image']['name']= date('s').'-'.$files['mehendi-design-image']['name'];
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       if (!$this->upload->do_upload('mehendi-design-image')) 
       {
          $error = array('error' => $this->upload->display_errors()); 
       }
       else 
       { 
          $upload_data = $this->upload->data();
       }


        $mehendistyle=implode(",",$this->input->post("mehendi_style"));
        $other=implode(",",$this->input->post("other_requirements"));
        
       
        $data= array(
                     'first_name' =>$this->input->post("first_name"), 
                     'userid' =>$this->input->post("uids"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'event-date'=>$this->input->post("event-date"),
                     'event_city'=>$this->input->post("event_city"),
                     'mehendi_budget'=>$this->input->post("mehendi_budget"),
                     'guest_budget_range'=>$this->input->post("guest_budget_range"),
                     'mehendi-design-image'=>$upload_data["file_name"],
                     'mehendi_service_type'=>$this->input->post("mehendi_service_type"),
                     'mehendi_guest_count'=>$this->input->post("mehendi_guest_count"),
                     'mehendi_style'=>$mehendistyle,
                     'mehendi_experience'=>$this->input->post("mehendi_experience"),
                     // 'photography_budget'=>$this->input->post("photography_budget"),
                     'other_requirements'=>$other
                  );
        $this->VendorserviceformModel->insertmehendidata($data);
        redirect('thankyou');
    }
  

    public function addmakeupdata()
    {
        $makeuptechnique=implode(",",$this->input->post("makeup_technique"));
        $makeupocassion=implode(",",$this->input->post("makeup_service_for_ocassion"));

        $producttype=implode(",",$this->input->post("product_type"));
        $additionalservice=implode(",",$this->input->post("additional_service"));
        $experience=implode(",",$this->input->post("experience_prefer"));
        
       
        $data= array(
                     'first_name' =>$this->input->post("first_name"), 
                     'userid' =>$this->input->post("uids"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     'event_date'=>$this->input->post("event_date"),
                     'event_schedule'=>$this->input->post("event_schedule"),
                     'no_of_makeup_service'=>$this->input->post("no_of_makeup_service"),
                     'preferred_location'=>$this->input->post("preferred_location"),
                     'out_station_ok'=>$this->input->post("out_station_ok"),
                     'makeup_budget'=>$this->input->post("makeup-budget-range"),
                     'makeup_technique'=>$makeuptechnique,
                     'makeup_service_for_ocassion'=>$makeupocassion,
                     'product_type'=>$producttype,
                     'additional_service'=>$additionalservice,
                     'experience_prefer'=>$experience);
        $this->VendorserviceformModel->insertmakeupdata($data);
        redirect('thankyou');
    }


    public function addvenuedata()
    {
        $facility=implode(",",$this->input->post("facility"));
        $prenoofguest = implode("--",$this->input->post("pre-no-of-guest"));
        $venuetype = implode(",",$this->input->post("venue-type"));
        $venueservice = implode(",",$this->input->post("venue-service"));
     
        $data= array(
                     'userid' =>$this->input->post("uids"), 
                     'first_name' =>$this->input->post("first_name"), 
                     'last_name'   =>$this->input->post("last_name"),
                     'email_id'   =>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'plan_name'=>$this->input->post("plan_name"),
                     'plan_price'=>$this->input->post("plan_price"),
                     // 'role'=>$this->input->post("role"),
                     'amount'=>$this->input->post("amount"),
                     'culture'=>$this->input->post("culture"),
                     'wedding-date'=>$this->input->post("wedding-date"),
                     'belong-to-same-city'=>$this->input->post("belong-to-same-city"),
                     'both_city'=>$this->input->post("both_city"),
                     'groom-city'=>$this->input->post("groom-city"),
                     'brid-city'=>$this->input->post("brid-city"),
                     'pre-no-of-guest'=>$prenoofguest,
                     // 'wedding-no-of-guest'=>$this->input->post("wedding-no-of-guest"),
                     // 'post-wedding-no-of-guest  '=>$this->input->post("post-wedding-no-of-guest"),
                     'same-wedding-location'=>$this->input->post("same-wedding-location"),
                     'approx_venue_budget'=>$this->input->post("approx_venue_budget"),
                     'start-date'=>$this->input->post("start-date"),
                     'end-date'=>$this->input->post("end-date"),
                     'venue-city'=>$this->input->post("venue-city"),
                     'venue-type'=>$venuetype,
                     'venue-service'=>$venueservice,
                     'no_of_rooms'=>$this->input->post("no_of_rooms"),
                     'no_of_guest'=>$this->input->post("no_of_guest"),
                     'arrival-start-date'=>$this->input->post("arrival-start-date"),
                     'arrival-end-date'=>$this->input->post("arrival-end-date"),
                     // 'themes'=>$this->input->post("themes"),
                     'capecity'=>$this->input->post("capecity"),
                     'event-spaces'=>$this->input->post("event-spaces"),
                     // 'wedding-theme'=>$this->input->post("wedding-theme"),
                     'facility'=>$facility,
                      'transport-service'=>$this->input->post("transport-service"),
                 );
               //   pr($data, '');exit;
        $this->VendorserviceformModel->insertvenueupdata($data);
        redirect('thankyou');
    }
}
