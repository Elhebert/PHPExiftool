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
class WBBracketingSteps extends AbstractTagGroup
{
    protected string $id = 'Nikon:WBBracketingSteps';

    protected string $name = 'WBBracketingSteps';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Bracketing Steps',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 138890
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:WBBracketingSteps',
            'desc' => [
                'en' => 'WB Bracketing Steps',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139520
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:WBBracketingSteps',
            'desc' => [
                'en' => 'WB Bracketing Steps',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140691
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:WBBracketingSteps',
            'desc' => [
                'en' => 'WB Bracketing Steps',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
