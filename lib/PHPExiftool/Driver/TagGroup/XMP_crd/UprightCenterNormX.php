<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UprightCenterNormX extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:UprightCenterNormX';

    protected string $name = 'UprightCenterNormX';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Upright Center Norm X',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284614
             * type : real
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:UprightCenterNormX',
            'desc' => [
                'en' => 'Upright Center Norm X',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
