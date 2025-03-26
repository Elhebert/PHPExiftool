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
class AEBracketingSteps extends AbstractTagGroup
{
    protected string $id = 'Nikon:AEBracketingSteps';

    protected string $name = 'AEBracketingSteps';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Bracketing Steps',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 138738
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:AEBracketingSteps',
            'desc' => [
                'en' => 'AE Bracketing Steps',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139368
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:AEBracketingSteps',
            'desc' => [
                'en' => 'AE Bracketing Steps',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140539
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:AEBracketingSteps',
            'desc' => [
                'en' => 'AE Bracketing Steps',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
