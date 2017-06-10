<?php 


    /**
    * 
    */
    class Validation
    {
        protected $data;
        protected $errors = array();
      
        public function __construct($data = array() , $rules = array())
        {
            $this->data = $data;

            foreach ($rules as $field_key => $field_val)
            {
                // echo $field_key . '--' . $field_val;
                //$field_key  tương ứng => username
                //$field_val  tương ứng => cá rules điều kiện
                

                /**
                 * chuyển 1 chuỗi thành 1 mảng vs ký tự tách mảng là |
                 * @var [string]
                 */
                $rules_array = explode('|',$field_val);


                /**
                 *  lặp các điều kiện 
                 */
                foreach($rules_array as $rule)
                {
                    /**
                     * các điều kiện hiện giờ có dạng : required|min:5
                     * nên chuyển về chuỗi để xử lý
                     */
                    
                    /**
                     * kiểm tra xem  nếu tồn tại  : trong điều kiện 
                     */
                    if(preg_match('/(.*):(.*)\w+/',$rule))
                    {
                        $currment_rule = explode(':',$rule);

                        $flagrule = $currment_rule[0];
                        $this->$flagrule($field_key,$currment_rule[1]);
                    }
                    else if(preg_match('/(.*):([a-z])/',$rule))
                    {

                    }
                    else
                    {
                        $this->$rule($field_key);
                    }

                }

               
            }
        }


        /**
         * required
         */
        
        public function required($field_key)
        {
            if(empty($this->data[$field_key]))
            {
                $this->errors[$field_key][] = " {$field_key} ! không được để trống";
               
            }

        }

        public function number($field_key)
        {
            if(! empty($this->data[$field_key]) && ! preg_match('/^[0-9]+$/',$this->data[$field_key]))
            {
                $this->errors[$field_key][] = " {$field_key} ! phải là 1 dãy số ";
               
            }

        }
        /**
         * min :  giá trị input lớn hơn  bao nhiêu ký tự
         */

        public function min($field_key,$min_length)
        {
           
            if(! empty($this->data[$field_key]) && strlen($this->data[$field_key]) < $min_length)
            {
                $this->errors[$field_key][] = " {$field_key} ! phải lớn hơn $min_length ";
            }
        }
        /**
         * check input file ko được để trống  ! 
         */

        public function image($field_key)
        {
            // $this->_debug($_FILES[$field_key]['error']);
            if(  ! empty($_FILES[$field_key]['error']))
            {
                $this->errors[$field_key][] = " {$field_key} ! không được để trống  ";
            }
            else if($_FILES[$field_key]['type'] != "image/jpeg" || $_FILES[$field_key]['type'] != "image/png" || $_FILES[$field_key]['type'] != "image/gif")
            {
                 $this->errors[$field_key][] = " {$field_key} ! không đúng định dạng   ";
            }
        }

        /**
         * kiểm tra email 
         * @param  [type] $field_key [description]
         * @return [type]            [description]
         */
        public function email($field_key)
        {
            $partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
            if( ! empty($this->data[$field_key]) && ! preg_match($partten,$this->data[$field_key]))
            {
                 $this->errors[$field_key][] = " {$field_key} ! không hợp lệ  ";
            }
        }


        public function password($field_key)
        {
            $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if( ! empty($this->data[$field_key]) && ! preg_match($partten,$this->data[$field_key]))
            {
                 $this->errors[$field_key][] = " {$field_key} !  phải lớn hơn 5 ký tự , có chữ in hoa và số   ";
            }
        }

        public function re_password($field_key)
        {
            
        }


        /**
         *  kiểm tra xem có tồn tại lỗi hay không
         */

        public function checkerror()
        {
            if(empty($this->errors))
            {
                return true;
            }
            return false;
        }


        /**
         * hiển thị hết lỗi ra ngoài 
         * @return [array] [description]
         */
        public function get_all_errors()
        {
            $errors_array = [];
            foreach($this->errors as $errors)
            {
               // array_push($errors_array,$errors);
                foreach ($errors as $value) {
                    $errors_array[]  = $value;
                    // echo $value;
                }
            }
            return $errors_array;
        }


        public function _debug($data = array())
        {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
      
    }
 ?>