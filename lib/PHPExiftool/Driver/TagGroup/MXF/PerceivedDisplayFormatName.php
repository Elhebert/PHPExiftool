<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PerceivedDisplayFormatName extends AbstractTagGroup
{
    protected string $id = 'MXF:PerceivedDisplayFormatName';

    protected string $name = 'PerceivedDisplayFormatName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Perceived Display Format Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116535
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PerceivedDisplayFormatName',
            'desc' => [
                'en' => 'Perceived Display Format Name',
            ],
        ],
    ];

    protected int $count = 0;
}
