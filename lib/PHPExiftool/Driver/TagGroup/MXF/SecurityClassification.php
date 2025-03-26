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
class SecurityClassification extends AbstractTagGroup
{
    protected string $id = 'MXF:SecurityClassification';

    protected string $name = 'SecurityClassification';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Security Classification',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116301
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SecurityClassification',
            'desc' => [
                'en' => 'Security Classification',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118198
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SecurityClassification',
            'desc' => [
                'en' => 'Security Classification',
            ],
        ],
    ];

    protected int $count = 0;
}
