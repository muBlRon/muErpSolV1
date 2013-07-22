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
      
        
        $sql = " SELECT MAX(CONVERT(SUBSTRING_INDEX(a.studentID,'-',-1),UNSIGNED INTEGER))+1 AS studentID ,SUBSTRING(CONVERT(b.bat_year, char),-2) as acYear, s.sectionName, s.batchName, s.programmeCode , s.sec_startId ,s.sec_endId, b.bat_term, b.bat_year "
        . " FROM `tbl_admission` as a RIGHT OUTER JOIN `tbl_section` as s ON ( a.batchName=s.batchName and a.programmeCode=s.programmeCode) "
        . " RIGHT OUTER JOIN `tbl_batch` as b "
        . " ON (s.batchName=b.batchName and s.programmeCode=b.programmeCode) "
        . " WHERE s.sectionName='{$sectionName}' and b.batchName={$batchName} and b.programmeCode='{$programmeCode}' GROUP BY b.programmeCode;"; 
        
        
       $list= Yii::app()->db->createCommand($sql)->query();
 
       $rs= array();
       
        foreach($list as $item){
    
           $rs=$item;

        }
        
        
        ((!$rs['studentID'])?$id=1:$id=$rs['studentID']);
        
        if($id>=$rs['sec_startId'] && $id <=$rs['sec_endId'])
        {
            
            if($id<10)$id="00".$id;
            elseif($id<100)$id="0".$id;
            
             $id=$rs['acYear'].$rs['bat_term']."-".$rs['programmeCode']."-".$id;
             $rs['studentID']=$id;
             return $rs;
        }
        else 
        {
            return null;
        }
    }
        
    public static function getProgrammeByCode($id)
    {
        $model=  Programme::model()->findByPk($id);
        
        return $model->programmeCode.": ".$model->pro_name." [".$model->pro_shortName."]";
    }
        
        
        
        
        
}

?>
