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
class AffineD extends AbstractTagGroup
{
    protected string $id = 'XMP-aas:AffineD';

    protected string $name = 'AffineD';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Affine D',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::aas
             * line : 281501
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::aas.XMP-aas:AffineD',
            'desc' => [
                'en' => 'Affine D',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
