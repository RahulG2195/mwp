<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class FilterModel extends CI_Model
{
    // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

    public function Get_Filter_output($vendor, $city, $dataArray = array(), $start = 0)
    {

        // get vendor id 
        $this->db->select('category_id, name');
        $this->db->from('master_category');
        $this->db->where('cat_seo_url', $vendor);
        $output = $this->db->get()->row_array();
        $cat_id = $output['category_id'];

        // get city id 
        $this->db->select('city_id, name');
        $this->db->from('master_city');
        $this->db->where('name', $city);
        $output = $this->db->get()->row_array();
        $city_id = $output['city_id'];

        if (!empty($dataArray)) {

            // count vendor after filter 
            if ($vendor == 'Venues') {

                $this->db->select('default_vendor_inp.*,  venue.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('venue', 'venue.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['price_plate'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_plate'] as $price_plate) {
                        $per_plate_range = explode('-', $price_plate);
                        $this->db->or_where('CAST(price_per_plate AS SIGNED) >=', $per_plate_range[0], FALSE);
                        if (!empty($per_plate_range[1])) {
                            $this->db->where('CAST(price_per_plate AS SIGNED) <=', $per_plate_range[1], FALSE);
                        }
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['event_spaces'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['event_spaces'] as $event_space) {
                        $this->db->or_like('venue.event_spaces', $event_space);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
               
            } elseif ($vendor == 'Bridal-Wear') {

                $this->db->select('default_vendor_inp.*,  bridal_wear.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('bridal_wear', 'bridal_wear.vin_id = default_vendor_inp.dv_id', 'left');

                // Filtering based on event_spaces
                if (!empty($dataArray['prod_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['prod_type'] as $prod_type) {
                        $this->db->or_like('bridal_wear.prod_type', $prod_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Groom-Wear') {
                $this->db->select('default_vendor_inp.*,  groom_wear.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('groom_wear', 'groom_wear.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['prod_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['prod_type'] as $prod_type) {
                        $this->db->or_like('groom_wear.prod_type', $prod_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                
            } elseif ($vendor == 'Photographers') {
                $this->db->select('default_vendor_inp.*,  photography.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('photography', 'photography.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['ppackage_range2'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['ppackage_range2'] as $ppackage_range2) {
                        $this->db->or_like('ppackage_range2', $ppackage_range2);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

              
                if (!empty($dataArray['vendor_exp'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['vendor_exp'] as $vendor_exp) {
                        $this->db->or_where('no_of_yrs', $vendor_exp);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Make-Up-Artists') {

                $this->db->select('default_vendor_inp.*,  make_up.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('make_up', 'make_up.vin_id = default_vendor_inp.dv_id', 'left');

                // if (!empty($dataArray['make_feature'])) {
                //     $this->db->like('default_vendor_inp.features', $dataArray['make_feature']);
                // }

                if (!empty($dataArray['make_feature'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['make_feature'] as $make_feature) {
                        $this->db->or_like('features', $make_feature);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['make_techs'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['make_techs'] as $make_techs) {
                        $this->db->or_like('make_up.make_tech', $make_techs);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
                
            } elseif ($vendor == 'Mehendi-Artists') {

                $this->db->select('default_vendor_inp.*,  mehendi.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('mehendi', 'mehendi.vin_id = default_vendor_inp.dv_id', 'left');


                // if (!empty($dataArray['max_people'])) {
                //     $this->db->where('max_people', $dataArray['max_people']);
                // }

                if (!empty($dataArray['max_people'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['max_people'] as $max_people) {
                        $this->db->or_where('max_people', $max_people);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                if (!empty($dataArray['vendor_exp'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['vendor_exp'] as $vendor_exp) {
                        $this->db->or_where('no_of_yrs', $vendor_exp);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }


            } elseif ($vendor == 'Bridal-Jewellery') {
                $this->db->select('default_vendor_inp.*,  bridal_jewellery.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('bridal_jewellery', 'bridal_jewellery.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['jew_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['jew_type'] as $jew_type) {
                        $this->db->or_like('bridal_jewellery.jew_type', $jew_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Decoration') {
                $this->db->select('default_vendor_inp.*,  decorator.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('decorator', 'decorator.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['price_detail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_detail'] as $price_detail) {
                        $this->db->or_where('price_range', $price_detail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
            } elseif ($vendor == 'Gifts') {
                $this->db->select('default_vendor_inp.*,  gift.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('gift', 'gift.vin_id = default_vendor_inp.dv_id', 'left');


                if (!empty($dataArray['moq_ranger'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['moq_ranger'] as $moq_ranger) {
                        $this->db->where('range_editable', $moq_ranger);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                if (!empty($dataArray['moq_ranger'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['moq_ranger'] as $moq_ranger) {
                        $this->db->or_where('range_non_editable', $moq_ranger);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['gift_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['gift_type'] as $gift_type) {
                        $this->db->or_like('gift.gift_type', $gift_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
               
            } elseif ($vendor == 'Catering') {
                $this->db->select('default_vendor_inp.*,  catering.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('catering', 'catering.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['menu_opt'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['menu_opt'] as $menu_opt) {
                        $this->db->or_like('catering.menu_opt', $menu_opt);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Invitations') {
                $this->db->select('default_vendor_inp.*, inivitations.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('inivitations', 'inivitations.vin_id = default_vendor_inp.dv_id', 'left');


                if (!empty($dataArray['paper_style_avail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['paper_style_avail'] as $paper_style_avail) {
                        $this->db->or_like('paper_style_avail', $paper_style_avail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['type_avail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['type_avail'] as $type_avail) {
                        $this->db->or_like('inivitations.type_avail', $type_avail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            }
            if ($vendor !== 'Decoration') {
                if (!empty($dataArray['price_detail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_detail'] as $price_detail) {
                        $this->db->or_where('price_range', $price_detail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
            }

            // Additional conditions
            $this->db->where('default_vendor_inp.vendor_status', 1);
            $this->db->where('default_vendor_inp.category', $cat_id);
            $this->db->where('default_vendor_inp.city', $city_id);

            $this->db->order_by('rating', 'DESC');

            if(isset($dataArray['sort'])) {
                if($dataArray['sort'] == 'Low') {
                    $this->db->order_by('dv_start_price', 'Asc');
                } else if($dataArray['sort'] == 'High') {
                    $this->db->order_by('dv_start_price', 'Desc');
                }
            }else{
                $this->db->order_by('dv_start_price', 'Desc');
            }
            $count_row = $this->db->get();

            //end


            // filter data query 
            if ($vendor == 'Venues') {

                $this->db->select('default_vendor_inp.*,  venue.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('venue', 'venue.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['price_plate'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_plate'] as $price_plate) {
                        $per_plate_range = explode('-', $price_plate);
                        $this->db->or_where('CAST(price_per_plate AS SIGNED) >=', $per_plate_range[0], FALSE);
                        if (!empty($per_plate_range[1])) {
                            $this->db->where('CAST(price_per_plate AS SIGNED) <=', $per_plate_range[1], FALSE);
                        }
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['event_spaces'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['event_spaces'] as $event_space) {
                        $this->db->or_like('venue.event_spaces', $event_space);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
               
            } elseif ($vendor == 'Bridal-Wear') {

                $this->db->select('default_vendor_inp.*,  bridal_wear.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('bridal_wear', 'bridal_wear.vin_id = default_vendor_inp.dv_id', 'left');

                // Filtering based on event_spaces
                if (!empty($dataArray['prod_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['prod_type'] as $prod_type) {
                        $this->db->or_like('bridal_wear.prod_type', $prod_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Groom-Wear') {
                $this->db->select('default_vendor_inp.*,  groom_wear.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('groom_wear', 'groom_wear.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['prod_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['prod_type'] as $prod_type) {
                        $this->db->or_like('groom_wear.prod_type', $prod_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                
            } elseif ($vendor == 'Photographers') {
                $this->db->select('default_vendor_inp.*,  photography.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('photography', 'photography.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['ppackage_range2'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['ppackage_range2'] as $ppackage_range2) {
                        $this->db->or_like('ppackage_range2', $ppackage_range2);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

              
                if (!empty($dataArray['vendor_exp'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['vendor_exp'] as $vendor_exp) {
                        $this->db->or_where('no_of_yrs', $vendor_exp);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Make-Up-Artists') {

                $this->db->select('default_vendor_inp.*,  make_up.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('make_up', 'make_up.vin_id = default_vendor_inp.dv_id', 'left');

                // if (!empty($dataArray['make_feature'])) {
                //     $this->db->like('default_vendor_inp.features', $dataArray['make_feature']);
                // }

                if (!empty($dataArray['make_feature'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['make_feature'] as $make_feature) {
                        $this->db->or_like('features', $make_feature);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['make_techs'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['make_techs'] as $make_techs) {
                        $this->db->or_like('make_up.make_tech', $make_techs);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
                
            } elseif ($vendor == 'Mehendi-Artists') {

                $this->db->select('default_vendor_inp.*,  mehendi.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('mehendi', 'mehendi.vin_id = default_vendor_inp.dv_id', 'left');


                // if (!empty($dataArray['max_people'])) {
                //     $this->db->where('max_people', $dataArray['max_people']);
                // }

                if (!empty($dataArray['max_people'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['max_people'] as $max_people) {
                        $this->db->or_where('max_people', $max_people);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                if (!empty($dataArray['vendor_exp'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['vendor_exp'] as $vendor_exp) {
                        $this->db->or_where('no_of_yrs', $vendor_exp);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }


            } elseif ($vendor == 'Bridal-Jewellery') {
                $this->db->select('default_vendor_inp.*,  bridal_jewellery.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('bridal_jewellery', 'bridal_jewellery.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['jew_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['jew_type'] as $jew_type) {
                        $this->db->or_like('bridal_jewellery.jew_type', $jew_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Decoration') {
                $this->db->select('default_vendor_inp.*,  decorator.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('decorator', 'decorator.vin_id = default_vendor_inp.dv_id', 'left');

                if (!empty($dataArray['price_detail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_detail'] as $price_detail) {
                        $this->db->or_where('price_range', $price_detail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
            } elseif ($vendor == 'Gifts') {
                $this->db->select('default_vendor_inp.*,  gift.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('gift', 'gift.vin_id = default_vendor_inp.dv_id', 'left');


                if (!empty($dataArray['moq_ranger'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['moq_ranger'] as $moq_ranger) {
                        $this->db->where('range_editable', $moq_ranger);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                if (!empty($dataArray['moq_ranger'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['moq_ranger'] as $moq_ranger) {
                        $this->db->or_where('range_non_editable', $moq_ranger);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['gift_type'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['gift_type'] as $gift_type) {
                        $this->db->or_like('gift.gift_type', $gift_type);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
               
            } elseif ($vendor == 'Catering') {
                $this->db->select('default_vendor_inp.*,  catering.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('catering', 'catering.vin_id = default_vendor_inp.dv_id', 'left');


                // Filtering based on event_spaces
                if (!empty($dataArray['menu_opt'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['menu_opt'] as $menu_opt) {
                        $this->db->or_like('catering.menu_opt', $menu_opt);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            } elseif ($vendor == 'Invitations') {
                $this->db->select('default_vendor_inp.*, inivitations.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
                $this->db->from('default_vendor_inp');
                $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
                $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
                $this->db->join('inivitations', 'inivitations.vin_id = default_vendor_inp.dv_id', 'left');


                if (!empty($dataArray['paper_style_avail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['paper_style_avail'] as $paper_style_avail) {
                        $this->db->or_like('paper_style_avail', $paper_style_avail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

                // Filtering based on event_spaces
                if (!empty($dataArray['type_avail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['type_avail'] as $type_avail) {
                        $this->db->or_like('inivitations.type_avail', $type_avail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }

            }

            if ($vendor !== 'Decoration') {
                if (!empty($dataArray['price_detail'])) {
                    $this->db->group_start(); // Start a group for OR conditions
                    foreach ($dataArray['price_detail'] as $price_detail) {
                        $this->db->or_where('price_range', $price_detail);
                    }
                    $this->db->group_end(); // End the group for OR conditions  
                }
            }
            // Additional conditions
            $this->db->where('default_vendor_inp.vendor_status', 1);
            $this->db->where('default_vendor_inp.category', $cat_id);
            $this->db->where('default_vendor_inp.city', $city_id);

            $this->db->order_by('rating', 'DESC');

            if(isset($dataArray['sort'])) {
                if($dataArray['sort'] == 'Low') {
                    $this->db->order_by('dv_start_price', 'Asc');
                } else if($dataArray['sort'] == 'High') {
                    $this->db->order_by('dv_start_price', 'Desc');
                }
            }else{
                $this->db->order_by('dv_start_price', 'Desc');
            }
            $this->db->limit(24, $start);
            $query = $this->db->get();
            //  echo $this->db->last_query();
            //  exit;

            return array(
                'category_count' => $count_row->num_rows(),
                'result' => $query->result_array()
            );
        } else {
            // count data 
            $this->db->select('default_vendor_inp.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
            $this->db->from('default_vendor_inp');
            $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
            $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
            $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.category' => $cat_id, 'default_vendor_inp.city' => $city_id));

            $this->db->order_by('rating', 'DESC');
            $count_row = $this->db->get();

            // display data only if admin approve. 
            $this->db->select('default_vendor_inp.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name');
            $this->db->from('default_vendor_inp');
            $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
            $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
            $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.category' => $cat_id, 'default_vendor_inp.city' => $city_id));


            $this->db->limit(24, $start);
            $this->db->order_by('rating', 'DESC');
            $query = $this->db->get();
            $this->db->last_query();

            return array(
                'category_count' => $count_row->num_rows(),
                'result' => $query->result_array()
            );
        }
    }
}
