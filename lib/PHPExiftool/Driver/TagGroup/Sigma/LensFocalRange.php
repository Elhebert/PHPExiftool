<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensFocalRange extends AbstractTagGroup
{
    protected string $id = 'Sigma:LensFocalRange';

    protected string $name = 'LensFocalRange';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Focal Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sigma::Main
             * line : 236042
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:LensFocalRange',
            'desc' => [
                'en' => 'Lens Focal Range',
            ],
        ],
        1 => [
            /**
             * table_name : Sigma::Main
             * line : 237303
             * type : rational64u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sigma::Main.Sigma:LensFocalRange',
            'desc' => [
                'en' => 'Lens Focal Range',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
