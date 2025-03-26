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
class RetouchInfoVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:RetouchInfoVersion';

    protected string $name = 'RetouchInfoVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Retouch Info Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::RetouchInfo
             * line : 137925
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::RetouchInfo.Nikon:RetouchInfoVersion',
            'desc' => [
                'en' => 'Retouch Info Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
