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
class VignetteMidpoint extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:VignetteMidpoint';

    protected string $name = 'VignetteMidpoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vignette Midpoint',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 284671
             * type : integer
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:VignetteMidpoint',
            'desc' => [
                'en' => 'Vignette Midpoint',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
