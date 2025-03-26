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
class ADLBracketingStep extends AbstractTagGroup
{
    protected string $id = 'Nikon:ADLBracketingStep';

    protected string $name = 'ADLBracketingStep';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ADL Bracketing Step',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139606
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:ADLBracketingStep',
            'desc' => [
                'en' => 'ADL Bracketing Step',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
