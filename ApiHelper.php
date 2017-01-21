<?php

namespace jmoguelruiz\yii2\helpers;

use Yii;

class ApiHelper{
   
    /**
     * 
     * Verify the attributes required.
     * 
     * @param arr $requiredAttributes Attributes required.
     * @param arr $params Data to verify attributes.
     * @throws BadRequestHttpException Missing parameter: '{parameter}' is required.
     */
    public static function validRequiredAttributes($requiredAttributes, $params)
    {
        foreach ($requiredAttributes as $attribute) {
            if (empty($params[$attribute])) {
                throw new BadRequestHttpException(Yii::t('base', "Missing parameter: '{parameter}' is required.", ['parameter' => $attribute]));
            }
        }
    }
    
    /**
     * Remove elements in array.
     * 
     * @param arr $elements Fields to search in data for remove.
     * @param arr $data All data.
     */
    public static function unsetElementsInArray($elements, $data)
    {
        foreach ($elements as $element) {
            if (isset($data[$element])) {
                unset($data[$element]);
            }
        }
    }

}

