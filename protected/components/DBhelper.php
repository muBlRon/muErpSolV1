<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBhelper
 *
 * @author ron
 */
class DBhelper {
    //put your code here
    
    public static function getSchoolIdFromDpt($id)
    {
        return Department::model()->findByPk($id)->schoolID;
    }
    
    public static function getDepartmentIdFromPro($id)
    {
        return Programme::model()->findByPk($id)->departmentID;
    }
    
    
    
    public static function getDepartmentNameById($id)
    {
            
                $data = Department::model()->findByPk($id)->dpt_name;
                
                if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $data;
    }

    
    public static function getSchoolNameById($id)
    {
            
                $school = School::model()->findByPk($id)->sch_name;
                
                if($school===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $school;
    }
        
    
    public static function getProgrammeNameById($id)
    {
        
        $data =  Programme::model()->findByPk($id)->pro_name;
                
                if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $data;
        
        
    }
        
        
        
        
        
        
        
        
        
        
        
        
        
}

?>
