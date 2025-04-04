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
class ContentClassification extends AbstractTagGroup
{
    protected string $id = 'MXF:ContentClassification';

    protected string $name = 'ContentClassification';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Content Classification',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114260
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContentClassification',
            'desc' => [
                'en' => 'Content Classification',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115202
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContentClassification',
            'desc' => [
                'en' => 'Content Classification',
            ],
        ],
    ];

    protected int $count = 0;
}
