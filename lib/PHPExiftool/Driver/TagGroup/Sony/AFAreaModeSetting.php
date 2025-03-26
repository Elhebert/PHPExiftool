<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaModeSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:AFAreaModeSetting';

    protected string $name = 'AFAreaModeSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 247161
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Main
             * line : 247178
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Main
             * line : 247204
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
