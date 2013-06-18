<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utility
 *
 * @author ron
 */
class FormUtil extends CDateFormatter
{
    //put your code here
    
    
    public static function getYear()
    {
        $date= CTimestamp::getDate();
        
         
       
        return $date['year'];
        
    }
    
    public static function getCurrentTerm()
    {
        $month= parent::formatMonth('M', CTimestamp::getDate());
        
        if ($month<=4 && $month >=0)
            return 1;
        elseif ($month<=8 && $month >=5) 
            return 2;
        elseif ($month<=12 && $month >=9) 
            return 3;
        
    }
    
    
    public static function yearForDropDown()
    {
        $date= CTimestamp::getDate();
        $range=2002;
         
        $string = array();
        //$string[$date['year']-$range]='  ';
         
            for($i= $range;$i<=$date['year'];$i++)
            {
            
                $string[$i] =   $i;
                
            }
            
       
            return $string;
        
    }
    
    public static function getBatchNameSufix($batch)
    {
        if($batch<4 || $batch>13)$number = $batch%10;
        
        if($number ==1 )
            return "rst";
        elseif($number == 2)
            return "nd";
        elseif($number == 3)
            return "rd";
        else   
            return "th";
        
    }

    public static function getTerm($id)
    {
        
        
         if($id==1)
             $string = 'Spring';
         elseif($id==2)
             $string = 'Summer';
         elseif($id==3)
             $string = 'Autumn';
         else {
             $string ='Not Specified';
         }
                 
        
            
            
       
            return $string;
        
    }
    
    public static function getBatchFromProgrammeCode($code, $currentTerm, $currentYear)
    {
        
        $model = Programme::model()->findByPk($code);
        
        return FormUtil::getBatchNumber($model->pro_startTerm, $model->pro_startYear, $currentTerm, $currentYear);
    }

    private static function getBatchNumber($startTerm,$startYear,$currentTerm,$currentYear)
    {
        
        if( ($startTerm >0 && $startTerm <4) &&  ($currentTerm >0 && $currentTerm <4) && ($startYear<=$currentYear) )
        {
            $batch = ((($currentYear-$startYear)*3)-$startTerm+$currentTerm)+1;
        }
        else {
            $batch=0;
        }
        
        return $batch;
        
    }
    
    
    
    
    
    
    
    
    
    
}

?>
