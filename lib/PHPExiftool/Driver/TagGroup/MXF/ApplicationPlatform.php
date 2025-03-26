<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationPlatform extends AbstractTagGroup
{
    protected string $id = 'MXF:ApplicationPlatform';

    protected string $name = 'ApplicationPlatform';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Application Platform',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115719
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ApplicationPlatform',
            'desc' => [
                'en' => 'Application Platform',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115722
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ApplicationPlatform',
            'desc' => [
                'en' => 'Application Platform',
            ],
        ],
    ];

    protected int $count = 0;
}
