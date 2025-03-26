<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaHeight extends AbstractTagGroup
{
    protected string $id = 'Nikon:AFAreaHeight';

    protected string $name = 'AFAreaHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128904
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaHeight',
            'desc' => [
                'en' => 'AF Area Height',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128945
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaHeight',
            'desc' => [
                'en' => 'AF Area Height',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129805
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:AFAreaHeight',
            'desc' => [
                'en' => 'AF Area Height',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::AFInfo2V0400
             * line : 129841
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2V0400.Nikon:AFAreaHeight',
            'desc' => [
                'en' => 'AF Area Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
