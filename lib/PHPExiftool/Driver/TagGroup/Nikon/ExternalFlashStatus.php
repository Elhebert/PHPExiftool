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
class ExternalFlashStatus extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExternalFlashStatus';

    protected string $name = 'ExternalFlashStatus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 131898
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:ExternalFlashStatus',
            'desc' => [
                'en' => 'External Flash Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
