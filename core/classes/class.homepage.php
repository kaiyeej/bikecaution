<?php

class Homepage extends Connection
{
    public function total_documents(){
        $result = $this->select("tbl_documents", "count(doc_id)");
        $row = $result->fetch_array();
        return $row[0];
    }

    public function total_courses(){
        $result = $this->select("tbl_courses", "count(course_id)");
        $row = $result->fetch_array();
        return $row[0];
    }

    public function total_subjects(){
      $result = $this->select("tbl_subjects", "count(subject_id)");
        $row = $result->fetch_array();
        return $row[0];
    }

    public function total_users(){
      $result = $this->select("tbl_users", "count(user_id)");
        $row = $result->fetch_array();
        return $row[0];
    }
}

?>
