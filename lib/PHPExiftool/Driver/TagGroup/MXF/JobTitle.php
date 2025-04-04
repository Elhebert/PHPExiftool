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
class JobTitle extends AbstractTagGroup
{
    protected string $id = 'MXF:JobTitle';

    protected string $name = 'JobTitle';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Job Title',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116364
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:JobTitle',
            'desc' => [
                'en' => 'Job Title',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116367
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:JobTitle',
            'desc' => [
                'en' => 'Job Title',
            ],
        ],
    ];

    protected int $count = 0;
}
