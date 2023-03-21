<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchSetup extends Model
{
    use HasFactory;
    protected $table='branchs';
    protected $fillable = [
        'code',
        'name',
        'address',
        'country',
        'city',
        'contact_no',
        'email',
        'web_address',
        'currency',
        'logo',
        'type',
        'saturday',
        'saturday_opentime',
        'saturday_closetime',
        'sunday',
        'sunday_opentime',
        'sunday_closetime',
        'monday',
        'monday_opentime',
        'monday_closetime',
        'tuesday',
        'tuesday_opentime',
        'tuesday_closetime',
        'wednesday',
        'wednesday_opentime',
        'wednesday_closetime',
        'thursday',
        'thursday_opentime',
        'thursday_closetime',
        'friday',
        'friday_opentime',
        'friday_closetime',
        'status',
    ];
        private static $article, $articleImage,  $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request, $existImage = null)
    {
        self::$articleImage = $request->file('logo');
        if (self::$articleImage) {
            if ($existImage) {
                if (file_exists($existImage)) {
                    unlink($existImage);
                }

            }
            self::$imageName = 'auto-pilot_' . time() . '.' . self::$articleImage->getClientOriginalExtension();
            self::$imageDirectory = 'public/images/business/uploaded-images/branch-logo/';
            self::$articleImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        }
        else {
            self::$imageUrl = $existImage;
        }
        return self::$imageUrl;
    }
    protected $casts = [
        'type' => 'array',
    ];

    public static function createOrUpdateBranch($request, $id=null)
    {
         BranchSetup::updateOrCreate(['id' => $id],[
            'code'                                  => $request->code,
            'name'                                 => $request->name,
            'address'                              => $request->address,
            'country'                             => $request->country,
            'city'                                    => $request->city,
            'contact_no'                         => $request->contact_no,
            'email'                                  => $request->email,
            'web_address'                     => $request->web_address,
            'currency'                           => $request->currency,
            'logo'                                   => self::saveImage($request, isset($id) ? BranchSetup::find($id)->logo : ''),
            'type'                                   =>$request->type,
            'saturday'                             =>$request->saturday,
            'saturday_opentime'           =>$request->saturday_opentime,
            'saturday_closetime'           =>$request->saturday_closetime,
            'sunday'                                =>$request->sunday,
            'sunday_opentime'               =>$request->sunday_opentime,
            'sunday_closetime'              =>$request->sunday_closetime,
            'monday'                             =>$request->monday,
            'monday_opentime'             =>$request->monday_opentime,
            'monday_closetime'               =>$request->monday_closetime,
            'tuesday'                               =>$request->tuesday,
            'tuesday_opentime'               =>$request->tuesday_opentime,
            'tuesday_closetime'                 =>$request->tuesday_closetime,
            'wednesday'                             =>$request->wednesday,
            'wednesday_opentime'           =>$request->wednesday_opentime,
            'wednesday_closetime'           =>$request->wednesday_closetime,
            'thursday'                                 =>$request->thursday,
            'thursday_opentime'                 =>$request->thursday_opentime,
            'thursday_closetime'                =>$request->thursday_closetime,
            'friday'                                     =>$request->friday,
            'friday_opentime'                    =>$request->friday_opentime,
            'friday_closetime'                  =>$request->friday_closetime,
            'status'                                    =>$request->status,
        ]);
    }

    public $timestamps = false;
}
