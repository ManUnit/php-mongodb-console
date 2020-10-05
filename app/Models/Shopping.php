<?php

namespace App\Models;

use Nantaburi\Mongodb\MongoNativeDriver\Model as NanModel ;
class Shopping extends NanModel
{
 
    protected $database = "shopping" ; 
    protected $collection ="products" ;  // default collection
    protected $schema = [ 
                    'produts'=> [
                                'id' => [  
                                        'AutoInc' => true ,
                                        'AutoIncStartwith' => 10,
                                        'Index' => true,
                                        'Unique' => true 
                                        ] ,
                                'name',
                                'description',
                                'description_th','image','price',
                                'type_id'
                            ] ,
                    'products_group' => [
                                'cat_id' => [ 
                                        'AutoInc' => true ,
                                        'AutoIncStartwith' => 10,
                                        'Index' => true,
                                        'Unique' => true 
                                        ] ,
                                'description',
                    ] ,
                    'products_type' => [
                        'type_id' => [ 
                                'AutoInc' => true ,
                                'AutoIncStartwith' => 10,
                                'Index' => true,
                                'Unique' => true 
                                ] ,
                        'description',
                        'descriotion_th',
                        'type_groupid'
            ]              
        ] ;
}
