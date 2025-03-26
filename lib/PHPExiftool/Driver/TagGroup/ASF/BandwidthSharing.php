<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BandwidthSharing extends AbstractTagGroup
{
    protected string $id = 'ASF:BandwidthSharing';

    protected string $name = 'BandwidthSharing';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bandwidth Sharing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::HeaderExtension
             * line : 943
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::HeaderExtension.ASF:BandwidthSharing',
            'desc' => [
                'en' => 'Bandwidth Sharing',
            ],
        ],
    ];

    protected int $count = 0;
}
