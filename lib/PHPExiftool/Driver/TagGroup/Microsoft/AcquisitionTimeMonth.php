<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AcquisitionTimeMonth extends AbstractTagGroup
{
    protected string $id = 'Microsoft:AcquisitionTimeMonth';

    protected string $name = 'AcquisitionTimeMonth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Acquisition Time Month',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::Xtra
             * line : 120116
             * type : ?
             * writable : false
             * count :
             * flags : avoid
             */
            'id' => 'Microsoft::Xtra.Microsoft:AcquisitionTimeMonth',
            'desc' => [
                'en' => 'Acquisition Time Month',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 1;
}
