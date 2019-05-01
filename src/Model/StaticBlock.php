<?php

namespace Model;

/**
 * Class StaticBlock
 */
class StaticBlock extends AbstractModel
{
    /**
     * @return false|mixed|string
     */
    public function getData()
    {
        return json_encode(
            $this->staticData()
        );
    }

    /**
     * @return array|mixed
     */
    public function staticData()
    {
        return [
            'key_1' => [
                'title' => 'Block Title 1',
                'description' => 'Block Description 1',
            ],
            'key_2' => [
                'title' => 'Block Title 2',
                'description' => 'Block Description 2',
            ],
        ];
    }
}
