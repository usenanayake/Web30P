<?php

class adminModel extends CI_Model{

	function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';
                var_dump($orderby);
                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
                    var_dump($orderbyString);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();
            return $query->result();
        }
    }


    public function updateData($tablename, $data_arr, $where_arr) {
        try {

            $this->db->update($tablename, $data_arr, $where_arr);
            $report = array();
            // $report['error'] = $this->db->_error_number();
            // $report['message'] = $this->db->_error_message();
            return $report;
        } catch (Exception $err) {

            return $err->getMessage();
        }
    }

    function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

    public function deleteData($tblName,$where){

        return $this->db->delete($tblName,$where);
    }


    function Messagecount() {

        $query = $this->db->query("SELECT COUNT(*) as id FROM message");
        return $query->row_array();
    }

    function Itemcount() {
        
        $query = $this->db->query("SELECT COUNT(*) as product_id FROM product1");
        return $query->row_array();
    }

    function Imagecount() {
        
        $query = $this->db->query("SELECT COUNT(*) as image_ID FROM gallery");
        return $query->row_array();
    }
}