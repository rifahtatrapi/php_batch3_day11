<?php
namespace  App\classes;

class Example
{
    public $student = [];
    public function index()
    {
        $this->student =[
           0 => [
            'name' => 'Jaded',
            'email' => 'jahid@gmail.com',
            'mobile' =>  [
                'mobile1' => '0123654',
                'mobile2' => '7896541',
                 ],
           ],
           1 => [
                'name' => 'Fahim',
                'email' => 'fahim@gmail.com',
                'mobile' => [
                    'mobile1' => '0123654',
                    'mobile2' => '7896541',
                ],
        ],
            2 => 'BITM',
            3 => [
                'name' => 'shahed',
                'email' => 'shahed@gmail.com',
                'mobile' => [
        'mobile1' => '0123654',
        'mobile2' => '7896541'
                ],
            ]
        ];


        echo '<pre>';
//        print_r($this->student);
        var_dump($this->student);


//            foreach ($this->student as $item)
//            {
//                if (is_array($item))
//                {
//                    foreach ($item as $value)
//                    {
//                        if (is_array($value))
//                        {
//                            foreach ($value as $v_value)
//                            {
//                                echo $v_value . ' ';
//                            }
//                        }
//                        else {
//                            echo $value . ' ';
//                        }
//                    }
//                }
//                else {
//                    echo $item;
//                }
//
//                echo '<br/>';
//            }

//        foreach ($this->student as $key => $item) {
//            if ($key == 0)
//            {
//                echo $item['name'] . ' ' . $item['email'] . ' ' . $item['mobile'] . '<br/>';
//                break;
//            }
//        }

//        echo $this->student[1]['email'];


//        $this->student = [10,20,'BITM',10.20,true,false];
////        echo $this->students;
//        foreach ($this->student as $key => $student)
//        {
//            echo 'index no - '. $key. ' value - ' . $student. '<br/>';
//        }
    }
}