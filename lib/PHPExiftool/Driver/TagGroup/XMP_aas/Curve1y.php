<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aas;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Curve1y extends AbstractTagGroup
{
    protected string $id = 'XMP-aas:Curve1y';

    protected string $name = 'Curve1y';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Curve 1y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::aas
             * line : 281531
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::aas.XMP-aas:Curve1y',
            'desc' => [
                'en' => 'Curve 1y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
