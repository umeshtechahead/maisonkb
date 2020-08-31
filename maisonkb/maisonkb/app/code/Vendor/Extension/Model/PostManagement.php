<?php
namespace Vendor\Extension\Model;
use Vendor\Extension\Api\PostManagementInterface;
class PostManagement implements PostManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function customGetMethod($storeid,$name)
    {
        try{
            $response = [
                    'storeid' => $storeid,
                    'name' =>$name
            ];
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }

        return json_encode($response);
    }
    /**
     * {@inheritdoc}
     */
    public function customPostMethod($storeid,$name,$city)
    {
        try{
            $response = [
                'storeid' => $storeid,
                'name' =>$name,
                'city'=>$city
            ];
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }
        return json_encode($response);
    }
}