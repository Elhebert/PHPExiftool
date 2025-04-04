<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SBAInputImageBitDepth extends AbstractTagGroup
{
    protected string $id = 'MetaIFD:SBAInputImageBitDepth';

    protected string $name = 'SBAInputImageBitDepth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'SBA Input Image Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Meta
             * line : 108937
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Kodak::Meta.MetaIFD:SBAInputImageBitDepth',
            'desc' => [
                'en' => 'SBA Input Image Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
