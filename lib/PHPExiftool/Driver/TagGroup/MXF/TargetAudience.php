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
class TargetAudience extends AbstractTagGroup
{
    protected string $id = 'MXF:TargetAudience';

    protected string $name = 'TargetAudience';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Target Audience',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114248
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TargetAudience',
            'desc' => [
                'en' => 'Target Audience',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116439
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TargetAudience',
            'desc' => [
                'en' => 'Target Audience',
            ],
        ],
    ];

    protected int $count = 0;
}
