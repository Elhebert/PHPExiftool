<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAssistLamp extends AbstractTagGroup
{
    protected string $id = 'Panasonic:AFAssistLamp';

    protected string $name = 'AFAssistLamp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Assist Lamp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 192578
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:AFAssistLamp',
            'desc' => [
                'en' => 'AF Assist Lamp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
