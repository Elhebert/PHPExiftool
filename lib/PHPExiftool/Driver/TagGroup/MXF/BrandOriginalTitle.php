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
class BrandOriginalTitle extends AbstractTagGroup
{
    protected string $id = 'MXF:BrandOriginalTitle';

    protected string $name = 'BrandOriginalTitle';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Brand Original Title',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117243
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BrandOriginalTitle',
            'desc' => [
                'en' => 'Brand Original Title',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117246
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:BrandOriginalTitle',
            'desc' => [
                'en' => 'Brand Original Title',
            ],
        ],
    ];

    protected int $count = 0;
}
