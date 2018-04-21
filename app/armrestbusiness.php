<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class armrestbusiness extends Model
{
   static function show ()
   {
      $manufacturernames = DB::table('Ref_Car_Manufacturer')->select('car_manufacturer_name','car_manufacturer_code')->orderBy('car_manufacturer_name')->get();
      return $manufacturernames;
   }


       static function showcountmodels () {
        $armrestpicture=DB::table('Cars')->select('car_manufacturer_code')->orderBy('car_manufacturer_code')->get();
        $models=array();
        $j=0;
        $m=0;
        for($i=0; $i<count($armrestpicture); $i++){
            if((($i+1)<count($armrestpicture))&&($armrestpicture[$i]->car_manufacturer_code)==($armrestpicture[$i+1]->car_manufacturer_code)){
                $j=$j+1;
            } else {$j=$j+1;
                    $model=array($m => $j);
                    $models=array_merge($models,$model);
                    $j=0;
                    $m=$m+1;}
        }
        $sting=implode(",", $models);
        return  $sting;
    }

    static function showmodels () {
        $armrestpicture=DB::table('cars')
            ->leftJoin('ref_car_manufacturer', 'cars.car_manufacturer_code', '=', 'ref_car_manufacturer.car_manufacturer_code')
            ->select('car_id', 'model', 'car_manufacturer_name','cars.car_manufacturer_code')
        ->orderBy('car_manufacturer_name')->get();
        return  $armrestpicture;
    }


     static function showarmrestpicture ()
     {
         $armrestpicture = DB::table('Armrests')->leftJoin('cars', 'armrests.car_id', '=', 'cars.car_id')->select('cars.car_id', 'path', 'car_manufacturer_code','model','price')->orderBy('car_manufacturer_code')->paginate(15);
         return $armrestpicture;
     }

     static function showarmrest($id) {
       $armrest=DB::table('Armrests')->select('armrest_id', 'path', 'price', 'quantity_logo' )->where('armrest_id', '=', $id)->get();
       return $armrest;
     }

    static function showonemanufacturermodels ($id)
    {
        $armrestpicture = DB::table('Armrests')->leftJoin('cars', 'armrests.car_id', '=', 'cars.car_id')->select('cars.car_id', 'path', 'car_manufacturer_code','model','price')->where('car_manufacturer_code', '=', $id)->get();
        return $armrestpicture;
    }
    static function showmanufacturername ($id) {
        $manufacturername = DB::table('Ref_Car_Manufacturer')->select('car_manufacturer_name','car_manufacturer_code')->where('car_manufacturer_code', '=', $id)->get();
        return $manufacturername;
    }
    static function showonemodel ($id)
    {
        $armrestpicture=DB::table('cars')
            ->leftJoin('ref_car_manufacturer', 'cars.car_manufacturer_code', '=', 'ref_car_manufacturer.car_manufacturer_code')
            ->select('car_id', 'model', 'car_manufacturer_name','cars.car_manufacturer_code')
            ->where('car_id', '=', $id)->get();
        return $armrestpicture;
    }




}
