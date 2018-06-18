<?php
    header('Content-Type:application/json');

    class Api
    {
        public static function json($code, $message = '', $data = array())
        {
            if (! is_numeric($code)) {
                return '';
            }

            $result = array(
                'code' => $code,
                'message' => $message,
                'data' => $data
            );

            echo json_encode($result);
        }
    }
    
    $data = array(
        'id' => 1,
        'name' => 'wxp',
        'content' => array(
            'sex' => '男',
            'age' => '24',
            'class' => 'six'
        )
    );

    $code = http_response_code(201);
    echo $code;
    // Api::json($code, '返回数据成功', $data);

