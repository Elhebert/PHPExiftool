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
class ExposureProgram extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExposureProgram';

    protected string $name = 'ExposureProgram';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Program',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136964
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
