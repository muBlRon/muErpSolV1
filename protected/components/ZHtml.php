<?PHP

class ZHtml extends CHtml
{
        private function enumItem($model,$attribute)
        {
                $attr=$attribute;
                self::resolveName($model,$attr);
                preg_match('/\((.*)\)/',$model->tableSchema->columns[$attr]->dbType,$matches);
                foreach(explode(',', $matches[1]) as $value)
                {
                        $value=str_replace("'",null,$value);
                        $values[$value]=Yii::t('enumItem',$value);
                }
                
                return $values;
        }  

       public static function enumActiveDropDownList($model, $attribute, $htmlOptions)
       {
          return CHtml::activeDropDownList( $model, $attribute,ZHtml::enumItem($model,  $attribute), $htmlOptions);
       
       
       }

       public static function enumDropDownList($name, $select,$model, $htmlOptions)
       {
           if(strpbrk($name, '[]'))
           {
               $attribute = str_replace(substr($name, -3), '', $name);
           }
           
           //echo $name;
           

           return CHtml::dropDownList( $name, $select,ZHtml::enumItem($model,  $attribute), $htmlOptions);
       
       
       }
       
        public static function enumActiveRadioButtonList($model, $attribute, $htmlOptions=array())
        {
            return CHtml::activeRadioButtonList( $model, $attribute, self::enumItem($model,  $attribute), $htmlOptions);
        }
       
         public static function enumCheckBox($model,$attribute, $htmlOptions=array())
        {
            
            return CHtml::checkBoxList( $attribute, self::enumItem($model,  $attribute), $htmlOptions);
        }
       
}

?>