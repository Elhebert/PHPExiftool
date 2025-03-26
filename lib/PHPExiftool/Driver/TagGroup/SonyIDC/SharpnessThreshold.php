<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SharpnessThreshold extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:SharpnessThreshold';

    protected string $name = 'SharpnessThreshold';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness Threshold',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279279
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:SharpnessThreshold',
            'desc' => [
                'en' => 'Sharpness Threshold',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
