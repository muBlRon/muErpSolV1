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
class FormUtil 
{
    //put your code here
    
    
    public static function getYear()
    {
        $date= CTimestamp::getDate();
        
         
       
        return $date['year'];
        
    }
    
    public static function yearForDropDown()
    {
        $date= CTimestamp::getDate();
        $range=11;
         
        $string = array();
        $string[$date['year']-$range]='  ';
         
            for($i=$date['year']- ($range-1);$i<=$date['year'];$i++)
            {
            
                $string[$i] =   $i;
                
            }
            
       
            return $string;
        
    }
    
    public static function getTerm($id)
    {
        
        
         if($id==1)
             $string = 'Spring';
         elseif($id==2)
             $string = 'Summer';
         elseif($id==3)
             $string = 'Autumn';
                 
        
            
            
       
            return $string;
        
    }
    
    public static function getBatchNumber($startTerm,$startYear,$currentTerm,$currentYear)
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
