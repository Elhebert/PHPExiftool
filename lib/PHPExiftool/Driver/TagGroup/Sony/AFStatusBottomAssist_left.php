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
class AFStatusBottomAssist_left extends AbstractTagGroup
{
    protected string $id = 'Sony:AFStatusBottomAssist-left';

    protected string $name = 'AFStatusBottomAssist-left';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Status Bottom Assist-left',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 242101
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFStatusBottomAssist-left',
            'desc' => [
                'en' => 'AF Status Bottom Assist-left',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
