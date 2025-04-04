<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JPSSeparation extends AbstractTagGroup
{
    protected string $id = 'JPS:JPSSeparation';

    protected string $name = 'JPSSeparation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'JPS Separation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::JPS
             * line : 104957
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::JPS.JPS:JPSSeparation',
            'desc' => [
                'en' => 'JPS Separation',
            ],
        ],
    ];

    protected int $count = 0;
}
