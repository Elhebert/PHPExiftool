<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Copyright extends AbstractTagGroup
{
    protected string $id = 'Real-RA4:Copyright';

    protected string $name = 'Copyright';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Copyright',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV4
             * line : 232290
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::AudioV4.Real-RA4:Copyright',
            'desc' => [
                'en' => 'Copyright',
            ],
        ],
    ];

    protected int $count = 0;
}
