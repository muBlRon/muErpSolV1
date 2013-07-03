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
    
    public static function getAcademicYearByBatch($batch,$programme)
    {
        
        $model=Batch::model()->findByPk(array('batchName'=>$batch,'programmeCode'=>$programme));
        
        $data =FormUtil::getTerm($model->bat_term)." ".$model->bat_year;
                if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $data;
        
        
    }
        
        
        
    public static function getFullNameByPersonID($id)
    {
        $model = Person::model()->findByPk($id);
        
        return  $model->per_title." ".$model->per_firstName." ".$model->per_lastName;
    }
        
    public static function getStudentId($sectionName,$batchName,$programmeCode)
    {
       $sql = "SELECT MAX(CONVERT(SUBSTRING_INDEX(a.studentID,'-',-1),UNSIGNED INTEGER)) AS num ,SUBSTRING(CONVERT(b.bat_year, char),-2) as acYear, a.sectionName, a.programmeCode , s.sec_startId ,s.sec_endId,b.bat_term FROM `tbl_admission` as a, `tbl_section` as s, `tbl_batch` as b WHERE a.sectionName=s.sectionName and a.batchName=s.batchName and a.programmeCode=s.programmeCode and"
        . " s.batchName=b.batchName and s.programmeCode=b.programmeCode and a.sectionName='{$sectionName}' and a.batchName={$batchName} and a.programmeCode='{$programmeCode}' GROUP BY a.programmeCode limit 1;";    
    
       $list= Yii::app()->db->createCommand($sql)->query();
 
       $rs= array();
       
        foreach($list as $item){
    
           $rs=$item;

        }
        
        $id=$rs['num']+1;
        
        if($id>=$rs['sec_startId'] && $id <=$rs['sec_endId'])
        {
            
            if($id<10)$id="00".$id;
            elseif($id<100)$id="0".$id;
            
            return $id=$rs['acYear'].$rs['bat_term']."-".$rs['programmeCode']."-".$id;
        }
        else 
        {
            return null;
        }
    }
        
        
        
        
        
        
        
}

?>
